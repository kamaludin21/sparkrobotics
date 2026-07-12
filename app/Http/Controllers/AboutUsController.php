<?php

namespace App\Http\Controllers;

use App\Jobs\SendInboxNotification;
use App\Models\CaseStudy;
use App\Models\Inbox as InboxModel;
use App\Settings\Company;
use App\Settings\Contact;
use App\Settings\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutUsController extends Controller
{
    public function companyProfile()
    {
        $settings = app(Company::class);
        return view('pages.about.company-profile', compact('settings'));
    }

    public function caseStudies()
    {
        $caseStudies = CaseStudy::orderBy('id')->get();
        return view('pages.about.case-studies', compact('caseStudies'));
    }

    public function caseStudy(string $param1, $param2 = null)
    {
        $slug = $param2 ? $param2 : $param1;
        $caseStudy = \App\Models\CaseStudy::whereTranslation('slug', $slug)->firstOrFail();

        // Tentukan suffix berdasarkan locale (misal: 'id' atau 'en')
        $locale = app()->getLocale(); // Hasilnya 'id' atau 'en'
        $captionField = 'caption_' . $locale;

        $images = [];
        if (!empty($caseStudy->images) && is_array($caseStudy->images)) {
            foreach ($caseStudy->images as $img) {
                $images[] = [
                    'url' => \Illuminate\Support\Facades\Storage::url(str_replace('livewire-file:', '', $img['logo'] ?? '')),
                    // Mengambil nilai berdasarkan locale yang aktif
                    'caption' => $img[$captionField] ?? $img['caption_en'] ?? '',
                ];
            }
        }

        return view('pages.about.case-study', [
            'caseStudy' => $caseStudy,
            'processedImages' => $images
        ]);
    }

    public function contact()
    {
        $contact = app(Contact::class);
        $inbox = app(Inbox::class);
        return view('pages.about.contact', compact('contact','inbox'));
    }

    // AboutUsController
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100|regex:/^[a-zA-Z\s]*$/',
            'company'   => 'nullable|string|max:100',
            'email'     => 'required|email:rfc,dns|max:255',
            'phone'     => 'nullable|string|max:20',
            'message'   => 'required|string|max:2000',
        ], [
            'full_name.regex' => 'The name may only contain letters and spaces.',
            'email.dns'       => 'Please provide a valid and active email address.'
        ]);

        try {
            $cleanMessage = strip_tags($validated['message']);
            InboxModel::create([
                'full_name' => $validated['full_name'],
                'company'   => $validated['company'],
                'email'     => $validated['email'],
                'phone'     => $validated['phone'],
                'message'   => $cleanMessage,
            ]);
            $emailData = [
                'subject'   => 'Inbox for Spark Robotics',
                'full_name' => $validated['full_name'],
                'company'   => $validated['company'] ?? '-',
                'email'     => $validated['email'],
                'phone'     => $validated['phone'] ?? '-',
                'message'   => $cleanMessage,
            ];
            SendInboxNotification::dispatch($emailData);
            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            Log::error('Contact form submission error: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Sorry, something went wrong. Please try again later.']);
        }
    }
}

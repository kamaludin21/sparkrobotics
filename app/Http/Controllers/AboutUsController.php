<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Inbox;
use App\Settings\Company;
use App\Settings\Contact;
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
        $captionField = 'caption_' . $locale; // Hasilnya 'caption_id' atau 'caption_en'

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
        return view('pages.about.contact', compact('contact'));
    }

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
            Inbox::create([
                'full_name' => $validated['full_name'],
                'company'   => $validated['company'],
                'email'     => $validated['email'],
                'phone'     => $validated['phone'],
                'message'   => $cleanMessage,
            ]);
            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            Log::error('Contact form submission error: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Sorry, something went wrong. Please try again later.']);
        }
    }

}

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
        // 1. Validasi Super Ketat
        $validated = $request->validate([
            // Hanya izinkan huruf dan spasi, maksimal 100 karakter
            'full_name' => 'required|string|max:100|regex:/^[a-zA-Z\s]*$/',

            'company'   => 'nullable|string|max:100',

            // Validasi format email secara RFC dan cek apakah DNS domain valid
            'email'     => 'required|email:rfc,dns|max:255',

            // Batasi panjang nomor HP, sesuaikan dengan standar internasional
            'phone'     => 'nullable|string|max:20',

            // Batasi panjang pesan untuk mencegah payload yang sangat besar (DoS via DB)
            'message'   => 'required|string|max:2000',
        ], [
            // (Opsional) Custom error messages
            'full_name.regex' => 'The name may only contain letters and spaces.',
            'email.dns'       => 'Please provide a valid and active email address.'
        ]);

        try {
            // 2. Sanitasi Data Tambahan (XSS Prevention)
            // Hilangkan tag HTML jika ada user usil yang mencoba memasukkan <h1> atau <script>
            $cleanMessage = strip_tags($validated['message']);

            // 3. Proses penyimpanan data (contoh menggunakan Model Eloquent)
            Inbox::create([
                'full_name' => $validated['full_name'],
                'company'   => $validated['company'],
                'email'     => $validated['email'],
                'phone'     => $validated['phone'],
                'message'   => $cleanMessage,
            ]);

            // (Opsional) Kirim notifikasi email di sini

            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            // Logging error secara aman tanpa menampilkan detail error ke user
            Log::error('Contact form submission error: ' . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Sorry, something went wrong. Please try again later.']);
        }
    }
}

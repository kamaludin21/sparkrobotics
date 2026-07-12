<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Product extends Model implements TranslatableContract
{
    use Translatable;
    protected $fillable = [
        'sort',
        'brand_id',
        'title',
        'slug',
        // Media
        'thumbnail_image',
        'hero_media_type',
        'hero_image_path',
        'hero_youtube_url',
        'showcase_images',
        'features_images',
        'datasheet_file_path',
        'specifications',
    ];

    public $translatedAttributes = [
        'title_section',
        'subtitle_section',
        'content',
    ];

    protected $casts = [
        'showcase_images' => 'array',
        'features_images' => 'array',
        'specifications'  => 'array',
    ];

    protected $appends = ['video_id'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function translations(): HasMany
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function getSizeAttribute()
    {
        // 1. Tangani langsung jika fieldnya kosong atau null
        if (empty($this->datasheet_file_path)) {
            return null;
        }

        try {
            if (Storage::disk('public')->exists($this->datasheet_file_path)) {
                $bytes = Storage::disk('public')->size($this->datasheet_file_path);
            } else {
                $bytes = File::size(public_path($this->datasheet_file_path));
            }

            return $this->formatSizeUnits($bytes);
        } catch (\Exception $e) {
            // 2. Catch tetap dipertahankan sebagai safety net 
            // jika terjadi error lain (misal: file dihapus saat proses berjalan)
            return null;
        }
    }

    private function formatSizeUnits(string $bytes)
    {
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' bytes';
        }
    }

    public function getVideoIdAttribute()
    {
        if (!$this->hero_youtube_url) {
            return null;
        }

        // support youtube.com & youtu.be
        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^\s&]+)/', $this->hero_youtube_url, $matches);
        $videoId = $matches[1] ?? null;

        if (!$videoId) {
            return null;
        }
        return $videoId;
    }
}

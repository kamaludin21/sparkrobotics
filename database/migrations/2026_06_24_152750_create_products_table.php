<?php

use App\Models\Brand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('sort')->default(0)->comment('Urutan produk di halaman produk');
            // Relations
            $table->foreignIdFor(Brand::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            // Basic Information
            $table->string('title');
            $table->string('slug')->index();

            // Media
            $table->string('thumbnail_image')->nullable();

            // Hero Media Setup
            $table->enum('hero_media_type', ['image', 'video'])->default('image');
            $table->string('hero_image_path')->nullable()->comment('Path gambar lokal');
            $table->string('hero_youtube_url')->nullable()->comment('Tautan YouTube');

            $table->json('showcase_images')->nullable();
            $table->json('features_images')->nullable();

            // Documents
            $table->string('datasheet_file_path')->nullable();

            // Product Data
            $table->json('specifications')->nullable();

            $table->timestamps();
        });

        Schema::create('product_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->foreignId('product_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('locale')->index();

            // Detail Page Content
            $table->string('title_section');
            $table->string('subtitle_section')->nullable();
            $table->longText('content')->nullable();

            $table->unique(['product_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_translations');
        Schema::dropIfExists('products');
    }
};

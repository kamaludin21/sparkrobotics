<?php

use App\Models\ArticleCategory;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ArticleCategory::class)
                ->constrained()
                ->onDelete('cascade');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('article_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('article_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->unique(['article_id', 'locale']);
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

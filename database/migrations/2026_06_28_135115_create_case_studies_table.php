<?php

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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->json('images')->nullable();
            $table->timestamps();
        });

        Schema::create('case_study_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('case_study_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->unique(['case_study_id', 'locale']);
            $table->foreign('case_study_id')->references('id')->on('case_studies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_study_translations');
        Schema::dropIfExists('case_studies');
    }
};

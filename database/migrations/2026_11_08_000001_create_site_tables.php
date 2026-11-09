<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $t) {
            $t->id();
            $t->string('key')->unique();
            $t->text('value')->nullable();
        });

        Schema::create('sections', function (Blueprint $t) {
            $t->id();
            $t->string('key')->unique();
            $t->string('sub')->nullable();
            $t->text('heading')->nullable();
            $t->text('para')->nullable();
        });

        Schema::create('site_images', function (Blueprint $t) {
            $t->id();
            $t->string('key')->unique();
            $t->string('label');
            $t->string('path');
            $t->string('alt')->nullable();
        });

        Schema::create('gallery_categories', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->string('slug')->unique();
            $t->string('description')->nullable();
            $t->string('cover_path')->nullable();
            $t->unsignedInteger('sort')->default(0);
            $t->boolean('is_active')->default(true);
            $t->timestamps();
        });

        Schema::create('gallery_photos', function (Blueprint $t) {
            $t->id();
            $t->foreignId('gallery_category_id')->constrained()->cascadeOnDelete();
            $t->string('path');
            $t->unsignedInteger('sort')->default(0);
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_photos');
        Schema::dropIfExists('gallery_categories');
        Schema::dropIfExists('site_images');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('settings');
    }
};

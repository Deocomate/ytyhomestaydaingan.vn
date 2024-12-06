<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::defaultStringLength(1000);

//        Schema::create('menus', function (Blueprint $table) {
//            $table->id();
//            $table->string('name')->nullable();
//            $table->string('url')->nullable();
//            $table->integer('priority')->default(0)->nullable();
//            $table->unsignedBigInteger('parent_id')->nullable();
//            $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
//            $table->timestamps();
//        });
//        Schema::create('provinces', function (Blueprint $table) {
//            $table->id()->autoIncrement(false);
//            $table->string('name')->nullable();
//            $table->string('codename')->nullable();
//        });
//        Schema::create('districts', function (Blueprint $table) {
//            $table->id();
//            $table->string('name')->nullable();
//            $table->string('codename')->nullable();
//            $table->unsignedBigInteger('province_id')->nullable();
//            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
//        });
//
//        Schema::create('tour_providers', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('thumb')->nullable();
//            $table->string('phone_number')->nullable();
//            $table->string('email')->nullable();
//            $table->string('address')->nullable();
//            $table->string('hotline')->nullable();
//            $table->string('facebook')->nullable();
//            $table->string('zalo')->nullable();
//            $table->string('website')->nullable();
//            $table->timestamps();
//        });
//
//        Schema::create('tours', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('duration')->nullable();
//            $table->longText('overview')->nullable();
//            $table->longText('itinerary')->nullable();
//            $table->string('thumb')->nullable();
//            $table->integer('priority')->nullable();
//            $table->float('dealer_price')->nullable();
//            $table->float('retail_price')->nullable();
//            $table->string('slug')->nullable();
//            $table->unsignedBigInteger('tour_provider_id');
//            $table->foreign('tour_provider_id')->references('id')->on('tour_providers')->onDelete('cascade');
//            $table->timestamps();
//        });
//
//        Schema::create('tour_images', function (Blueprint $table) {
//            $table->id();
//            $table->string('link');
//            $table->unsignedBigInteger('tour_id');
//            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
//            $table->timestamps();
//        });
//
//        Schema::create('tour_locations', function (Blueprint $table) {
//            $table->id();
//            $table->unsignedBigInteger('tour_id');
//            $table->unsignedBigInteger('district_id');
//            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
//            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
//            $table->timestamps();
//        });
//
//        Schema::create('categories', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('thumb')->nullable();
//            $table->timestamps();
//        });
//
//        Schema::create('tour_categories', function (Blueprint $table) {
//            $table->id();
//            $table->unsignedBigInteger('tour_id');
//            $table->unsignedBigInteger('category_id');
//            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->timestamps();
//        });
//
//        Schema::create('information', function (Blueprint $table) {
//            $table->id();
//            $table->string('logo_link')->nullable();
//            $table->string('site_name')->nullable();
//            $table->string('email')->nullable();
//            $table->string('address')->nullable();
//            $table->string('phone_number')->nullable();
//            $table->string('phone_number_2')->nullable();
//            $table->string('zalo_number')->nullable();
//            $table->string('whatsapp_number')->nullable();
//            $table->string('hotline_number')->nullable();
//            $table->longText('introduce')->nullable();
//            $table->text('google_map_link')->nullable();
//            $table->string('seo_thumb')->nullable();
//            $table->string('seo_title')->nullable();
//            $table->string('seo_description')->nullable();
//            $table->longText('tour_include_exclude')->nullable();
//            $table->longText('tour_policy')->nullable();
//            $table->timestamps();
//        });
//
//        Schema::create('bookings', function (Blueprint $table) {
//            $table->id();
//            $table->string('fullname');
//            $table->string('phone_number');
//            $table->string('email')->nullable();
//            $table->string('address')->nullable();
//            $table->integer('quantity');
//            $table->unsignedBigInteger('tour_id');
//            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::dropIfExists('menus');
//        Schema::dropIfExists('bookings');
//        Schema::dropIfExists('tour_categories');
//        Schema::dropIfExists('categories');
//        Schema::dropIfExists('tour_locations');
//        Schema::dropIfExists('tour_images');
//        Schema::dropIfExists('tours');
//        Schema::dropIfExists('tour_providers');
//        Schema::dropIfExists('information');
//        Schema::dropIfExists('districts');
//        Schema::dropIfExists('provinces');
    }
};

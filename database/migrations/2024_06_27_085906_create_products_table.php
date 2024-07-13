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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->integer('childcategory_id')->nullable;
            $table->integer('brand_id')->nullable;
            $table->string('name');
            $table->string('code');
            $table->string('unit')->nullable;
            $table->string('tags')->nullable;
            $table->string('video')->nullable;
            $table->string('purchase_price')->nullable;
            $table->string('selling_price')->nullable;
            $table->string('discount_price')->nullable;
            $table->string('stock_quantity')->nullable;
            $table->integer('warehouse')->nullable;
            $table->string('description')->nullable;
            $table->string('thumbnail')->nullable;
            $table->string('images')->nullable;
            $table->integer('featured')->nullable;
            $table->integer('today_deal')->nullable;
            $table->integer('status')->nullable;
            $table->integer('flash_deal_id')->nullable;
            $table->integer('cash_on_delivery')->nullable;
            $table->integer('admin_id')->nullable;
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    // $table->unsignedBigInteger('category_id');
    // $table->unsignedBigInteger('subcategory_id');
    // $table->integer('childcategory_id')->nullable();
    // $table->integer('brand_id')->nullable();
    // $table->string('name');
    // $table->string('code');
    // $table->string('unit')->nullable();
    // $table->string('tags')->nullable();
    // $table->string('video')->nullable();
    // $table->decimal('purchase_price', 10, 2)->nullable();
    // $table->decimal('selling_price', 10, 2)->nullable();
    // $table->decimal('discount_price', 10, 2)->nullable();
    // $table->integer('stock_quantity')->nullable();
    // $table->integer('warehouse')->nullable();
    // $table->string('description')->nullable();
    // $table->string('thumbnail')->nullable();
    // $table->string('images')->nullable();
    // $table->boolean('featured')->nullable();
    // $table->boolean('today_deal')->nullable();
    // $table->boolean('status')->nullable();
    // $table->unsignedBigInteger('flash_deal_id')->nullable();
    // $table->boolean('cash_on_delivery')->nullable();
    // $table->unsignedBigInteger('admin_id')->nullable();
    // $table->timestamps();

    // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    // $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
    // $table->foreign('flash_deal_id')->references('id')->on('flash_deals')->onDelete('cascade');
    // $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

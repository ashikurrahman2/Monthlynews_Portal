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
        Schema::create('epapers', function (Blueprint $table) {
            $table->id();
            $table->string('paper_title');
            $table->string('paper_slug');
            $table->string('Paper_image')->nullable();
            $table->string('Paper_pdf')->nullable();
            $table->string('paper_date')->nullable;
            $table->string('paper_month')->nullable;
            $table->integer('paper_year')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epapers');
    }
};

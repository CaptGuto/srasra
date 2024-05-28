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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tags');
            $table->string('description');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->timestamps();

            // additional fields might get added as we go along
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listing');
    }
};

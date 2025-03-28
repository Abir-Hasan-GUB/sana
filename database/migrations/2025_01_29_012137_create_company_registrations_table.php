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
        Schema::create('company_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('company_banner')->nullable();
            $table->string('business_location');
            $table->string('business_name');
            $table->string('abn_acn');
            $table->string('position');
            $table->string('business_age');
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->enum('authorize', ['yes', 'no']);
            $table->text('success_story')->nullable();
            $table->text('special_offer')->nullable();
            $table->text('special_instructions')->nullable();
            $table->tinyInteger('is_approved')->default(0); // 0 = Unapproved, 1 = Approved
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_registrations');
    }
};

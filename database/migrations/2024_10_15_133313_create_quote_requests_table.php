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
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);      // Full name of the user
            $table->string('email', 255);         // Email address
            $table->string('telephone');          // Telephone number
            $table->string('service');            // Service type (General Enquiries, Product Support, etc.)
            $table->text('message');              // Message from the user
            $table->timestamps();                 // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_requests');

    }
};

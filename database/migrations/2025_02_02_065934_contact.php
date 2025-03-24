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
        Schema::create('contact',function(Blueprint $b)
        {
            $b -> id('contact_id');
            $b -> string('contact_name');
            $b -> string('contact_email');
            $b -> string('contact_msg');
            $b ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

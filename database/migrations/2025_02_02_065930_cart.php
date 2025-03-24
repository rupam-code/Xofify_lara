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
        Schema::create('cart',function(Blueprint $b)
        {
            $b -> id('cart_id');
            $b -> integer('uid');
            $b -> integer('pid');
            $b -> string('contact_name');
            $b -> integer('contact_price');
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

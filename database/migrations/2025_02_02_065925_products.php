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
        Schema::create('products',function(Blueprint $b)
        {
            $b -> id('pid');
            $b -> string('category_id');
            $b -> string('product_name');
            $b-> integer('product_price');
            $b -> string('product_description');
            $b -> string('product_image');
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

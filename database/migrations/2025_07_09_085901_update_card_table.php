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
        Schema::create('seller', function (Blueprint $table) {
            $table->id();
            $table->string('card_id');
            $table->string('name');
            $table->string('price');
            $table->string('delivery_price');
        });

        Schema::table('card', function($table) {
            $table->dropColumn('seller');
            $table->dropColumn('price');
            $table->dropColumn('delivery_price');
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

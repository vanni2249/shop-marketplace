<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_key', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->onUpdate('casacde')->onDelete('null');
            $table->foreignId('key_id')->onUpdate('casacde')->onDelete('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_key');
    }
};

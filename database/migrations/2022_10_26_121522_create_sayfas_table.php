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
        Schema::create('sayfas', function (Blueprint $table) {
            $table->id();
            $table->string('slug_en');
            $table->string('slug_tr');
            $table->string('slug_ar');
            $table->string('slug_fr');
            $table->string('slug_ru');
            $table->string('image');
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
        Schema::dropIfExists('sayfas');
    }
};

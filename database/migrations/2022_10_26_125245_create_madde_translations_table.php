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
        Schema::create('madde_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('madde_id')->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->unique(['madde_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('madde_translations');
    }
};

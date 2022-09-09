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
        Schema::create('labels', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->enum('type', ['text', 'image'])->default('text');
            $table->string('text_color')->default('red');
            $table->string('background_color')->default('transparent');
            $table->string('styles')->default('');

            $table->timestamps();
        });

        Schema::table('prices', function (Blueprint $table) {
            $table->integer('label_id')->nullable();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prices', function (Blueprint $table) {
           $table->dropColumn('label_id');
        });

        Schema::dropIfExists('labels');
    }
};

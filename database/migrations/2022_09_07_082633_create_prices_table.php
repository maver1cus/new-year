<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('prices', function (Blueprint $table) {
      $table->id();
      $table->string('height');
      $table->string('article')->nullable();
      $table->integer('percent');
      $table->integer('price_low');
      $table->integer('price_old_low');
      $table->integer('price_middle');
      $table->integer('price_old_middle');
      $table->integer('price_high');
      $table->integer('price_old_high');
      $table->boolean('is_show')->default(1);
      $table->boolean('is_active')->default(0);

      $table->integer('product_id');

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
    Schema::dropIfExists('prices');
  }
};

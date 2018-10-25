<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('dogs', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->date('entrada')->nullable();
      $table->string('name', 100);
      $table->string('microchip')->nullable();
      $table->string('file')->nullable();
      $table->string('color', 80)->nullable();
      $table->boolean('castrado')->nullable();
      $table->string('age', 10)->nullable();
      $table->string('porte', 80)->nullable();
      $table->string('temperamento', 150)->nullable();
      
      $table->unsignedInteger('raca_id');
      $table->foreign('raca_id')->references('id')->on('racas')->onDelete('cascade');
      
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('dogs');
  }
}

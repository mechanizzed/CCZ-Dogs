<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('vaccines', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->string('title', 150);
      $table->date('data')->nullable();
      $table->longText('body')->nullable();
      
      $table->unsignedInteger('dog_id');
      $table->foreign('dog_id')->references('id')->on('dogs')->onDelete('cascade');
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('vaccines');
  }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBaiaCanilToDogsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('dogs', function (Blueprint $table) {
      $table->string('baia')->nullable();
      $table->string('canil')->nullable();
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('dogs', function (Blueprint $table) {
      $table->dropColumn('baia');
      $table->dropColumn('canil');
    });
  }
}

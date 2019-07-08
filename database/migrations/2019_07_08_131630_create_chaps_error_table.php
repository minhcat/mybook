<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapsErrorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chaps_error', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_chap');
			$table->unsignedInteger('id_user');
			$table->string('type');
			$table->string('content');
			$table->dateTime('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('chaps_error');
	}

}

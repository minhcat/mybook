<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chaps', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('id_trans');
			$table->string('name');
			$table->unsignedInteger('index');
			$table->unsignedInteger('view');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('chaps');
	}

}

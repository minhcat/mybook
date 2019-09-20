<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors_rate', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_author');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('rate');
			$table->date('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('authors_rate');
	}

}

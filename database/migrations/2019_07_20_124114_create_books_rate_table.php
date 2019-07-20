<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_rate', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('rate');
			$table->dateTime('datetime');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('books_rate');
	}

}

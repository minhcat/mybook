<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksErrorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_error', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_book');
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
		Schema::dropIfExists('books_error');
	}

}

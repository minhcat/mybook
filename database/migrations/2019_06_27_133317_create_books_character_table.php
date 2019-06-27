<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksCharacterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_character', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('id_character');
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
		Schema::dropIfExists('books_character');
	}

}

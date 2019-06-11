<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksFollowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_follow', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('id_book');
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
		Schema::dropIfExists('books_follow');
	}

}

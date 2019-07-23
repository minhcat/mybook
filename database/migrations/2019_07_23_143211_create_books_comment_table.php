<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_comment', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('day');
			$table->unsignedInteger('date');
			$table->unsignedInteger('week');
			$table->unsignedInteger('month');
			$table->unsignedInteger('season');
			$table->unsignedInteger('year');
			$table->unsignedInteger('comment');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('books_comment');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksLikeStatisticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_like_statistic', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('day');
			$table->unsignedInteger('date');
			$table->unsignedInteger('week');
			$table->unsignedInteger('month');
			$table->unsignedInteger('season');
			$table->unsignedInteger('year');
			$table->unsignedInteger('like');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('books_like_statistic');
	}

}

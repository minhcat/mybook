<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsStatisticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments_statistic', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('detail');
			$table->unsignedInteger('chap');
			$table->unsignedInteger('reply');
			$table->unsignedInteger('all');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('comments_statistic');
	}

}

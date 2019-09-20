<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsFollowStatisticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors_follow_statistic', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_author');
			$table->unsignedInteger('day');
			$table->unsignedInteger('date');
			$table->unsignedInteger('week');
			$table->unsignedInteger('month');
			$table->unsignedInteger('season');
			$table->unsignedInteger('year');
			$table->unsignedInteger('follow');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('authors_follow_statistic');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLikeStatisticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_like_statistic', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('day');
			$table->unsignedInteger('date');
			$table->unsignedInteger('week');
			$table->unsignedInteger('month');
			$table->unsignedInteger('season');
			$table->unsignedInteger('year');
			$table->unsignedInteger('like_statistic');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users_like_statistic');
	}

}

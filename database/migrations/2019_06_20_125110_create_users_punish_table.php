<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPunishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_punish', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_user_punish');
			$table->unsignedInteger('id_user_mod');
			$table->unsignedInteger('id_comment');
			$table->unsignedInteger('time_punish');
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
		Schema::dropIfExists('users_punish');
	}

}

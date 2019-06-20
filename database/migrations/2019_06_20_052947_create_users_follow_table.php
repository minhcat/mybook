<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersFollowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_follow', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_user_follow');
			$table->unsignedInteger('id_user_mod');
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
		Schema::dropIfExists('users_follow');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_ban', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_user_ban');
			$table->unsignedInteger('id_user_mod');
			$table->unsignedInteger('id_comment');
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
		Schema::dropIfExists('users_ban');
	}

}

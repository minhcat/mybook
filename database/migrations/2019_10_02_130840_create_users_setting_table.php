<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_setting', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_user');
			$table->boolean('noti_admin');
			$table->boolean('noti_user');
			$table->boolean('noti_item');
			$table->string('info');
			$table->string('tag');
			$table->string('friend');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users_setting');
	}

}

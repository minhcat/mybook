<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins_setting', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_admin');
			$table->boolean('sidebar');
			$table->string('skin');
			$table->string('default_page');
			$table->string('email');
			$table->string('notification');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('admins_setting');
	}

}

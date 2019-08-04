<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications_admin', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_admin');
			$table->unsignedInteger('id_user')->nullable();
			$table->string('type');
			$table->string('title');
			$table->string('content');
			$table->string('sendto');
			$table->date('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('notifications_admin');
	}

}

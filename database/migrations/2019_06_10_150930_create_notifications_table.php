<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('id_contant');
			$table->unsignedInteger('id_page')->nullable();
			$table->string('type');
			$table->longText('content');
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
		Schema::dropIfExists('notifications');
	}

}

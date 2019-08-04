<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mails', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_admin');
			$table->unsignedInteger('id_user');
			$table->string('title');
			$table->string('content');
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
		Schema::dropIfExists('mails');
	}

}

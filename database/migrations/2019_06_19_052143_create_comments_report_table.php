<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments_report', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_comment');
			$table->unsignedInteger('id_user');
			$table->unsignedInteger('id_page');
			$table->string('page');
			$table->string('content');
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
		Schema::dropIfExists('comments_report');
	}

}

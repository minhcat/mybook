<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_user');
			$table->string('type');
			$table->string('page');
			$table->unsignedInteger('id_page');
			$table->boolean('level');
			$table->string('content');
			$table->date('date');
			$table->unsignedInteger('like');
			$table->unsignedInteger('dislike');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('comments');
	}

}

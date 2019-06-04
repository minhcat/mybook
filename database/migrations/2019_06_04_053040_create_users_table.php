<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('nickname');
			$table->boolean('gender');
			$table->date('birth');
			$table->string('genitive');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('slogan');
			$table->longText('description');
			$table->unsignedInteger('like');
			$table->unsignedInteger('follow');
			$table->unsignedInteger('comment');
			$table->string('name_login');
			$table->string('password');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}

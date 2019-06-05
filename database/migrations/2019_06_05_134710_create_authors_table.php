<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function (Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('slug');
			$table->boolean('gender')->nullable();
			$table->date('birth')->nullable();
			$table->string('type');
			$table->string('twitter')->nullable();
			$table->string('website')->nullable();
			$table->longText('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('authors');
	}

}

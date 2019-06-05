<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trans', function (Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('slug');
			$table->string('facebook')->nullable();
			$table->string('website')->nullable();
			$table->unsignedInteger('view');
			$table->unsignedInteger('like');
			$table->unsignedInteger('follow');
			$table->unsignedInteger('comment');
			$table->unsignedInteger('rate');
			$table->float('rate_point');
			$table->unsignedInteger('books');
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
		Schema::dropIfExists('trans');
	}

}

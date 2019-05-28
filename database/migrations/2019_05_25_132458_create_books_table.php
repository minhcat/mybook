<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('slug');
			$table->dateTime('create_at');
			$table->dateTime('update_at');
			$table->unsignedInteger('view');
			$table->unsignedInteger('comment');
			$table->unsignedInteger('like');
			$table->unsignedInteger('follow');
			$table->unsignedInteger('rate');
			$table->float('rate_point');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('books');
	}

}

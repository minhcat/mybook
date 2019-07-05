<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksApprovedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_approved', function (Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_book');
			$table->unsignedInteger('id_admin');
			$table->string('reply');
			$table->string('status');
			$table->unsignedInteger('call');
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
		Schema::dropIfExists('books_approved');
	}

}

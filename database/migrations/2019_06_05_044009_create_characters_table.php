<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('characters', function (Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('slug');
			$table->string('other_name')->nullable();
			$table->boolean('gender')->nullable();
			$table->date('birth')->nullable();
			$table->string('type');
			$table->string('family')->nullable();
			$table->string('job')->nullable();
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
		Schema::dropIfExists('characters');
	}

}

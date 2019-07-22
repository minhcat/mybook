<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksViewTableFeatureDay extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books_view', function(Blueprint $table) {
			$table->unsignedInteger('day');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books_view', function(Blueprint $table) {
			$table->dropColunm('day');
		});
	}

}

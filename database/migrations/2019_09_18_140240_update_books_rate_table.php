<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books_rate', function(Blueprint $table) {
			$table->date('date');
		});
		Schema::table('books_rate', function(Blueprint $table) {
			$table->dropColumn('datetime');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books_rate', function(Blueprint $table) {
			$table->dateTime('datetime');
		});
		Schema::table('books_rate', function(Blueprint $table) {
			$table->dropColumn('date');
		});
	}

}

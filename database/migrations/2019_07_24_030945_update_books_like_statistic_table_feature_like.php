<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksLikeStatisticTableFeatureLike extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books_like_statistic', function(Blueprint $table) {
			$table->dropColumn('like');
		});
		Schema::table('books_like_statistic', function(Blueprint $table) {
			$table->unsignedInteger('like_statistic');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books_like_statistic', function(Blueprint $table) {
			$table->dropColumn('like_statistic');
		});
		Schema::table('books_like_statistic', function(Blueprint $table) {
			$table->unsignedInteger('like');
		});
	}

}

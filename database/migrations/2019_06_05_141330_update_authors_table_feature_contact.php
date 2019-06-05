<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAuthorsTableFeatureContact extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('authors', function (Blueprint $table) {
			$table->unsignedInteger('rate');
			$table->unsignedInteger('follow');
			$table->unsignedInteger('like');
			$table->unsignedInteger('view');
			$table->unsignedInteger('comment');
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
		Schema::table('authors', function (Blueprint $table) {
			$table->dropColumn('rate');
			$table->dropColumn('follow');
			$table->dropColumn('like');
			$table->dropColumn('view');
			$table->dropColumn('comment');
			$table->dropColumn('rate_point');
		});
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksFeatureOthernameDescriptionKeyword extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function (Blueprint $table) {
			$table->string('other_name');
			$table->longText('description');
			$table->string('keyword');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books', function (Blueprint $table) {
			$table->dropColumn('other_name');
			$table->dropColumn('description');
			$table->dropColumn('keyword');
		});
	}

}

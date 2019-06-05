<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksTableFeatureAuthorId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function (Blueprint $table) {
			$table->unsignedInteger('id_author');
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
			$table->dropColumn('id_author');
		});
	}

}

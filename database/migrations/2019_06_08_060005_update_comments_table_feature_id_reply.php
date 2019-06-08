<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCommentsTableFeatureIdReply extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function (Blueprint $table) {
			$table->unsignedInteger('id_reply')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function (Blueprint $table) {
			$table->dropColumn('id_reply');
		});
	}

}

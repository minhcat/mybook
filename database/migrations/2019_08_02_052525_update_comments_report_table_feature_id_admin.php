<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCommentsReportTableFeatureIdAdmin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments_report', function(Blueprint $table) {
			$table->unsignedInteger('id_admin');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments_report', function(Blueprint $table) {
			$table->dropColunm('id_admin');
		});
	}

}

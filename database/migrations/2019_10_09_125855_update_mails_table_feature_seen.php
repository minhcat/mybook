<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMailsTableFeatureSeen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mails', function(Blueprint $table) {
			$table->boolean('seen');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mails', function(Blueprint $table) {
			$table->dropColumn('seen');
		});
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNotificationAdminTableFeatureSeen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notifications_admin', function(Blueprint $table) {
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
		Schema::table('notifications_admin', function(Blueprint $table) {
			$table->dropColumn('seen');
		});
	}

}

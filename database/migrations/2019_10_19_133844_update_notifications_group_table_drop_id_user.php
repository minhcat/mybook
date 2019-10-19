<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNotificationsGroupTableDropIdUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notifications_group', function(Blueprint $table) {
			$table->dropColumn('id_user');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('notifications_group', function(Blueprint $table) {
			$table->unsignedInteger('id_user');
		});
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTransTableFeatureMember extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trans', function (Blueprint $table) {
			$table->string('leader');
			$table->string('member');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trans', function (Blueprint $table) {
			$table->dropColumn('leader');
			$table->dropColumn('member');
		});
	}

}

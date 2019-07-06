<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateChapsTableFeatureApproved extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chaps', function (Blueprint $table) {
			$table->boolean('approved')->default(1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chaps', function (Blueprint $table) {
			$table->dropColumn('approved');
		});
	}

}

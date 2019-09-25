<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModelHasRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('model_has_roles', function(Blueprint $table)
		{
			$table->foreign('role_id', 'model_has_roles_ibfk_1')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('model_has_roles', function(Blueprint $table)
		{
			$table->dropForeign('model_has_roles_ibfk_1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAppTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('app', function(Blueprint $table)
		{
			$table->foreign('CategoryId', 'CategoryFK')->references('Id')->on('category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CurrencyId', 'CurrencyFK')->references('Id')->on('currency')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('app', function(Blueprint $table)
		{
			$table->dropForeign('CategoryFK');
			$table->dropForeign('CurrencyFK');
		});
	}

}

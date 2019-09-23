<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAPPTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('APP', function(Blueprint $table)
		{
			$table->foreign('CategoryId', 'CategoryFK')->references('Id')->on('Category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CurrencyId', 'CurrencyFK')->references('Id')->on('Currency')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('FileId', 'FileFK')->references('Id')->on('File')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('APP', function(Blueprint $table)
		{
			$table->dropForeign('CategoryFK');
			$table->dropForeign('CurrencyFK');
			$table->dropForeign('FileFK');
		});
	}

}

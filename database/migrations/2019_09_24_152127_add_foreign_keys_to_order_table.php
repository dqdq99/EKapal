<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->foreign('AppId', 'appforeign')->references('Id')->on('app')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CustomerId', 'customerforeign')->references('Id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('TicketId', 'ticketforeign')->references('Id')->on('ticket')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->dropForeign('appforeign');
			$table->dropForeign('customerforeign');
			$table->dropForeign('ticketforeign');
		});
	}

}

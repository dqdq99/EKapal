<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->bigInteger('Id')->primary();
			$table->bigInteger('AppId')->index('appforeign');
			$table->dateTime('Date')->nullable();
			$table->integer('Quantity')->nullable();
			$table->bigInteger('TicketId')->index('ticketforeign');
			$table->bigInteger('CustomerId')->index('customerforeign');
			$table->dateTime('OrderDate')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}

}

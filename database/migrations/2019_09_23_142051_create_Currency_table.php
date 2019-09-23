<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Currency', function(Blueprint $table)
		{
			$table->bigInteger('Id')->primary('PK__Currency__3214EC076E2E6F6C');
			$table->string('Name');
			$table->string('Code');
			$table->integer('PriceIDR');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Currency');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('app', function(Blueprint $table)
		{
			$table->bigInteger('Id')->primary();
			$table->string('Name');
			$table->bigInteger('CategoryId')->index('CategoryFK');
			$table->dateTime('Date');
			$table->string('Heading');
			$table->text('Description')->nullable();
			$table->bigInteger('Capacity');
			$table->bigInteger('CurrencyId')->index('CurrencyFK');
			$table->decimal('Price', 19, 4);
			$table->bigInteger('UserId');
			$table->bigInteger('CreateBy')->nullable();
			$table->date('CreateDate')->nullable();
			$table->bigInteger('ModifiedBy')->nullable();
			$table->date('ModifiedDate')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('app');
	}

}

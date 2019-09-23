<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAPPTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('APP', function(Blueprint $table)
		{
			$table->bigInteger('Id')->primary('PK__Ship__3214EC071E05F635');
			$table->string('Name');
			$table->bigInteger('FileId');
			$table->bigInteger('CategoryId');
			$table->dateTime('Date');
			$table->string('Heading');
			$table->text('Description', 16)->nullable();
			$table->bigInteger('Capacity');
			$table->bigInteger('CurrencyId');
			$table->integer('Price');
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
		Schema::drop('APP');
	}

}

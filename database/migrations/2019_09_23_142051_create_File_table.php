<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('File', function(Blueprint $table)
		{
			$table->bigInteger('Id')->primary('PK__File__3214EC0763B786A4');
			$table->string('FileName');
			$table->string('Path');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('File');
	}

}

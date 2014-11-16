<?php

use Illuminate\Database\Schema\Blueprint;	
use Illuminate\Database\Migrations\Migration;

//Class for write data to upload table in database
class CreateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uploads', function($table){
			$table->increments('id');
			$table->string('videoname');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

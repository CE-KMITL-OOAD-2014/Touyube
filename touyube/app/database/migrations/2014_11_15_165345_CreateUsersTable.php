<?php

use Illuminate\Database\Schema\Blueprint;	
use Illuminate\Database\Migrations\Migration;

//Class for write data to user table in database
class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('email');
			$table->string('username');
			$table->string('password');
			$table->string('about');
			$table->string('contact');
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

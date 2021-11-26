<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingUsersTable extends Migration {

	public function up()
	{
		Schema::create('booking_users', function(Blueprint $table) {
			$table->increments('id');
			$table->BigInteger('user_id');
			$table->date('from_date');
			$table->double('price');
			$table->date('to_date');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('booking_users');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
			$table->increments('id');
			$table->BigInteger('room_number')->unique();
			$table->BigInteger('number_of_bed');
			$table->tinyInteger('is_busy')->defualt(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('rooms');
	}
}

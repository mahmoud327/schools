<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration {

	public function up()
	{
		Schema::create('schools', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('status');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('schools');
	}
}

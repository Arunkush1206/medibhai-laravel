<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrokersTable extends Migration {

	public function up()
	{
		Schema::create('brokers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->string('logo');
			$table->string('address');
			$table->string('gst');
			$table->string('pan');
			$table->string('contact_email');
			$table->string('contact_number');
			$table->string('contact_person_name');
		});
	}

	public function down()
	{
		Schema::drop('brokers');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignCorporatesTable extends Migration {

	public function up()
	{
		Schema::create('assign_corporates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('user_id')->index();
			$table->integer('corporate_id')->unsigned();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('assign_corporates');
	}
}
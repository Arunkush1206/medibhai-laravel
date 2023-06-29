<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserMappingTable extends Migration {

	public function up()
	{
		Schema::create('corporate_users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('user_id');
			$table->integer('corporate_id')->unsigned()->index()->unique();
			$table->string('role');
			$table->boolean('status')->default(1);
			$table->string('password');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('user_mapping');
	}
}

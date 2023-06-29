<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCorporatesTable extends Migration {

	public function up()
	{
		Schema::create('corporates', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('broker_id')->unsigned()->index();
			$table->string('corporate_name');
			$table->string('logo');
			$table->string('group_code');
			$table->string('freshdesk_id');
			$table->string('corporate_address');
			$table->string('corporate_city');
			$table->string('corporate_pincode');
			$table->string('corporate_state');
			$table->string('contact_person_name');
			$table->string('contact_number');
			$table->string('contact_email');
			$table->string('rm_cc');
			$table->string('industry_type');
			$table->string('activation_date');
			$table->string('end_date');
			$table->string('remarks');
			$table->string('is_retail');
			$table->boolean('status')->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('corporates');
	}
}
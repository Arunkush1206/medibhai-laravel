<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
//		Schema::table('corporates', function(Blueprint $table) {
//			$table->foreign('broker_id')->references('id')->on('user_mapping')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('assign_corporates', function(Blueprint $table) {
//			$table->foreign('corporate_id')->references('id')->on('corporates')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
	}

	public function down()
	{
//		Schema::table('corporates', function(Blueprint $table) {
//			$table->dropForeign('corporates_broker_id_foreign');
//		});
//		Schema::table('assign_corporates', function(Blueprint $table) {
//			$table->dropForeign('assign_corporates_corporate_id_foreign');
//		});
	}
}

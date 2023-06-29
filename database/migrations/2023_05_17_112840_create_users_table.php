<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
		    $table->unsignedInteger('broker_id')->after('id')->nullable()->index();
			$table->string('username')->after('name')->index();
			$table->string('first_name')->after('name');
			$table->string('last_name')->after('first_name');
			$table->string('mobile_no')->after('last_name')->nullable();
//			$table->enum('user_role', array('default','broker','corporate','admin'))->after('password');
			$table->string('designation')->nullable();
		});
	}

	public function down()
	{
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('email_id');
            $table->dropColumn('mobile_no');
            $table->dropColumn('user_role');
            $table->dropColumn('designation');
        });
	}
}

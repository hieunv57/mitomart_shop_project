<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('facebook');
			$table->string('phone');
			$table->string('address');
			$table->integer('role_id');
            $table->string('key_active');
            $table->string('status')->default('Chưa kích hoạt');
            $table->string('avatar');
            $table->string('gender');
            $table->rememberToken();
            $table->timestamps('updated_at');
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

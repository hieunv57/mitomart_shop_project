<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('username');
 			$table->string('email');
 			$table->string('address');
 			$table->string('facebook');
 			$table->string('phone');
 			$table->integer('total_price');
            $table->string('payments_type');
            $table->date('shipped_date');
            $table->date('required_date');
            $table->string('status')->default('Đặt Hàng');;
            $table->longtext('comment');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderdetails', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('product_price');//giá
            $table->integer('product_qty');//số lượng
            $table->string('product_name');//tên
            $table->string('product_producer');//xuất sứ
            $table->integer('product_discount');//giảm giá
            $table->string('product_material');//chất liệu
            $table->integer('product_width');//chieu rong
            $table->integer('product_length');//chieu dai
			$table->integer('guarantee');//bảo hành
            $table->string('product_color');//màu
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
		Schema::drop('orderdetails');
	}

}

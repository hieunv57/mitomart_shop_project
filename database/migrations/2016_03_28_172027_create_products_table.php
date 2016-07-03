<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('price');//giá
			$table->longText('description');//miêu tả
			$table->integer('discount');//giảm giá
			$table->integer('guarantee');//bảo hành
			$table->string('image');
			$table->integer('view');
            $table->string('producer');//nhà sản xuất
            $table->string('material');//chất liệu
            $table->string('color');//màu sắc
            $table->integer('quantity');//số lượng
            $table->integer('width');//chieu rong
            $table->integer('length');//chieu dai
            $table->smallInteger('availability');//trạng thái còn hàng hay ko
            $table->string('linkpreview');//link youtube sản phẩm
            $table->string('link')->unique();//link hien thi tren trinh duyet
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
		Schema::drop('products');
	}

}

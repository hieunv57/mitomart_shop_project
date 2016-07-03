<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();;
			$table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');;
			$table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->timestamps();;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_category');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sale_id')->unsigned();;
			$table->foreign('sale_id')->references('id')->on('sales');
			$table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
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
		Schema::drop('sales_products');
	}

}

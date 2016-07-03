<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model {

	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orderdetails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'order_id','product_id','product_price','product_qty','product_name', 'product_discount', 'guarantee','product_width', 'product_length','product_material','product_color','product_producer'];

}

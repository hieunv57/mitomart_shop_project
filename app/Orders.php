<?php namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id','username', 'facebook' ,'email','phone','address','status','total_price','required_date','payments_type','shipped_date','comment'];

    public function findOrder()
    {
        $orders=DB::table('orders')->select('orders.*')
            ->groupby('orders.id')
            ->orderby('orders.created_at', 'desc')->take(1000);
            return $orders;
    }
     public function view($id){
     $order = DB::table('orders')->select('orders.id as order_id','orderdetails.*')
      ->join('orderdetails','orderdetails.order_id','=','orders.id')
      ->join('products','products.id','=','orderdetails.product_id')
      ->where('orders.id',$id);
     return $order;
    }
}
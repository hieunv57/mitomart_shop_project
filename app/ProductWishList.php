<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
class ProductWishList extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'wishlist';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'product_id', 'user_id'];

	public function findAllWishList(){
    	$wishList= DB::table('wishlist')->select('products.*','category.link as category_link','category.name as category_name','wishlist.id as wishlist_id')
	    	->join('products','products.id','=','wishlist.product_id')
	    	->join('product_category','products.id','=','product_category.product_id')
	        ->join('category','product_category.category_id','=','category.id')
	        ->where('wishlist.user_id','=', Auth::user()->id)
	        ->groupBy('products.id');
        return $wishList;
    }

}

<?php namespace App\Helpers;
	use DB;
	use Auth;

	class Wishlist{
    	public static function sumTwoNumber($number1 = 0, $number1 = 0 )
    	{           
    		$sum = $number1 + $number2;           
    		return  $sum;    
    	}
    	public static function findWishList(){
	    	$wishList= DB::table('wishlist')->select('products.*','category.link as category_link','wishlist.id as wishlist_id')
		    	->join('products','products.id','=','wishlist.product_id')
		    	->join('product_category','products.id','=','product_category.product_id')
		        ->join('category','product_category.category_id','=','category.id')
		        ->where('wishlist.user_id','=', Auth::user()->id)
		        ->groupBy('products.id');
	        return $wishList;
    	}
    }
?>
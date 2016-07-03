<?php namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Products extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'price','link' ,'image', 'discount', 'description', 'guarantee', 'producer', 'material', 'quantity', 'availability', 'linkpreview', 'keyword'];

	public function cate()
    {
    	return $this->belongTo('App\Category');
    }

    public function pimages()
    {
    	return $this->hasMany('App\ImagesProducts');
    }

    public function orderdetail()
    {
        return $this->hasMany('App\OrderDetails');
    }

    public function findNew()
    {
        $products=DB::table('products')->select('products.*')
            ->groupby('products.id')
            ->orderby('products.created_at', 'desc')->take(9);
            return $products;
    }

  

    public function findCategory($id)
    {
       $products=DB::table('products')->select('products.*', 'category.link as category_link')
            ->join('product_category','products.id','=','product_category.product_id')
            ->join('category', 'product_category.category_id','=','category.id')
            ->where('product_category.category_id','=', $id)
            ->groupby('products.id');
            return $products;
    }

    public function findName($name){
        $product=DB::table('products')->select('products.*')
        ->where('products.link',$name)->first();
        return $product;
    }

    public function find_New($soluong)
    {
         $products=DB::table('products')->select('products.*')
            ->groupby('products.id')
            ->orderby('products.created_at', 'desc')->take($soluong);
            return $products;
    }


    public function findMostView($soluong)
    {
        $products=DB::table('products')->select('products.*')
            ->groupby('products.id')
            ->orderby('products.view', 'desc')->take($soluong);
            return $products;
    }

    public function findSale()
    {
        $products=DB::table('products')->select('products.*')
            ->groupby('products.id')
            ->where('products.discount','>','0');
            return $products;
    }
     public function findSaleNew($soluong)
    {
        $products=DB::table('products')->select('products.*')
            ->groupby('products.id')
            ->where('products.discount','>','0')->take($soluong);
            return $products;
    }
    public function findTotal()
    {
        $products_total=DB::table('products')->count();
            return $products_total;
    }

     public function searchString($string){
        $chuoi=stripUnicode($string);
        $products=DB::table('products')->select('products.*', 'category.link as category_name')
        ->join('product_category','products.id','=','product_category.product_id')
        ->join('category','product_category.category_id','=','category.id')
        ->groupBy('products.id')
        ->where('products.name','like','%'.$string.'%')->orWhere('products.link','like','%'.$chuoi.'%');
        return $products;
    }

    public function findProducts($link){
        $products=DB::table('products')->select('products.*', 'category.name as cate_name')
            ->join('product_category','products.id','=','product_category.product_id')
            ->join('category','product_category.category_id','=','category.id')
            ->groupBy('products.id')
            ->where('link',$link)->first();
        return $products;
    }
    public function findProductDetails($link)
    {
        $product_detail=DB::table('products')->select('products.*', 'category.link as category_link', 'category.name as category_name')
            ->join('product_category','products.id','=','product_category.product_id')
            ->join('category','product_category.category_id','=','category.id')
            ->groupBy('products.id')
            ->where('products.link','=', $link);
        return $product_detail;
    }

    public function findRelatedProducts($id)
    {
       $product=DB::table('products')->select('products.*', 'category.link as category_link', 'category.name as category_name')
            ->join('product_category','products.id','=','product_category.product_id')
            ->join('category', 'product_category.category_id','=','category.id')
            ->where('product_category.category_id','=', $id)
            ->groupby('products.id')
            ->orderby('products.created_at', 'desc')->take(3);
            return $product;
    }
    //tim san pham hot
    public function findHot($soluong){
        $products=DB::table('products')->select('products.*','category.link as category_link', 'category.name as category_name',DB::raw('SUM(orderdetails.product_qty) as total'))
        ->join('product_category','products.id','=','product_category.product_id')
        ->join('category', 'product_category.category_id','=','category.id')
        ->leftJoin('orderdetails','orderdetails.product_id','=','products.id')
        ->groupBy('products.id')
        ->orderBy('total','desc')->take($soluong);
        return $products;
    }

}

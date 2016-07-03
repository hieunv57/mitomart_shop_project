<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\News;
use App\Products;
use Session;
use App\Category;
use Auth;
use App\ProductWishList;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$product_new = new Products;
		$product_new = $product_new->find_New(6)->get();
		$product_most_view = new Products;
		$product_most_view = $product_most_view->findMostView(6)->get();
		$product_sale = new Products;
		$product_sale = $product_sale ->findSaleNew(6)->get();
		$product_hot = new Products;
		$product_hot = $product_hot->findHot(6)->get();
		$news = new News;
		$news = $news->findNew_new(6)->get();
		if(!Auth::guest())
		{
			$wishlists= new ProductWishList;
	        $wishlists=$wishlists->findAllWishList()->get();
	    }

		return view('fontend.pages.index', compact('product_new','product_most_view','total', 'news','product_sale', 'wishlist', 'product_hot'));
	}
	public function header()
	{
		if(!Auth::guest())
		{
			$wishlists= new ProductWishList;
	        $wishlists=$wishlists->findAllWishList()->get();
	        $total_w  = $wishlist -> count();
	    }
	    return view('fontend.include.header', compact('total_w'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function category($link)
	{
		$category = new Category;
        $category = $category->findCategoryName($link)->first();
		$products = new Products;
        $products = $products->findCategory($category->id)->paginate(2);
        $products->setPath($category->link);
        $links = str_replace('/?', '?', $products->render());
        $total = $products -> count();
		return view('fontend.pages.category', compact('products','category', 'total','links'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($link)
	{
		$product_detail = new Products;
		$product_detail = $product_detail->findProductDetails($link)->get();
		$q = DB::table('products')->where('link',$link)->first();
        $view = $product_detail->view+1;
        $query = DB::table('products')->where('link', $link)
      	->update(['view'=> $view]);
        $image = DB::table('images_products')->select('id', 'image')->where('products_id', $product_detail->id)->get();


        return view('fontend.pages.product', compact('product_detail', 'image','product_cate'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function tag(Request $request){
        $input=$request->all();
        Session::put('tag',$input['search']);
        return redirect('tim-kiem');
    }

    public function search(){
        $tag=Session('tag');
        $products= new Products;
        $products=$products->searchString($tag)->paginate(8);
        $products->setPath('tim-kiem');
        $total=$products -> count();
        // $hotProducts=new Products;
        // $hotProducts=$hotProducts->findHot();
        return view('fontend.pages.search',compact('products', 'total'));
    }

	public function map()
	{
		$product_new_3 = new Products;
		$product_new_3 = $product_new_3->find_New(3)->get();
		return view('fontend.pages.about', compact('product_new_3'));
	}

	public function facebook()
	{
		return view('fontend.pages.facebook');
	} 

}

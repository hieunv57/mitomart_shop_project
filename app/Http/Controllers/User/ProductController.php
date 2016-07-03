<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use Illuminate\Http\Request;
use App\Products;
class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		$product_detail = $product_detail->findProductDetails($link)->first();
		$q = DB::table('products')->where('link',$link)->first();
        $view = $q->view+1;
        $query = DB::table('products')->where('link', $link)
      	->update(['view'=> $view]);
      	$image = DB::table('images_products')->select('id', 'image')->where('products_id', $product_detail->id)->get();

      	 $category = new Category;
        $category = $category->findCategoryName($product_detail->category_link)->first();
      	$related = new Products;
        $related = $related->findRelatedProducts($category->id)->get();

       return view('fontend.pages.san-pham.show', compact('product_detail', 'image', 'related'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

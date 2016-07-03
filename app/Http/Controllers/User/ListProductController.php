<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class ListProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function sanphammoi()
	{
		$products_new = new Products;
		$products_new = $products_new->find_New(1000)->paginate(9);
		$products_new->setPath('san-pham-moi');
		$total = $products_new -> count();
		return view('fontend.pages.san-pham.san-pham-moi', compact('products_new','total'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function sanphamxemnhieu()
	{
		$product_mostview = new Products;
		$product_mostview = $product_mostview->findMostView(1000)->paginate(9);
		$product_mostview->setPath('san-pham-duoc-quan-tam');
		$total = $product_mostview -> count();
		return view('fontend.pages.san-pham.san-pham-duoc-quan-tam', compact('product_mostview', 'total'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function sanphamgiamgia()
	{
		$product_sale = new Products;
		$product_sale = $product_sale->findSale()->paginate(9);
		$product_sale->setPath('san-pham-dang-giam-gia');
		$total = $product_sale -> count();
		return view('fontend.pages.san-pham.san-pham-dang-giam-gia', compact('product_sale', 'total'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function sanphamhot()
	{
		$product_hot = new Products;
		$product_hot = $product_hot->findHot(1000)->paginate(9);
		$product_hot->setPath('san-pham-hot');
		$total = $product_hot -> count();
		return view('fontend.pages.san-pham.san-pham-hot', compact('product_hot','total'));
	}

	

}

<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Products;
use App\Orders;
use Auth;
use App\OrderDetails;
use Illuminate\Support\Facades\Redirect;

class ShoppingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function giohang()
	{
		$product_new_3 = new Products;
		$product_new_3 = $product_new_3->find_New(3)->get();
		$content = Cart::content();
		$total = Cart::total();
		return view('fontend.pages.gio-hang', compact('product_new_3', 'content', 'total'));
	}

	// /**
	//  * Show the form for creating a new resource.
	//  *
	//  * @return Response
	//  */
	// public function giohang()
	// {
	// 	$product_new_3 = new Products;
	// 	$product_new_3 = $product_new_3->find_New(3)->get();
	// 	$content = Cart::content();
	// 	$total = Cart::total();
	// 	return view('fontend.pages.thanh-toan', compact('content', 'total', 'product_new_3'));
	// }

	public function xoasanpham($id)
	{
		Cart::remove($id);
		return Redirect::back();
	}
	public function capnhat(Request $request)
	{
        if ($request->ajax()){
            $id=$request->id;
            $qty=$request->qty;
            Cart::update($id,$qty);
            $cart=Cart::get($id);
            return $cart->price*$cart->qty;
        }
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
	public function show($id)
	{
		//
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

	public function muahang($link)
	{
		$product_buy=DB::table('products')->select('products.*')
			->join('product_category','products.id','=','product_category.product_id')
			->join('category', 'product_category.category_id','=','category.id')
			->where('products.link',$link)->first();
		Cart::add(array('link'=>$link,
		 				'name' => $product_buy->name, 
		 				'qty' => 1,
		 				'id'=>$product_buy->id,
		 				'price'=>$product_buy->price*(100 - $product_buy->discount)/100,
		 				'options'=>array('discount'=>$product_buy->discount,'image'=>$product_buy->image,'link'=>$product_buy->link)));
		$content = Cart::content();
		return Redirect::back();
	}

	public function thanhtoan(Request $request)
	{
		$input=$request->all();
		$total_price = Cart::total();
		$content1= Cart::content();
		$order = new Orders;
		if(!Auth::guest()){
        	$order->user_id=Auth::user()->id;
        }else{
        	$order->user_id=1;
        }
        $order ->payments_type = $input['payments_type'];
        $order ->username = $input['username'];
        $order ->phone = $input['phone'];
        $order ->total_price = $total_price;
        $order ->facebook = $input['facebook'];
        $order ->address = $input['address'];
        $order ->email = $input['email'];
        $order -> save();

        foreach($content1 as $item)
        {
        	$product = new Products;
	        $orderdetails = new OrderDetails;
	        $product = $product->findName($item->options->link);
	        $orderdetails ->order_id =$order->id;
	        $orderdetails ->product_id=$product->id;
			$orderdetails ->product_price = $product->price; 
			$orderdetails ->product_qty = $item->qty;
			$orderdetails ->product_name = $product->name;
			$orderdetails ->product_color = $product->color;
			$orderdetails ->product_discount = $product->discount; 
			$orderdetails ->product_material = $product ->material; 
			$orderdetails ->product_width = $product ->width; 
			$orderdetails ->product_length = $product ->length;
			$orderdetails ->product_producer = $product ->producer; 
			$orderdetails ->guarantee = $product->guarantee;
			$orderdetails -> save();
		}
		Mail::send('emails.order', array('content'=>Cart::content(),'total'=>$order->total_price,'username'=>$input['username'], 'email'=>$input['email']), function($message) use ($input){
        $message->from('ngohieu94vn@gmail.com', 'Admin');
        $message->to($input['email'], $input['username'])->subject('Thông tin đơn hàng');
        });
		foreach ($content1 as $item) {
			Cart::remove($item->rowid);
		}
		return view('fontend.pages.cam-on');
	}

	public function capnhatgiohang()
	{
		// if(Request::ajax())
  //       {
  //           $id = Request::get('id');
  //           $qty = Request::get('qty');
  //           Cart::update($id,$qty);
  //           echo "oke";
  //       }   
	}

}

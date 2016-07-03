<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use App\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller {

	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$total=DB::table('orders')->count();
		$order = new Orders;
		$order = $order->findOrder()->paginate(10);
		$order->setPath('danh-sach');
		return view('backend.pages.order.list', compact('order','total'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('backend.pages.order.create');
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
		$order=Orders::find($id);
		$orderdetails=DB::table('orderdetails')->select('orderdetails.*')
			->join('orders','orders.id','=','orderdetails.order_id')
			->where('orders.id',$id)
			->get();
		return view('backend.pages.order.show', compact('orderdetails','order'));
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
	public function update(Request $request, $id)
	{
		$input=$request->all();
        $order= DB::table('orders')->where('id',$id)->first();
        if ($input['status']=="Hoàn Tất" && $order->status!="Hoàn Tất"){
            $orders = new Orders;
            $orders = $orders->view($id)->get();
            foreach($orders as $item){
                $product= DB::table('products')->where('id',$item->product_id)->first();             
                $qty= $product->quantity-$item->product_qty;
                $query= DB::table('products')->where('id',$product->id)->update(['quantity'=>$qty]);
                $query = DB::table('orders')->where('id',$id)->update(['status'=>$input['status']]);
            }
        } else {
            $query = DB::table('orders')->where('id',$id)->update(['status'=>$input['status']]);
        }
        return redirect('admin/don-hang/danh-sach');
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

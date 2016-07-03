<?php namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Products;
use App\ProductCategory;
use Illuminate\Http\Request;
use Input;
use File;
use Session;
use App\ImagesProducts;

class ProductsController extends Controller {
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
		$total=DB::table('products')->count();
		$parent = Category::select('id', 'name', 'parent_id')->get();
		$products=DB::table('products')->paginate(10);
        $products->setPath('danh-sach');
		return view('backend.pages.products.list', compact('products','parent', 'total'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parent = Category::select('id', 'name', 'parent_id')->get();
		return view('backend.pages.products.create', compact('parent'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input=$request->all();
		$fileimage = $request->file('fImages')->getClientOriginalName();
		$file_name=$this->stripUnicode($fileimage);
        $product = new Products;
        $product ->name = $input['name'];
        $product ->link = $this->stripUnicode($input['name']);
        $product ->price = $input['price'];
        $product ->discount = $input['discount'];
        $product ->description = $input['description'];
        $product ->material = $input['material'];
        $product ->quantity = $input['quantity'];
        $product ->linkpreview = $input['linkpreview'];
        $product ->image = $file_name;
        // $product ->cate_id = $request->sltParent;
        $request ->file('fImages')->move('public/home/images/products/',$file_name);
        $product ->save();
        $products_id = $product->id;
        if(Input::hasFile('fProductDetail'))
        {
            foreach(Input::file('fProductDetail') as $file){
                $product_img = new ImagesProducts();
                if(isset($file))
                {
                    $product_img->image = $file->getClientOriginalName();
                    $product_img->products_id = $products_id;
                    $file->move('public/home/images/products_detail/',$file->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        $category_products= new ProductCategory;
        $category_products->product_id= $product->id;
        $category_products->category_id= $input['category'];
        $category_products->save();
        $category_product= new ProductCategory;
        $category_parent=DB::table('category')->select('parent_id')->where('id','=',$category_products->category_id)->first();
        if ($category_parent->parent_id!=0){
            $category_product->product_id=$product->id;
            $category_product->category_id=$category_parent->parent_id;
            $category_product->save();
        }
        return redirect('admin/san-pham/them-moi')->with(['flash_level'=>'success','flash_message'=> 'Thêm mới thành công thành công!']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$parent = Category::select('id', 'name', 'parent_id')->get();
		$product=Products::find($id);
		return view('backend.pages.products.view', compact('product', 'parent'));
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
		
		$products=Products::find($id);
        $input= $request->all();

        $products ->name = $input['name'];
        $link=$this->strIpUnicode($input['name']);
        if (Input::file('fImages')){
	        $fileimage = $request->file('fImages')->getClientOriginalName();

			$products->image = $fileimage;
	        // $product ->cate_id = $request->sltParent;
	        $request ->file('fImages')->move('public/home/images/products/',$fileimage);
	    } else {
            $products->image=$products->image;
        }
        
        // if (Input::file('avatar')){
        //     $save_up= 'public/home/images/user/';
        //     $_avatar= rand(0, 50000).$file->getClientOriginalName();
        //     $avatar=$this->stripUnicode($_avatar);
        //     $users->avatar=$save_up.$avatar;
        //     Input::file('avatar')->move($save_up, $avatar);
        // } else {
        //     $users->avatar=$users->avatar;
        // }
        $products->price=$input['price'];
        $products->producer=$input['producer'];
        $products->quantity=$input['quantity'];
        $products->discount=$input['discount'];
        $products->description=$input['description'];
        $products->material=$input['material'];
        // $products->material=$input['material'];
        // $user->birthday=$input['birthday'];
        $data= array(
        	'link' => $products->link,
            'name'  => $products->name,
            'avatar'    => $products->avatar,
            'producer'=> $products->producer,
            'quantity'    => $products->quantity,
            'discount' => $products->discount,
            'description' => $products->description,
            'material' => $products->material,
            // 'role_id' =>$user->role_id,
        );
        
        $products->update($data);

        
        $product=Products::find($id);
        $parent = Category::select('id', 'name', 'parent_id')->get();
        return view('backend.pages.products.view',compact('product','parent'))->with(['flash_level'=>'success','flash_message'=> 'Cập nhật thành công!']);;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product_detail = Products::find($id)->pimages;
        foreach($product_detail as $value)
        {
            File::delete('public/home/images/products_detail/'.$value['image']);
        }
        $product = Products::find($id);
        File::delete('public/home/images/products/'.$product->image); 
        $product->delete($id);
        return redirect('admin/san-pham/danh-sach')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công!']);
	}

	// public function getDelImg($id)
 //    {
 //        if(Request::ajax())
 //        {
 //            $idHinh = (int)Request::get('idHinh');
 //            $image_detail = ProductImage::find($idHinh);
 //            if(!empty($image_detail))
 //            {
 //                $img = 'resources/upload/detail/'.$image_detail->image;
 //                if (File::exists($img))
 //                {
 //                    File::delete($img);
 //                }
 //                $image_detail->delete();
 //            }
 //            return "Oke";
 //        }
 //    }
	public function getList(Request $request){
        $input=$request->all();
        Session::put('category_id',$input['category']);
        if (session('category_id')!=0){
            return redirect('admin/san-pham/theo-danh-muc');
        } else {
            return redirect('admin/san-pham/danh-sach');
        }
    }

    public function showList(){
        $products=new Products;
        $total=DB::table('products')->count();
        $category_id=session('category_id');
        $products=$products->findCategory($category_id)->paginate(5);
        $parent = Category::select('id', 'name', 'parent_id')->get();
        $products->setPath('danh-sach');
        return view('backend.pages.products.list',compact('products','parent','total'));
    }
    public function search(Request $request){
        $input=$request->all();
        Session::put('searchProducts',$input['search']);
        return redirect('admin/san-pham/ket-qua-tim-kiem');
    }

    public function searchResult(){
    	$searchProducts=Session('searchProducts');
        $products=new Products;
        $total=DB::table('products')->count();
		$parent = Category::select('id', 'name', 'parent_id')->get();
        $products=$products->searchString(session('searchProducts'))->paginate(5);
        $products->setPath('ket-qua-tim-kiem');
        return view('backend.pages.products.search',compact('products','parent','total'));
    }

}

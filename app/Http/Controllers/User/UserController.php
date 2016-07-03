<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Input;
use Illuminate\Support\Facades\Redirect;
use App\Products;
use Illuminate\Http\Request;
use Validator;
use Session;
use Mail;
use Hash;
use DB;
use App\ProductWishList;

class UserController extends Controller {

	public function __construct(){
		$this->middleware('auth');
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
	public function show()
	{
		$id=Auth::user()->id;
		$user=User::find($id);
		return view('fontend.pages.nguoi-dung.profile', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$id=Auth::user()->id;
		$user=User::find($id);
		return view('fontend.pages.nguoi-dung.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$input=$request->all();
		$id=Auth::user()->id;
        $users=User::find($id);
        $users ->name = $input['name'];
        $users->facebook=$input['facebook'];
        $users->address=$input['address'];
        $users->phone=$input['phone'];

        $file= Input::file('avatar');
        if (Input::file('avatar')){
            $save_up= 'public/home/images/user/';
            $_avatar= rand(0, 50000).$file->getClientOriginalName();
            $avatar=$this->stripUnicode($_avatar);
            $users->avatar=$save_up.$avatar;
            Input::file('avatar')->move($save_up, $avatar);
        } else {
            $users->avatar=$users->avatar;
        }
        $data= array(
            'name'  => $users->name,
            'avatar'    => $users->avatar,
            'facebook'    => $users->facebook,
            'address'=> $users->address,
            'phone'    => $users->phone,
            // 'role_id' =>$user->role_id,
        );
          
        $users->update($data);
       	return redirect('thong-tin-ca-nhan');
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

 	/**
    *
    * @return Respone
    */
    public function editPassword(){
        if (Session('doi-mat-khau')){
            Session::forget('doi-mat-khau');
        }
        $id=Auth::user()->id;
        $user=User::find($id);
        return view('fontend.pages.nguoi-dung.changePassword');
    } 

    public function changePassword(Request $request){
        $postData= Input::all();
        $id=Auth::user()->id;
        $user=User::find($id);
        $rule=[
        'oldPassword'=>'required',
        'password' => 'required|min:6|confirmed',
        ];
        $message=[
        'oldPassword.required' => 'Bạn phải nhập mật khẩu cũ',
        'password.required' => 'Bạn phải nhập mật khẩu mới',
        'password.min' => 'Mật khẩu phải có ít nhật 6 ký tự',
        'password.confirmed' => 'Bạn nhập lại mật khẩu không khớp'
        ];
        $validator= Validator::make($postData, $rule,$message);
        if($validator->fails()){
            return redirect('doi-mat-khau')->withInput()->withErrors($validator);
        }else{
            if (!Hash::check($postData["oldPassword"], Auth::user()->password)) {
            	return redirect('/doi-mat-khau')->withErrors("Mật khẩu cũ không đúng! ")
               ->withInput();
           	}
           	$user->password=bcrypt($postData['password']);
           	$user->save();
           	Session::put('doi-mat-khau','Đổi mật khẩu thành công');
       		return view('fontend.pages.nguoi-dung.changePassword');
       }
   }

   public function addWishList($id){
        $wishList = new ProductWishList;
        $wishList->user_id=Auth::user()->id;
        $wishList->product_id=$id;
        $temp=DB::table('wishlist')->where('user_id','=',Auth::user()->id)->where('product_id',$id)->first();
        if (!$temp){
            $wishList->save();
        }
        return Redirect::back();
    }

    public function wishList(){
        $wishlists= new ProductWishList;
        $wishlists=$wishlists->findAllWishList()->paginate(9);
        $wishlists->setPath('san-pham-yeu-thich');
        $random=Products::orderByRaw("RAND()")->take(3)->get();
        return view('fontend.pages.san-pham.wishlist', compact('random', 'wishlists'));
    }
}

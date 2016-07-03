<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	Route::get('/','User\HomeController@index');
	Route::get('dia-chi','User\HomeController@map');
	
	

	//Route danh sach san pham
	Route::get('san-pham/{link}', 'User\ProductController@show');
	Route::get('danh-muc/{link}', 'User\HomeController@category');
	Route::get('danh-sach/san-pham-moi', 'User\ListProductController@sanphammoi');
	Route::get('danh-sach/san-pham-duoc-quan-tam', 'User\ListProductController@sanphamxemnhieu');
	Route::get('danh-sach/san-pham-dang-giam-gia', 'User\ListProductController@sanphamgiamgia');
	Route::get('danh-sach/san-pham-hot', 'User\ListProductController@sanphamhot');

	//Route tim kiem san pham
	Route::post('tag','User\HomeController@tag');
	Route::get('tim-kiem','User\HomeController@search');

	//Route tin tuc
	Route::get('tin-tuc', 'User\NewsController@index');
	Route::get('tin-tuc/{link}', 'User\NewsController@show');

	// Registration routes...
	Route::get('dang-ky', 'Auth\AuthController@getRegister');
	Route::post('dang-ky', 'Auth\AuthController@postRegister');
	Route::get('dang-nhap-tai-khoan', 'Auth\AuthController@Login');
	Route::post('dang-nhap', 'Auth\AuthController@postLogin');
	Route::get('dang-xuat', 'Auth\AuthController@getLogout');

	//route Login with facebook
	Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
	Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

	//Mua san pham

	Route::get('mua-san-pham/{link}',['as'=>'muahang','uses'=>'User\ShoppingController@muahang']);
	Route::get('gio-hang', 'User\ShoppingController@giohang');
	Route::get('thanh-toan', 'User\ShoppingController@thanhtoan');
	Route::post('cam-on', 'User\ShoppingController@thanhtoan');
	Route::get('xoa-san-pham/{id}',['as'=>'xoasanpham','uses'=>'User\ShoppingController@xoasanpham']);
	Route::get('cap-nhat-gio-hang/{id}/{qty}',['as'=>'capnhatgiohang','uses'=>'User\ShoppingController@capnhatgiohang'] );

	// Authentication routes...




	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');

	Route::group(array('before' => 'admin', 'middleware'=> 'auth'),function(){

		Route::get('admin', 'Admin\HomeController@index');
	// Route Quản lý thành viên
		Route::get('admin/thanh-vien/danh-sach', 'Admin\UserController@index');
		Route::get('admin/thanh-vien/xoa/{id}/', 'Admin\UserController@destroy');
		Route::get('admin/thanh-vien/them-moi', 'Admin\UserController@create');
		Route::post('admin/thanh-vien/them-moi', 'Admin\UserController@store');
		Route::get('admin/thanh-vien/xem/{id}', 'Admin\UserController@show');
		Route::patch('admin/thanh-vien/cap-nhat/{id}', 'Admin\UserController@update');
		Route::post('admin/thanh-vien/tim-kiem','Admin\UserController@search');
		Route::get('admin/thanh-vien/ket-qua-tim-kiem','Admin\UserController@searchResult');
		//cate
		Route::get('admin/danh-muc/danh-sach', 'Admin\CategoryController@index');
		Route::get('admin/danh-muc/danh-sach-2', 'Admin\CategoryController@index2');
		Route::get('admin/danh-muc/them-moi', 'Admin\CategoryController@create');
		Route::post('admin/danh-muc/them-moi', 'Admin\CategoryController@store');
		Route::get('admin/danh-muc/xoa/{id}', 'Admin\CategoryController@destroy');
		Route::get('admin/danh-muc/cap-nhat/{id}', 'Admin\CategoryController@edit');
		Route::patch('admin/danh-muc/cap-nhat/{id}', 'Admin\CategoryController@update');
		//products
		Route::group(array('before' => 'admin', 'middleware'=> 'auth'),function(){
			Route::get('admin/san-pham/danh-sach', 'Admin\ProductsController@index');
			Route::get('admin/san-pham/them-moi', 'Admin\ProductsController@create');
			Route::post('admin/san-pham/them-moi', 'Admin\ProductsController@store');
			Route::get('admin/san-pham/xem/{id}', 'Admin\ProductsController@show');
			Route::get('admin/san-pham/xoa/{id}', 'Admin\ProductsController@destroy');
			Route::patch('admin/san-pham/cap-nhat/{id}', 'Admin\ProductsController@update');
			Route::post('admin/danh-muc/san-pham', 'Admin\ProductsController@getList');
			Route::get('admin/san-pham/theo-danh-muc', 'Admin\ProductsController@showList');
			Route::post('admin/san-pham/tim-kiem','Admin\ProductsController@search');
			Route::get('admin/san-pham/ket-qua-tim-kiem','Admin\ProductsController@searchResult');
		});

		//Order
		Route::get('admin/don-hang/danh-sach', 'Admin\OrderController@index');
		Route::get('admin/don-hang/xem/{id}', 'Admin\OrderController@show');
		Route::get('admin/don-hang/them-moi', 'Admin\OrderController@create');
		Route::post('admin/don-hang/them-moi', 'Admin\OrderController@store');
		Route::patch('admin/don-hang/cap-nhat/{id}', 'Admin\OrderController@update');
		//news
		Route::get('admin/tin-tuc/danh-sach', 'Admin\NewsController@index');
		Route::get('admin/tin-tuc/them-moi', 'Admin\NewsController@create');
		Route::post('admin/tin-tuc/them-moi', 'Admin\NewsController@store');
	});
	Route::group(array('middleware'=> 'auth'),function(){
		//route thong tin ca nhan
		Route::get('thong-tin-ca-nhan','User\UserController@show');
		Route::get('cap-nhat-thong-tin','User\UserController@edit');
		Route::patch('cap-nhat-thong-tin','User\UserController@update');
		Route::get('doi-mat-khau','User\UserController@editPassword');
		Route::patch('doi-mat-khau','User\UserController@changePassword');
		// Route::get('thong-tin-ca-nhan/kich-hoat','User\UsersController@sendMail');
		// Route::get('yeu-thich/{id}','User\ProductController@addWishList');
		// Route::get('yeu-thich','User\ProductController@wishList');
		// Route::get('xoa-yeu-thich/{id}','User\ProductController@delWishList');
		Route::get('yeu-thich/{id}','User\UserController@addWishList');
		Route::get('san-pham-yeu-thich', 'User\UserController@wishList');
	});
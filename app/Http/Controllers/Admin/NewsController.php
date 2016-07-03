<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\News;
use Input;
use Illuminate\Http\Request;

class NewsController extends Controller {
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

		$news=DB::table('news')->paginate(10);
        $news->setPath('danh-sach');
        return view('backend.pages.tin-tuc.list', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('backend.pages.tin-tuc.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input=$request->all();
        $news= new News;
        $news ->name = $input['name'];
        $news ->link = $this->stripUnicode($input['name']);
        $news ->description = $input['description'];
        $news ->content = $input['content'];
       if (Input::file('imageTitle')){
            $file= Input::file('imageTitle');
           	$save_up= 'public/fontend/news/';
            $_avatar= $this->stripUnicode($input['name']).'.jpg';
            $news->imageTitle=$save_up.$_avatar;
            Input::file('imageTitle')->move($save_up, $_avatar);
        }else {
            $news->imageTitle='public/images/imagetitle.png';
        }
        $news -> save();
        return redirect('admin/tin-tuc/danh-sach');
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

}

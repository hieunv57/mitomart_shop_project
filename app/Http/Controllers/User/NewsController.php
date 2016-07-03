<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$most_new_1 = new News;
		$most_new_1 = $most_new_1->findNew_new(1)->get();
		$new_5 = new News;
		$new_5 = $new_5->findNew_new(5)->paginate(5);
		$new_3 = new News;
		$new_3 = $new_3->findNew_new(3)->get();
		$new_5->setPath('tin-tuc');
		return view('fontend.pages.tin-tuc.index', compact('new_5', 'most_new_1','new_3'));
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
	public function store($id)
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
		$newss = new News;
        $new = DB::table('news')->where('link',$link)->first();
        return view('fontend.pages.tin-tuc.trang-tin',compact('new','newss'));
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

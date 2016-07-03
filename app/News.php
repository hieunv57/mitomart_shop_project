<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class News extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'imageTitle', 'description', 'content', 'link', 'view', 'category'];

	public function findNew_new($soluong)
    {
         $news=DB::table('news')->select('news.*')
            ->groupby('news.id')
            ->orderby('news.created_at', 'desc')->take($soluong);
            return $news;
    }
}

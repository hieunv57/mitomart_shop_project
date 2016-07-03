<?php namespace App;


use DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class Category extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'category';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'link', 'description', 'parent_id', 'level'];

	public function findCategoryName($link){
        $cate = DB::table('category')->where('link','=',$link);
        return $cate;
    }
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}

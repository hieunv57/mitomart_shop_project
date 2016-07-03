<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesProducts extends Model {

	//
    protected $table='images_products';
    protected $fillable=['image', 'products_id'];

    public $timestamps = false;

    public function product()
    {
    	return $this->belongTo('App\Products');
    }

}

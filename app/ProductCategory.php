<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'category_id','product_id'];
    
    public function findParent($cate_id,$pro_id){
        
        $category= DB::table('category')->where('id','=',$cate_id)->first();
        $parent_id=$category->parent_id;

        if ($parent_id!=0){
            $category_product=DB::table('product_category')->where('product_id','=',$pro_id)
            ->where('category_id','=',$parent_id)->first();
            return $category_product;
        }
        return null;
    }

}

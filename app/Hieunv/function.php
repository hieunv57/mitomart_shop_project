<?php
	function cate_parent($data,$parent = 0,$str="--",$select=0)
	{
		foreach($data as $val)
		{
			$id = $val['id'];
			$name = $val['name'];
			if($val['parent_id'] == $parent)
			{
				if($select !=0 && $id == $select)
				{
					echo "<option value = '$id' selected='selected'>$str $name</option>";
				}
				else
				{
					echo "<option value = '$id'>$str $name</option>";
				}
				cate_parent($data,$id,$str."--",$select);
			}
		}
	}

    function category($data,$parent = 0,$str="--",$select=0)
    {
        foreach($data as $val)
        {
            $id = $val['id'];
            $name = $val['name'];
            if($val['parent_id'] == $parent)
            {
                if($select !=0 && $id == $select)
                {
                    echo "<option value = '$id' selected='selected'>$str $name</option>";
                }
                else
                {
                    echo "<option value = '$id'>$str $name</option>";
                }
                cate_parent($data,$id,$str."--",$select);
            }
        }
    }

	function stripUnicode($str){ 
        if(!$str) 
            return false; 
        $unicode = array( 
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
            'd'=>'đ|Đ', 
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị', 
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
            '-'=>' ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
            'D'=>'Đ', 
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị', 
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        ); 
        foreach($unicode as $nonUnicode=>$uni)
            $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str; 
    }

    function findAllWishList(){
        $wishList= DB::table('wishlist')->select('products.*','category.link as category_link','wishlist.id as wishlist_id')
            ->join('products','products.id','=','wishlist.product_id')
            ->join('product_category','products.id','=','product_category.product_id')
            ->join('category','product_category.category_id','=','category.id')
            ->where('wishlist.user_id','=', Auth::user()->id)
            ->groupBy('products.id');
        return $wishList;
    }
?>
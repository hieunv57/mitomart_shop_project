<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
@extends('fontend.include.head')
@section('title')
    Danh sách các sản phẩm yêu thích của bạn
@stop
	<body>
		<!--wide layout-->
		<div class="wide_layout relative">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			@include('fontend.include.header')
			<!--breadcrumbs-->
			<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="{{asset('/')}}" class="default_t_color">Trang chủ<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="#" class="default_t_color">Danh sách sản phẩm yêu thích</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
							<h2 class="tt_uppercase color_dark m_bottom_20">Các sản phẩm yêu thích</h2>
							<hr class="m_bottom_30 divider_type_3">
							<!--wishlist table-->
							<table class="table_type_1 responsive_table full_width t_align_l r_corners wraper shadow bg_light_color_1 m_bottom_30">
								<thead>
									<tr class="f_size_large">
										<!--titles for td-->
										<th>Ảnh</th>
										<th>Tên sản phẩm &amp; Category</th>
										<th>Giá</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
								@foreach($wishlists as $item)
									<tr>
										<!--product image-->
										<td data-title="Product Image"><img src="{{ asset('public/home/images/products/'.$item->image) }}" alt=""></td>
										<!--product name and category-->
										<td data-title="Product Name">
											<a href="{{url('san-pham/'.$item->link)}}" class="fw_medium d_inline_b f_size_ex_large color_dark m_bottom_5">{{$item->name}}</a><br>
											<a href="#" class="default_t_color">{{$item->category_name}}</a>
										</td>
										<!--product price-->
										<td data-title="Price">
											@if($item->discount > 0)
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->price) - (($item->discount)/100) * ($item->price))}} đồng</p></h5>
                                                @else
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15">{{number_format($item->price)}} đồng</p></h5>
                                                @endif
										</td>
										<!--quanity-->
										<!--add or remove buttons-->
										<td data-title="Action">
											<a href="{!! url('mua-san-pham', [$item->link]) !!}"> <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Thêm vảo giỏ</button></a>
											<a href="#" class="color_dark">Xóa khỏi yêu thích</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<hr class="m_bottom_10 divider_type_3">
                            <div class="row clearfix m_bottom_15 m_xs_bottom_30">
                                <ul class="pagination">
                                       {!! $wishlists -> render() !!}
                                        
                                    </ul>
                            </div>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Danh mục sản phẩm</h3>
                                </figcaption>
                                <div class="widget_content">
                                    <!--Categories list-->
                                    <ul class="categories_list">
                                    
                                        <?php
                                            $cate_cha=DB::table('category')->where('level','=','1')->get();
                                        ?>
                                        @foreach ($cate_cha as $cate)
                                        <li>
                                            <a href="{{asset('danh-muc/'.$cate->link)}}" class="f_size_large color_dark d_block relative">
                                                <b>{{$cate->name}}</b>
                                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                            <!--second level-->
                                            <ul class="d_none">
                                                <?php
                                                    $cate_con=DB::table('category')->where('parent_id',$cate->id)->get();
                                                ?>
                                                @foreach ($cate_con as $cate_c)
                                                <li>
                                                    <a href="{{asset('danh-muc/'.$cate_c->link)}}" class="d_block f_size_large color_dark relative">
                                                        {{$cate_c->name}}
                                                    </a>
                                                    <!--third level-->
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </figure>
							<!--banner-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Có thể bạn muốn xem</h3>
								</figcaption>
								<div class="widget_content">
								@foreach($random as $item)
									<div class="clearfix m_bottom_15">
										<img src="{{ asset('public/home/images/products/'.$item->image) }}" style="height:80px; width:80px" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">{{$item->name}}</a>
										<!--rating-->
										<ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li>
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
										</ul>
										<p class="scheme_color">{{$item->price}}</p>
									</div>
								@endforeach
								</div>
							</figure>
						</aside>
					</div>
				</div>
			</div>
			<!--markup footer-->
			@include('fontend.include.footer')
		</div>
		<!--social widgets-->
		@include('fontend.include.widget')
		<!--login popup-->
		@include('fontend.include.login')
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="{{asset('public/home/js/jquery-2.1.0.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('public/home/js/retina.js')}}"></script>
		<script src="{{asset('public/home/js/waypoints.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery.tweet.min.js')}}"></script>
		<script src="{{asset('public/home/js/scripts.js')}}"></script>
		<script src="http://uhchat.net/code.php?f=f14fac"></script>
	</body>
</html>
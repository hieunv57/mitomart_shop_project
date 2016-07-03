<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]--> 
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
@extends('fontend.include.head')
@section('title')
    Mito Mart - Danh sách tin tức
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
						<li class="m_right_10 current"><a href="#" class="default_t_color">Trang chủ<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="#" class="default_t_color">Tin bài</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="tt_uppercase color_dark m_bottom_25">Tin bài</h2>
							<!--blog post-->
							@foreach($most_new_1 as $item)
							<article class="m_bottom_25">
								<a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_25">
									<img src="{{asset($item->imageTitle)}}" class="tr_all_long_hover" alt="">
								</a>
								<div class="row clearfix m_bottom_10">
									<div class="col-lg-9 col-md-9 col-sm-9">
										<h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">{{$item->name}}</a></h4>
										<p class="f_size_medium">{{$item->created_at}}<a href="#" class="color_dark">{{$item->view}} lượt xem</a>, on <a href="#" class="color_dark">Fashion</a></p>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 t_align_r t_sm_align_l">
										<p class="f_size_medium d_sm_inline_middle">Rate this item</p>
										<!--rating-->
										<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
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
										<a href="#" class="d_inline_middle f_size_medium default_t_color m_left_5">(1 Vote)</a>
									</div>
								</div>
								<!--post content-->
								<p class="m_bottom_10">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
								<a href="#" class="tt_uppercase f_size_large">Read More</a>
							</article>
							@endforeach
							@foreach($new_5 as $item)
							<hr class="divider_type_3 m_bottom_30">
							<article class="m_bottom_20 clearfix">
								<a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
									<img src="images/blog_img_5.jpg" class="tr_all_long_hover" alt="">
								</a>
								<div class="mini_post_content">
									<h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">{{$item->name}}</a></h4>
									<p class="f_size_medium m_bottom_10">,{{$item->created_at}}, <a href="#" class="color_dark">{{$item->view}} lượt xem</a>, on <a href="#" class="color_dark">New Arrivals</a></p>
									<hr>
									<div class="rating_min_article">
										<p class="f_size_medium d_inline_middle d_sm_block d_xs_inline_middle">Rate this item</p>
										<!--rating-->
										<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover m_left_5 m_sm_left_0">
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
										<a href="#" class="d_inline_middle f_size_medium default_t_color m_left_5">(3 Votes)</a>
									</div>
									<hr class="m_bottom_15">
									<p class="m_bottom_10">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. </p>
									<a href="#" class="tt_uppercase f_size_large">Read More</a>
								</div>
							</article>
							@endforeach
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Danh mục tin bài</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<li class="active">
											<a href="#" class="f_size_large color_dark d_block">
												<b>Fashion</b>
											</a>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block">
												<b>Trends</b>
											</a>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block">
												<b>New Arrivals</b>
											</a>
										</li>
									</ul>
								</div>
							</figure>
							<!--banner-->
							<a href="#" class="d_block d_xs_inline_b r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>
							<!--Popular articles-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Tin mới nhất</h3>
								</figcaption>
								<div class="widget_content">
									@foreach ($new_3 as $item)
									<article class="clearfix m_bottom_15">
										<img src="{{asset($item->imageTitle)}}" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link p_vr_0">{{$item->name}}</a>
										<p class="f_size_medium">{{$item->view}}</p>
									</article>
									<hr class="m_bottom_15">
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
		<script src="{{asset('public/home/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('public/home/js/waypoints.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery.tweet.min.js')}}"></script>
		<script src="{{asset('public/home/js/styleswitcher.js')}}"></script>
		<script src="{{asset('public/home/js/scripts.js')}}"></script>
	</body>
</html>
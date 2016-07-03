<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
	 @extends('fontend.include.head')
    @section('title')
        {{$new->name}}
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
						<li class="m_right_10 current"><a href="#" class="default_t_color">Tin tức<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
							<!--blog post-->
							<article class="m_bottom_15">
								<div class="row clearfix m_bottom_15">
									<div class="col-lg-9 col-md-9 col-sm-8">
										<h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10">{{$new->name}}</h2>
										<p class="f_size_medium">{{$new->created_at}} <a href="#" class="color_dark">{{$new->view}} lượt xem</a></p>
									</div>
									
								</div>
								<a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_15">
									<img src="images/blog_img_4.jpg" class="tr_all_long_hover" alt="">
								</a>
								<!--post content-->
								<p class="m_bottom_15"><?php echo $new->content; ?></p>
								
							</article>
							<div class="m_bottom_30">
								<p class="d_inline_middle">Share this:</p>
								<div class="d_inline_middle m_left_5 addthis_widget_container">
									<!-- AddThis Button BEGIN -->
									<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
									<a class="addthis_button_preferred_1"></a>
									<a class="addthis_button_preferred_2"></a>
									<a class="addthis_button_preferred_3"></a>
									<a class="addthis_button_preferred_4"></a>
									<a class="addthis_button_compact"></a>
									<a class="addthis_counter addthis_bubble_style"></a>
									</div>
									<!-- AddThis Button END -->
								</div>
							</div>
							<hr class="divider_type_3 m_bottom_10">
								<p class="m_bottom_10">More in this category: <a href="#" class="color_dark">Phasellus ullamcorper blandit leo, id pharetra leo » </a></p>
							<hr class="divider_type_3 m_bottom_45">
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Danh mục tin tức</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<li class="active">
											<a href="#" class="f_size_large color_dark d_block">
												<b>Giới thiệu</b>
											</a>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block">
												<b>Tin tức</b>
											</a>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block">
												<b>Hướng dẫn</b>
											</a>
										</li>
									</ul>
								</div>
							</figure>
							<!--banner-->
							<a href="#" class="d_block r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>
							<!--Popular articles-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Popular Articles</h3>
								</figcaption>
								<div class="widget_content">
									<article class="clearfix m_bottom_15">
										<img src="images/article_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
										<p class="f_size_medium">50 comments</p>
									</article>
									<hr class="m_bottom_15">
									<article class="clearfix m_bottom_15">
										<img src="images/article_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
										<p class="f_size_medium">34 comments</p>
									</article>
									<hr class="m_bottom_15">
									<article class="clearfix m_bottom_5">
										<img src="images/article_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
										<p class="f_size_medium">21 comments</p>
									</article>
								</div>
							</figure>
							<!--Bestsellers-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Bestsellers</h3>
								</figcaption>
								<div class="widget_content">
									<div class="clearfix m_bottom_15">
										<img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
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
										<p class="scheme_color">$61.00</p>
									</div>
									<hr class="m_bottom_15">
									<div class="clearfix m_bottom_15">
										<img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Elementum vel</a>
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
										<p class="scheme_color">$57.00</p>
									</div>
									<hr class="m_bottom_15">
									<div class="clearfix m_bottom_5">
										<img src="images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
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
										<p class="scheme_color">$24.00</p>
									</div>
								</div>
							</figure>
							<!--Latest articles-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Latest Articles</h3>
								</figcaption>
								<div class="widget_content">
									<article class="clearfix m_bottom_15">
										<img src="images/article_img_4.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link p_vr_0">Aliquam erat volutpat.</a>
										<p class="f_size_medium">25 January, 2013</p>
									</article>
									<hr class="m_bottom_15">
									<article class="clearfix m_bottom_15">
										<img src="images/article_img_5.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block p_vr_0 bt_link">Integer rutrum ante </a>
										<p class="f_size_medium">21 January, 2013</p>
									</article>
									<hr class="m_bottom_15">
									<article class="clearfix m_bottom_5">
										<img src="images/article_img_6.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block p_vr_0 bt_link">Vestibulum libero nisl, porta vel</a>
										<p class="f_size_medium">18 January, 2013</p>
									</article>
								</div>
							</figure>
							<!--tags-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Tags</h3>
								</figcaption>
								<div class="widget_content">
									<div class="tags_list">
										<a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
										<a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
										<a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
										<a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">short,</a>
										<a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">top,</a>
										<a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
									</div>
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
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
		<script src="{{asset('public/home/js/waypoints.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery.tweet.min.js')}}"></script>
		<script src="{{asset('public/home/js/scripts.js')}}"></script>
	</body>
</html>
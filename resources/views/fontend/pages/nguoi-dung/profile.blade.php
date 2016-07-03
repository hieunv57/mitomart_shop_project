<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
	@extends('fontend.include.head')
	@section('title')
    	Thông tin cá nhân
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
						<li class="m_right_10"><a href="#" class="default_t_color">Thông tin cá nhân</a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="clearfix m_bottom_10 t_xs_align_c">
						<div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
							<div >
								<img  src="{{asset($user->avatar)}}" style="height:200px; width:200px ">
								<!-- <input type="file" name="" value="Thay đổi ảnh đại diện"> -->
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap">
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
						</div>
						<div class="p_top_10 t_xs_align_l">
							<!--description-->
							<h2 class="color_dark fw_medium m_bottom_10">{{$user->name}}</h2>
							<div class="m_bottom_10">
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Địa chỉ email:</td>
									<td><span class="color_green">{{$user->email}}</span></td>
								</tr>
								<tr>
									<td>Địa chỉ:</td>
									<td><span class="color_green">{{$user->address}}</span></td>
								</tr>
								<tr>
									<td>Số điện thoại:</td>
									<td><span class="color_green">{{$user->phone}}</span></td>
								</tr>
								<tr>
									<td>Địa chỉ facebook:</td>
									<td><span class="color_green">{{$user->facebook}}</span></td>
								</tr>
							</table>
							<a href="{{asset('cap-nhat-thong-tin')}}"><button type="submit "class="tr_delay_hover r_corners button_type_14 bg_color_green color_light">Cập nhật thông tin</button></a>
							<a href="{{asset('lich-su-mua-hang')}}"><button type="submit "class="tr_delay_hover r_corners button_type_14 bg_color_green color_light">Lịch sử mua hàng</button></a>
						</div>
					</div>
					<!--tabs-->
					
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
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/elevatezoom.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/jquery.fancybox-1.3.4.js"></script>
		<script src="js/scripts.js"></script>
		<script src="http://uhchat.net/code.php?f=f14fac"></script>
	</body>
</html>
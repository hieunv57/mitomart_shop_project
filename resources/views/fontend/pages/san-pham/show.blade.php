<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
	@extends('fontend.include.head')
	@section('title')
    	{{$product_detail->name}}
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
						<li class="m_right_10"><a href="#" class="default_t_color">Sản phẩm</a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
							<div class="clearfix m_bottom_30 t_xs_align_c">
						<div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
							@if($product_detail->discount > 0)
							<span class="hot_stripe"><img src="{{asset('public/home/images/sale_product.png')}}" alt=""></span>
							@endif
							<div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
								<img id="zoom_image" src="{{ asset('public/home/images/products/'.$product_detail->image) }}" data-zoom-image="{{asset('public/home/images/products/'.$product_detail->image) }}" class="tr_all_hover" alt="">
								<a href="images/preview_zoom_1.jpg" class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0">
									<i class="fa fa-expand"></i>
								</a>
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap">
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel_single d_inline_middle">
								@foreach($image as $item_image)
									<a href="#" data-image="{{ asset('public/home/images/products_detail/'.$item_image->image) }}"  width="438p" height="438" data-zoom-image="{{ asset('public/home/images/products_detail/'.$item_image->image) }}">
									<img src="{{ asset('public/home/images/products_detail/'.$item_image->image) }}" alt=""></a>
								@endforeach
								</ul>
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
						</div>
						<div class="p_top_10 t_xs_align_l">
							<!--description-->
							<h2 class="color_dark fw_medium m_bottom_10">{{$product_detail->name}}</h2>
							<div class="m_bottom_10">
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
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">{{$product_detail->view}} lượt xem </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Mã sản phẩm:</td>
									<td>{{$product_detail->id}}</td>
								</tr>
								<tr>
									<td>Chất liệu:</td>
									<td><a href="#" class="color_dark">{{$product_detail->material}}</a></td>
								</tr>
								<tr>
									<td>Trạng thái:</td>
									<td><span class="color_green"></span> {{$product_detail->quantity}} Sản phẩm</td>
								</tr>
								
							</table>
							<table class="description_table m_bottom_5">
								<tr>
									<td>Chiều dài:</td>
									<td>{{$product_detail->width}} cm</td>
								</tr>
								<tr>
									<td>Chiều rộng:</td>
									<td>{{$product_detail->width}} cm</td>
								</tr>
								@if($product_detail->discount > 0)
								<tr>
									<td>Giá cũ: </td>
									<td>{{number_format($product_detail->price)}} đồng</td>
								</tr>
								@endif
							</table>
							<hr class="divider_type_3 m_bottom_15">
							@if($product_detail->discount > 0)
								<span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">Giá mới: {{ number_format(($product_detail->price) - (($product_detail->price)*($product_detail->discount)*0.01)) }} đồng</span>
							@else
								<span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">Giá: {{number_format($product_detail->price)}} đồng</span>
							@endif
							<table class="description_table type_2 m_bottom_15">
								<tr>
									<td class="v_align_m">Số lượng:</td>
									<td class="v_align_m">
										<div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
											<button class="bg_tr d_block f_left" data-direction="down">-</button>
											<input type="text" name="" readonly value="1" class="f_left">
											<button class="bg_tr d_block f_left" data-direction="up">+</button>
										</div>
									</td>
								</tr>
							</table>
							<div class="d_ib_offset_0 m_bottom_20">
								<a href="{!! url('mua-san-pham', [$product_detail->link]) !!}"><button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">THÊM VÀO GIỎ</button></a>
							<a href="{{asset('yeu-thich/'.$product_detail->id)}}"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Yêu thích</span></i></button></a>
							</div>
							<div class="d_inline_middle m_left_5 addthis_widget_container">
								<div class="fb-like" data-href="{{url('san-pham/'.$product_detail->link)}}"  data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

								<g:plusone size="medium" ></g:plusone>
								<!-- AddThis Button END -->
							</div>
						</div>
					</div>
					<!--tabs-->
					<div class="tabs m_bottom_45">
						<!--tabs navigation-->
						<nav>
							<ul class="tabs_nav horizontal_list clearfix">
								<li class="f_xs_none"><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Giới thiệu sản phẩm</a></li>
								<li class="f_xs_none"><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Thông tin chi tiết</a></li>
								<li class="f_xs_none"><a href="#tab-3" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Video giới thiệu</a></li>
								<li class="f_xs_none"><a href="#tab-4" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Bình luận</a></li>
							</ul>
						</nav>
						<section class="tabs_content shadow r_corners">
							<div id="tab-1">
								<p class="m_bottom_10"><?php echo $product_detail->description; ?></p>
								
								<hr class="m_bottom_15">
								Danh mục <a href="#" class="color_dark">{{$product_detail->category_name}}</a>
							</div>
							<div id="tab-2">
								<h5 class="fw_medium m_bottom_15">Thông tin</h5>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_15">
										<div class="table_sm_wrap">
											<table class="description_table type_3 m_xs_bottom_10">
												<tr>
													<td>Tên sản phẩm:</td>
													<td>{{$product_detail->name}}</td>
												</tr>
												<tr>
													<td>Danh mục:</td>
													<td>{{$product_detail->category_name}}</td>
												</tr>
												<tr>
													<td>Nhà sản xuất:</td>
													<td>{{$product_detail->producer}}</td>
												</tr>
												<tr>
													<td>Chất liệu:</td>
													<td>{{$product_detail->material}}</td>
												</tr>
												<tr>
													<td>Bảo hành:</td>
													<td>{{$product_detail->guarantee}}</td>
												</tr>
												<tr>
													<td>Kích thước:</td>
													<td>{{$product_detail->width}}cm x {{$product_detail->length}}cm</td>
												</tr>
											</table>
										</div>
									</div>

								</div>
							</div>
							<div id="tab-3">
								<div class="iframe_video_wrap">
									<iframe src="{{$product_detail->linkpreview}}"></iframe>
								</div>
							</div>
							<div id="tab-4">
								 <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->link)}}" data-numposts="5"></div>
							</div>
						</section>
					</div>
							<div class="clearfix">
						<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none">Sản phẩm cùng danh mục</h2>
						<div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5">
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners rp_prev"><i class="fa fa-angle-left"></i></button>
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners rp_next"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
					
					<div class="related_projects m_bottom_15 m_sm_bottom_0 m_xs_bottom_15">
					@foreach($related as $item)
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							<!--product preview-->
							<a href="#" class="d_block relative pp_wrap">
								<!--hot product-->
								@if($item->discount > 0)
                                            <span class="hot_stripe"><img src="{{asset('public/home/images/sale_product.png')}}" alt=""></span>
                                            @endif
								<img src="{{ asset('public/home/images/products/'.$item->image) }}" style ="width:242px; height:200px" class="tr_all_hover" alt="">
								
							</a>
							<!--description and price of product-->
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="{{url('mua-san-pham/'.$item->link)}}" class="color_dark ellipsis">{{$item->name}}</a></h5>
								<div class="clearfix">
									@if($item->discount > 0)
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->price) - (($item->discount)/100) * ($item->price))}} đồng</p></h5>
                                                @else
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15">{{number_format($item->price)}} đồng</p></h5>
                                                @endif
									<!--rating-->
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
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
								</div>
								<a href="{!! url('mua-san-pham', [$item->link]) !!}"> <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Thêm vảo giỏ</button></a>
								<a href="{{asset('yeu-thich/'.$item->id)}}"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Yêu thích</span></i></button></a>
							</figcaption>
						</figure>
							@endforeach
					</div>
				
							<hr class="divider_type_3 m_bottom_15">
							<a href="{{asset('danh-muc/'. $product_detail->category_link)}}" role="button" class="d_inline_b bg_light_color_2 color_dark tr_all_hover button_type_4 r_corners"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>Quay về {{$product_detail->category_name}}</a>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
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
                                            <a href="#" class="f_size_large color_dark d_block relative">
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
                                                    <a href="{{asset('/danh-muc/'.$cate_c->link)}}" class="d_block f_size_large color_dark relative">
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
							<!--compare products-->
							<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
	                                <figcaption>
	                                    <h3 class="color_light">Danh sách sản phẩm</h3>
	                                </figcaption>
	                                <div class="widget_content">
	                                    <!--Categories list-->
	                                    <ul class="categories_list">
	                                        <li>
	                                            <a href="{{asset('danh-muc/san-pham-moi')}}" class="f_size_large color_dark d_block relative">
	                                                <b>Sản phẩm mới</b>
	                                                
	                                            </a>
	                                            <a href="{{asset('danh-muc/san-pham-dang-giam-gia')}}" class="f_size_large color_dark d_block relative">
	                                                <b>Sản phẩm đang giảm giá</b>
	                                               
	                                            </a>
	                                            <a href="{{asset('danh-muc/san-pham-hot')}}" class="f_size_large color_dark d_block relative">
	                                                <b>Sản phẩm hot</b>
	                                                
	                                            </a>
	                                            <a href="{{asset('danh-muc/san-pham-duoc-quan-tam')}}" class="f_size_large color_dark d_block relative">
	                                                <b>Sản phẩm được quan tâm</b>
	                                                
	                                            </a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </figure>
							<!--Bestsellers-->
							
							<!--tags-->

						</aside>
					</div>
				</div>
			</div>
			<!--markup footer-->
		@include('fontend.include.footer')
		</div>
		<!--social widgets-->
		@include('fontend.include.widget')
		<!--custom popup-->
		<!--login popup-->
		@include('fontend.include.login')
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="{{asset('public/home/js/jquery-2.1.0.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery-migrate-1.2.1.min.js')}}"></script>
		<script src="{{asset('public/home/js/retina.js')}}"></script>
		<script src="{{asset('public/home/js/elevatezoom.min.js')}}"></script>
		<script src="{{asset('public/home/js/waypoints.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery.tweet.min.js')}}"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
		<script src="{{asset('public/home/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('public/home/js/jquery.custom-scrollbar.js')}}"></script>
		<script src="{{asset('public/home/js/jquery.fancybox-1.3.4.js')}}"></script>
		<script src="{{asset('public/home/js/scripts.js')}}"></script>
		<script src="http://uhchat.net/code.php?f=dcb49e"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1726407527634394";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js" ></script>
		<script src="http://uhchat.net/code.php?f=f14fac"></script>
	</body>
</html>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
     @extends('fontend.include.head')
    @section('title')
        Kết quả tìm kiếm
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
                        <li><a href="#" class="default_t_color">Kết quả tìm kiếm</a></li>
                    </ul>
                </div>
            </section>
            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <div class="row clearfix">
                        <!--left content column-->
                        <section class="col-lg-9 col-md-9 col-sm-9">
                            <h2 class="tt_uppercase color_dark m_bottom_25">Kết quả tìm kiếm</h2>
                            <img class="r_corners m_bottom_40" src="{{asset('public/home/images/banner.jpg')}}" alt="">
                            <!--categories nav-->
                            <!--sort-->
                            <hr class="m_bottom_10 divider_type_3">
                            <div class="row clearfix m_bottom_15">
                                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 m_xs_bottom_10">
                                    <p class="d_inline_middle f_size_medium d_xs_block m_xs_bottom_5">Kết quả: {{$total}} sản phẩm</p>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 t_align_r t_xs_align_l">
                                    <!--pagination-->
                                   
                                </div>
                            </div>
                            <!--products-->
                            <section class="products_container category_grid clearfix m_bottom_15">
                                <!--product item-->
                                @foreach($products as $item)
                                <div class="product_item hit w_xs_full">
                                     <figure class="r_corners photoframe shadow relative animate_ftb long">
                                        <!--product preview-->
                                        <a href="{{url('san-pham/'.$item->link)}}" class="d_block relative wrapper pp_wrap">
                                        @if($item->discount > 0)
                                            <span class="hot_stripe"><img src="{{asset('public/home/images/sale_product.png')}}" alt=""></span>
                                        @endif
                                            <img src="{{ asset('public/home/images/products/'.$item->image) }}" style ="width:242px; height:200px" class="tr_all_hover" alt="">
                                            <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Xem chi tiết</span>
                                        </a>
                                        <!--description and price of product-->
                                        <figcaption>
                                            <h5 class="m_bottom_10"><a href="{{url('san-pham/'.$item->link)}}" class="color_dark">{{$item->name}}</a></h5>
                                            <div class="clearfix m_bottom_15">
                                                @if($item->discount > 0)
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->discount/100) * $item->price)}} đồng</p></h5>
                                                @else
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15">{{number_format($item->price)}} đồng</p></h5>
                                                @endif
                                                <!--rating-->
                                                <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                                   
                                                </ul>
                                            </div>
                                            <div class="clearfix">
                                                <a href="{!! url('mua-san-pham', [$item->link]) !!}"> <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Thêm vảo giỏ</button></a>
                                               <a href="{{asset('yeu-thich/'.$item->id)}}"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Yêu thích</span></i></button></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                                <!--product item-->
                            </section>
                            <hr class="m_bottom_10 divider_type_3">
                            <div class="row clearfix m_bottom_15 m_xs_bottom_30">
                                <ul class="pagination">
                                       {!! $products->render() !!}
                                        
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
                            <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Danh sách sản phẩm</h3>
                                </figcaption>
                                <div class="widget_content">
                                    <!--Categories list-->
                                    <ul class="categories_list">
                                        <li>
                                            <a href="{{asset('danh-sach/san-pham-moi')}}" class="f_size_large color_dark d_block relative">
                                                <b>Sản phẩm mới</b>
                                                
                                            </a>
                                            <a href="{{asset('danh-sach/san-pham-dang-giam-gia')}}" class="f_size_large color_dark d_block relative">
                                                <b>Sản phẩm đang giảm giá</b>
                                               
                                            </a>
                                            <a href="{{asset('danh-sach/san-pham-hot')}}" class="f_size_large color_dark d_block relative">
                                                <b>Sản phẩm hot</b>
                                                
                                            </a>
                                            <a href="{{asset('danh-sach/san-pham-duoc-quan-tam')}}" class="f_size_large color_dark d_block relative">
                                                <b>Sản phẩm được quan tâm</b>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <!--compare products-->
                           <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Sản phẩm yêu thích</h3>
                                </figcaption>
                                <div class="widget_content">
                                    Bạn chưa có sản phẩm yêu thích
                                </div>
                            </figure>
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
        <script src="{{asset('public/home/js/retina.js')}}"></script>
        <script src="{{asset('public/home/js/waypoints.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.tweet.min.js')}}"></script>
        <script src="{{asset('public/home/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.custom-scrollbar.js')}}"></script>
        <script src="{{asset('public/home/js/scripts.js')}}"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
<script src="http://uhchat.net/code.php?f=f14fac"></script>
    </body>
</html>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
    @extends('fontend.include.head')
    @section('title')
        Mito Mart - Phụ kiện Iphone chính hãng
    @stop
    <body>
        <!--boxed layout-->
        <div class="boxed_layout relative w_xs_auto">
            <!--[if (lt IE 9) | IE 9]>
                <div style="background:#fff;padding:8px 0 10px;">
                <div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
            <![endif]-->
            <!--markup header-->
           @include('fontend.include.header')
            <!--slider-->
            @include('fontend.include.slider')

            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <!--banners-->
                    <div class="row clearfix">
                        <aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
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
                            <!--compare products-->
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
                            <!--wishlist-->
                            @if (!Auth::guest())
                            <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Sản phẩm yêu thích</h3>
                                </figcaption>
                                <div class="widget_content">
                                    Bạn chưa có sản phẩm yêu thích
                                </div>
                            </figure>
                            @endif
                            <!--banner-->
                        </aside>
                        <section class="col-lg-9 col-md-9 col-sm-9">
                            <a href="{{asset('danh-sach/san-pham-moi')}}"><h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Sản phẩm mới</h2></a>
                            <!--products-->
                            <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                                <!--product item-->
                                @foreach($product_new as $item)
                                <div class="product_item featured">
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
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->price) - (($item->discount)/100) * ($item->price))}} đồng</p></h5>
                                                @else
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15">{{number_format($item->price)}} đồng</p></h5>
                                                @endif
                                                <!--rating-->
                                                <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                                    
                                                </ul>
                                                </ul>
                                            </div>
                                            <div class="clearfix">
                                                <a href="{!! url('mua-san-pham', [$item->link]) !!}"> <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Thêm vảo giỏ</button></a>
                                                <a href="{{asset('yeu-thich/'.$item->id)}}"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Yêu thích</span></i></button></a>
                                            </div>
                                            <h5>{{$item->view}} lượt xem</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </section>
                            <hr>
                            <br>
                            <a href="{{asset('danh-sach/san-pham-dang-giam-gia')}}"><h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Sản phẩm đang giảm giá</h2></a>
                            <!--products-->
                            <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                                <!--product item-->
                                @foreach($product_sale as $item)
                               <div class="product_item featured">
                                    <figure class="r_corners photoframe shadow relative animate_ftb long">
                                        <!--product preview-->
                                        <a href="{{url('san-pham/'.$item->link)}}" class="d_block relative wrapper pp_wrap">
                                            <span class="hot_stripe"><img src="{{asset('public/home/images/sale_product.png')}}" alt=""></span>
                                            <img src="{{ asset('public/home/images/products/'.$item->image) }}" style ="width:242px; height:200px" class="tr_all_hover" alt="">
                                            <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Xem chi tiết</span>
                                        </a>
                                        <!--description and price of product-->
                                        <figcaption>
                                            <h5 class="m_bottom_10"><a href="{{url('san-pham/'.$item->link)}}" class="color_dark">{{$item->name}}</a></h5>
                                            <div class="clearfix m_bottom_15">
                                                 @if($item->discount > 0)
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->price) - (($item->discount)/100) * ($item->price))}} đồng</p></h5>
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
                                            <h5>{{$item->view}} lượt xem</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </section>
                            <hr>
                            <br>
                            <a href="{{asset('danh-sach/san-pham-dang-giam-gia')}}"><h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Sản phẩm hot</h2></a>
                            <!--products-->
                            <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                                <!--product item-->
                                @foreach($product_hot as $item)
                                <div class="product_item featured">
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
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->price) - (($item->discount)/100) * ($item->price))}} đồng</p></h5>
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
                                            <h5>{{$item->view}} lượt xem</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </section>
                            <hr>
                            <br>
                            <a href="{{asset('danh-sach/san-pham-dang-giam-gia')}}"><h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Sản phẩm được quan tâm</h2></a>
                            <!--products-->
                            <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                                <!--product item-->
                                @foreach($product_most_view as $item)
                                <div class="product_item featured">
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
                                                    <h5><p class="scheme_color f_left f_size_large m_bottom_15"><s>{{number_format($item->price)}}   </s>   {{number_format(($item->discount/100) * ($item->price))}} đồng</p></h5>
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
                                            <h5>{{$item->view}} lượt xem</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </section>
                            <!--banners-->
                           <div class="row clearfix m_bottom_45 m_sm_bottom_35">
                            <div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
                                <div class="clearfix m_bottom_25 m_sm_bottom_20">
                                    <h2 class="tt_uppercase color_dark f_left">Tin bài</h2>
                                    <div class="f_right clearfix nav_buttons_wrap">
                                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                                <!--blog carousel-->
                                <div class="blog_carousel">
                                    @foreach($news as $item)
                                    <div class="clearfix">
                                        <!--image-->
                                        <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                                            <img class="tr_all_long_hover" <img src="{{asset($item->imageTitle)}}" alt="">
                                        </a>
                                        <!--post content-->
                                        <div class="mini_post_content">
                                            <h4 class="m_bottom_5 animate_ftr"><a href="{{url('tin-tuc/'.$item->link)}}" class="color_dark"><b>{{$item->name}}</b></a></h4>
                                            <p class="f_size_medium m_bottom_10 animate_ftr">{{$item->created_at}}</p>
                                            <p class="m_bottom_10 animate_ftr">{{$item->description}}</p>
                                            <a class="tt_uppercase f_size_large animate_ftr" href="{{url('tin-tuc/'.$item->link)}}">Đọc tiếp</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        <!--testimonials-->
                        <div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">
                            <div class="clearfix m_bottom_25 m_sm_bottom_20">
                                <h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15">Khẩu hiệu của chúng tôi</h2>
                                <div class="f_right clearfix nav_buttons_wrap f_mxs_none">
                                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>
                                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                            <!--testimonials carousel-->
                            <div class="testiomials_carousel">
                                <div>
                                    <blockquote class="r_corners shadow f_size_large relative m_bottom_15 animate_ftr">Cam kết mang đến những sản phẩm chính hãng, chất lượng nhất</blockquote>
                                    <!-- <img class="circle m_left_20 d_inline_middle animate_ftr" src="images/testimonial_img_1.jpg" alt=""> -->
                                    <div class="d_inline_middle m_left_15 animate_ftr">
                                        <h5 class="color_dark"><b>Mito Mart</b></h5>
                                        <p>Hà Nội</p>
                                    </div>
                                </div>
                                <div>
                                    <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Mito Mart, địa chỉ đáng tin cậy của bạn</blockquote>
                                    <!-- <img class="circle m_left_20 d_inline_middle" src="images/testimonial_img_2.jpg" alt=""> -->
                                    <div class="d_inline_middle m_left_15">
                                        <h5 class="color_dark"><b>Mito Mart</b></h5>
                                        <p>Hà Nội</p>
                                    </div>
                                </div>
                                <div>
                                    <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Mang lại những sản phẩm chất lượng</blockquote>
                                    <!-- <img class="circle m_left_20 d_inline_middle" src="images/testimonial_img_3.jpg" alt=""> -->
                                    <div class="d_inline_middle m_left_15">
                                        <h5 class="color_dark"><b>Mito Mart</b></h5>
                                        <p>Hà Nội</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </section>
                    </div>
                </div>
            </div>
             <img src="E:\My Pictures\Anh Chon Loc\8273056498_a88ee9091e_b1.jpg" alt="">
            <!--markup footer-->
            @include('fontend.include.footer')
        </div>
        <!--social widgets-->
        @include('fontend.include.widget')
        <!--login popup-->
        @include('fontend.include.login')
        @include('fontend.include.register')
        <!--custom popup-->
        <button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
        <!--scripts include-->
     <script src="{{asset('public/home/js/jquery-2.1.0.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery-migrate-1.2.1.min.js')}}"></script>
        <script src="{{asset('public/home/js/retina.js')}}"></script>
        <script src="{{asset('public/home/js/camera.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('public/home/js/waypoints.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('public/home/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.tweet.min.js')}}"></script>
        <script src="{{asset('public/home/js/jquery.custom-scrollbar.js')}}"></script>
        <script src="{{asset('public/home/js/scripts.js')}}"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
<script src="http://uhchat.net/code.php?f=f14fac"></script>
    </body>
</html>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
    @extends('fontend.include.head')
    @section('title')
        Lỗi! địa chỉ không đúng
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
                        <li><a href="#" class="default_t_color">Trang không tồn tại</a></li>
                    </ul>
                </div>
            </section>
            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <div class="row clearfix">
                        <!--left content column-->
                        <section class="col-lg-9 col-md-9 col-sm-9">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
                                    <h2 class="tt_uppercase color_dark m_bottom_25">Trang này không tồn tại, hoặc đang trong thời gian hoàn thiện.</h2>
                                    <img src="{{asset('public/Not-Found-404-Orange.png')}}" alt="">
                                    
                                </div>
                            </div>
                        </section>
                        <!--right column-->
                       
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
       @include('fontend.include.script')
    </body>
</html>
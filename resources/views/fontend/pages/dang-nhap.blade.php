<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
    @extends('fontend.include.head')
    @section('title')
        Đăng nhập
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
                        <li class="m_right_10 current"><a href="#" class="default_t_color">Đăng nhập hệ thống<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
                    </ul>
                </div>
            </section>
            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <div class="row clearfix">
                        <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                            <h2 class="tt_uppercase color_dark m_bottom_25">Đăng nhập hệ thống</h2>
                            <div class="tabs m_bottom_45">
                                <section class="tabs_content shadow r_corners">
                                    <div id="tab-2">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Lỗi!</strong><br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                       <form class="form-horizontal" role="form" method="POST" action="{{asset('dang-nhap')}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <ul>
                                                <li class="m_bottom_15">
                                                    <label for="u_email" class="d_inline_b m_bottom_5 required">Địa chỉ email</label>
                                                    <input type="email"  name="email" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_pass" class="d_inline_b m_bottom_5 required">Mật khẩu</label>
                                                    <input type="password" name="password" class="r_corners full_width">
                                                </li>
                                            </ul>

                                        
                                    </div>
                                    <table class="table_type_5 full_width r_corners wraper shadow t_align_l">
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" id="checkbox_8" required class="d_none"><label for="checkbox_8">Ghi nhớ đăng nhập</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20" type="submit">Đăng nhập</button>
                                    </td>
                                </tr>
                            </table>
                                </section>
                            </div>
                            
                            </form>
                        </section>

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
        <script src="{{asset('public/home/js/scripts.js')}}"></script>
        <script src="http://uhchat.net/code.php?f=dcb49e"></script>
    </body>
</html>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
    @extends('fontend.include.head')
    @section('title')
        Đăng ký làm thành viên hệ thống
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
                        <li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
                        <li class="m_right_10 current"><a href="#" class="default_t_color">Checkout<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
                        <li><a href="#" class="default_t_color">Shopping Cart</a></li>
                    </ul>
                </div>
            </section>
            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <div class="row clearfix">
                        <!--left content column-->
                        <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                            <h2 class="tt_uppercase color_dark m_bottom_25">Đăng ký tài khoản</h2>
                            <a href="{{asset('dang-nhap')}}" "email me">Đăng nhập</a>
                            <!--cart table-->
                            <!--tabs-->
                            <div class="tabs m_bottom_45">
                                <!--tabs navigation-->
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
                                       <form class="form-horizontal" role="form" method="POST" action="{{asset('dang-ky')}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <ul>
                                                <li class="m_bottom_25">
                                                    <label for="d_name" class="d_inline_b m_bottom_5 required">Họ và tên</label>
                                                    <input type="text" name="name" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_email" class="d_inline_b m_bottom_5 required">Địa chỉ email</label>
                                                    <input type="email"  name="email" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_pass" class="d_inline_b m_bottom_5 required">Mật khẩu</label>
                                                    <input type="password" name="password" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Xác nhận mật khẩu</label>
                                                    <input type="password"  name="password_confirmation" class="r_corners full_width">
                                                </li class="m_bottom_15">
                                                 <li>
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Địa chỉ facebook</label>
                                                    <input type="text"  name="facebook" class="r_corners full_width" placeholder="https://www.facebook.com/...">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Số điện thoại</label>
                                                    <input type="number"  name="phone" class="r_corners full_width">
                                                </li>
                                                <li class="form-control">
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Giới tính</label>
                                                   <div class="custom_select relative">
                                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Lựa chọn giới tính</div>
                                                        <ul class="select_list d_none"></ul>
                                                        <select name="gender">
                                                            <option value="Nam">Nam</option>
                                                            <option value="Nữ">Nữ</option>
                                                            <option value="Không xác định">Không xác định</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Địa chỉ </label>
                                                    <input type="text"  name="address" class="r_corners full_width">
                                                </li>
                                            </ul>
                                        
                                    </div>
                                </section>
                            </div>
                            <table class="table_type_5 full_width r_corners wraper shadow t_align_l">
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" id="checkbox_8" required class="d_none"><label for="checkbox_8">Tôi đồng ý với các điều khoản</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20" type="submit">Đăng ký</button>
                                    </td>
                                </tr>
                            </table>
                            </form>
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
                                                    <a href="#" class="d_block f_size_large color_dark relative">
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
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Có thể bạn muốn xem</h3>
                                </figcaption>
                                <div class="widget_content">
                                     @foreach($random_product as $item)
                                    <div class="clearfix m_bottom_15">
                                        <img src="{{ asset('public/home/images/products/'.$item->image) }}" style ="width:100px; height:70px" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                        <a href="{{asset('san-pham/'.$item->link)}}" class="color_dark d_block m_bottom_5 bt_link">{{$item->name}}</a>
                                        <p class="scheme_color">{{number_format($item->price)}}</p>
                                    </div>
                                    <hr class="m_bottom_15">
                                @endforeach
                                </div>
                            </figure>
                            <!--wishlist-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Sản phẩm yêu thích</h3>
                                </figcaption>
                                 @if (Auth::guest())
                                  <div class="widget_content">
                                    Bạn phải đăng nhập 
                                </div>
                                @else
                               <div class="widget_content">
                                    <div class="clearfix m_bottom_15 relative cw_product">
                                        <img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                        <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                                        <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                    </div>
                                    <hr class="m_bottom_15">
                                    <div class="clearfix m_bottom_25 relative cw_product">
                                        <img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                        <a href="#" class="color_dark d_block bt_link">Elemenum vel</a>
                                        <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                    </div>
                                    <a href="#" class="color_dark"><i class="fa fa-files-o m_right_10"></i>Go to Compare</a>
                                </div>
                                @endif
                            </figure>


                            <!--New products-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Sản phẩm mới</h3>
                                </figcaption>
                                <div class="widget_content">
                                @foreach($new_product as $item)
                                    <div class="clearfix m_bottom_15">
                                        <img src="{{ asset('public/home/images/products/'.$item->image) }}" style ="width:100px; height:70px" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                        <a href="{{asset('san-pham/'.$item->link)}}" class="color_dark d_block m_bottom_5 bt_link">{{$item->name}}</a>
                                        <p class="scheme_color">{{number_format($item->price)}}</p>
                                    </div>
                                    <hr class="m_bottom_15">
                                @endforeach
                                </div>
                            </figure>
                            <!--Specials-->



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
        <script src="{{asset('public/home/js/scripts.js')}}"></script>
        <script src="http://uhchat.net/code.php?f=f14fac"></script>
        
    </body>
</html>
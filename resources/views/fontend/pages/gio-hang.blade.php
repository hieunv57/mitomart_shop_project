<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
    @extends('fontend.include.head')
    @section('title')
        Giỏ hàng
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
                        <li class="m_right_10 current"><a href="#" class="default_t_color">Thanh toán<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
                    </ul>
                </div>
            </section>
            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <div class="row clearfix">
                        <!--left content column-->
                        <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                            <h2 class="tt_uppercase color_dark m_bottom_25">Giỏ hàng</h2>
                             <?php
                                $content = Cart::content();
                                $count = Cart::count(false);
                                $total = Cart::total();
                            ?>
                            <!--cart table-->
                            <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
                                <thead>
                                    <tr class="f_size_large">
                                        <!--titles for td-->
                                        <th>Tên và ảnh sản phẩm</th>
                                        <th>Mã</th>
                                        <th>Giá</th>
                                        <th class="quantity">Số lượng</th>
                                        <th>Hành động</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @if($count > 0)
                                <!-- <form method="POST" action="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                                    @foreach($content as $item)
                                    <tr>
                                        <!--Product name and image-->
                                        <td data-title="Product Image &amp; name" class="t_md_align_c">
                                            <img src="{!! $item->options->avatar !!}" alt="" class="m_md_bottom_5 d_xs_block d_xs_centered">
                                            <a href="#" class="d_inline_b m_left_5 color_dark">{{$item->name}}</a>
                                        </td>
                                        <!--product key-->
                                        <td data-title="SKU">{{$item->id}}</td>
                                        <!--product price-->
                                        <td data-title="Price">
                                        @if($item->discount > 0)
                                            <s>{{$item->price}}</s>
                                            <p class="f_size_large color_dark">{{$item->discount * $item->price}}</p>
                                        @else
                                             <p class="f_size_large color_dark">{{number_format($item->price)}}</p>
                                        @endif
                                        </td>
                                        <!--quanity-->
                                        <td data-title="Quantity" class="cart_quantity">
                                            <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10 quantity">
                                                <input class="qty" type="text" name="quantity"  value="{{$item['qty']}}" >
                                            </div>
                                            
                                        </td>
                                        <td>
                                            <div>
                                                <a  href="" class="update_cart" id="{{ $item['rowid'] }}"><img src="{{ asset('public/images/update.png') }}" alt="" style="height:20px; width=20px" ></a>
                                                <a href="{!! url('xoa-san-pham', ['id'=>$item['rowid']]) !!}" class="color_dark"><img src="{{ asset('public/images/delete.png') }}" alt="" style="height:20px; width=20px" ></a><br>
                                            </div>
                                        </td>
                                        <!--subtotal-->
                                        <td data-title="Subtotal">
                                            <p class="f_size_large fw_medium scheme_color">{{number_format($item->price * $item->qty)}}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                  <!--   </form> -->
                                    <tr>
                                        <td colspan="4">
                                            <p class="fw_medium f_size_large t_align_r t_xs_align_c">Tổng giá trị sản phẩm:</p>
                                        </td>
                                        <td colspan="1">
                                            <p class="fw_medium f_size_large color_dark">{{number_format($total)}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <p class="fw_medium f_size_large t_align_r t_xs_align_c">Phí vận chuyển:</p>
                                        </td>
                                        <td colspan="1">
                                            <p class="fw_medium f_size_large color_dark">30,000</p>
                                        </td>
                                    </tr>
                                    <!--total-->
                                    <tr>
                                        <td colspan="4" class="v_align_m d_ib_offset_large t_xs_align_l">
                                            <!--coupon-->
                                            <div class="d_ib_offset_0 d_inline_middle half_column d_xs_block w_xs_full m_xs_bottom_5">
                                                
                                            </div>
                                            <p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Tổng giá trị đơn hàng:</p>
                                        </td>
                                        <td colspan="1" class="v_align_m">
                                            <p class="fw_medium f_size_large scheme_color m_xs_bottom_10">{{number_format($total+30000)}}</p>
                                        </td>
                                    </tr>
                                    @else
                                        <tr>
                                        <!--Product name and image-->
                                        <td data-title="Product Image &amp; name" class="t_md_align_c">
                                            
                                            <a href="#" class="d_inline_b m_left_5 color_dark">Không có sản phẩm nào trong giỏ hàng</a>
                                        </td>
                                        <!--product key-->
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <!--tabs-->
                            @if (Auth::guest())
                            <div class="tabs m_bottom_45">
                                <!--tabs navigation-->
                                <nav>
                                    <ul class="tabs_nav horizontal_list clearfix">
                                        <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Đăng nhập</a></li>
                                        <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Đăng ký tài khoản</a></li>
                                    </ul>
                                </nav>
                                <section class="tabs_content shadow r_corners">
                                    <div id="tab-1">
                                        <!--login form-->
                                        <h5 class="fw_medium m_bottom_15">Bạn đã có tải khoản?</h5>
                                        <a href="#" data-popup="#login_popup"><button class="tr_delay_hover r_corners button_type_14 bg_color_green color_light" type="button">Đăng nhập tại đây</button></a>
                                    </div>
                                    <div id="tab-2">
                                        <h5 class="fw_medium m_bottom_15">Bạn đã chưa có tài khoản ?</h5>
                                        <a href="{{asset('dang-ky')}}" data-popup="#login_popup"><button class="tr_delay_hover r_corners button_type_14 bg_color_green color_light" type="button">Đăng ký tại đây</button></a>
                                    </div>
                                </section>
                            </div>
                            @endif
                            @if (!Auth::guest())
                            <h2 class="color_dark tt_uppercase m_bottom_25">Thông tin cá nhân</h2>
                            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                                <div class="row clearfix">
                                    <form method="POST" action="{{asset('thanh-toan')}}" >
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <ul>
                                                <li class="m_bottom_25">
                                                    <label for="d_name" class="d_inline_b m_bottom_5 required">Họ và tên</label>
                                                    <input type="text" id="d_name" name="username" value="{{ Auth::user()->name }}" class="r_corners full_width">
                                                </li>
                                               
                                                <li class="m_bottom_15">
                                                    <label for="u_name" class="d_inline_b m_bottom_5 required">Địa chỉ email</label>
                                                    <input type="email" id="u_name" name="email" value="{{ Auth::user()->email }}" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_email" class="d_inline_b m_bottom_5 required">Địa chỉ facebook</label>
                                                    <input type="text" id="u_email" name="facebook" value="{{ Auth::user()->facebook }}" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_pass" class="d_inline_b m_bottom_5 required">Địa chỉ nhận hàng</label>
                                                    <input type="text" id="u_pass" name="address" value="{{ Auth::user()->address }}" class="r_corners full_width">
                                                </li>
                                                <li>
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Số điện thoại</label>
                                                    <input type="number" id="u_repeat_pass" name="phone" value="{{ Auth::user()->phone }}" class="r_corners full_width">
                                                </li>
                                            </ul>
                                </div>
                            </div>
                            @else
                            <h2 class="color_dark tt_uppercase m_bottom_25">Thông tin cá nhân</h2>
                            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                                <div class="row clearfix">
                                    <form method="POST" action="{{asset('cam-on')}}" >
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <ul>
                                                <li class="m_bottom_25">
                                                    <label for="d_name" class="d_inline_b m_bottom_5 required">Họ và tên</label>
                                                    <input type="text" id="d_name" name="username"  class="r_corners full_width">
                                                </li>
                                               
                                                <li class="m_bottom_15">
                                                    <label for="u_name" class="d_inline_b m_bottom_5 required">Địa chỉ email</label>
                                                    <input type="email" id="u_name" name="email"  class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_email" class="d_inline_b m_bottom_5 required">Địa chỉ facebook</label>
                                                    <input type="text" id="u_email" name="facebook" class="r_corners full_width">
                                                </li>
                                                <li class="m_bottom_15">
                                                    <label for="u_pass" class="d_inline_b m_bottom_5 required">Địa chỉ nhận hàng</label>
                                                    <input type="text" id="u_pass" name="address" class="r_corners full_width">
                                                </li>
                                                <li>
                                                    <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Số điện thoại</label>
                                                    <input type="number" id="u_repeat_pass" name="phone"  class="r_corners full_width">
                                                </li>
                                            </ul>
                                </div>
                            </div>
                            @endif
                            <h2 class="tt_uppercase color_dark m_bottom_30">Hình thức thanh toán</h2>
                            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                                <figure class="block_select clearfix relative m_bottom_15">
                                    <input type="radio" checked name="payments_type" required class="d_none">
                                    
                                    <figcaption>
                                        <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Thanh toán trực tiếp</h5>
                                        <p>Cửa hàng sẽ chuyển hàng đến địa chỉ của bạn. Bạn thanh toán trực tiếp với nhân viên giao hàng</p>
                                    </figcaption>
                                </figure>
                                <hr class="m_bottom_20">
                                <figure class="block_select clearfix relative">
                                    <input type="radio" name="payments_type"required class="d_none">
                                    
                                    <figcaption>
                                        <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Thanh toán bằng chuyển khoản ngân hàng</h5>
                                        <p>Thanh toán thông qua chuyển khoản ngân hàng. Khi giao dịch chuyển khoản thành công, chúng tôi sẽ chuyển hàng đến địa chỉ của bạn</p>
                                    </figcaption>
                                </figure>
                                <hr class="m_bottom_20">
                                <figure class="block_select clearfix relative">
                                    <input type="radio" name="payments_type" required class="d_none">
                                    
                                    <figcaption>
                                        <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Thanh toán bằng các hình thức online</h5>
                                        <p></p>
                                    </figcaption>
                                </figure>
                            </div>
                            <h2 class="tt_uppercase color_dark m_bottom_30">Thông tin bổ sung</h2>
                            <!--requests table-->
                            <table class="table_type_5 full_width r_corners wraper shadow t_align_l">
                                <tr>
                                    <td colspan="2">
                                        <label for="notes" class="d_inline_b m_bottom_5">Thông tin bổ sung </label>
                                        <textarea id="notes" placeholder="Nếu cần thông tin bổ sung, bạn vui lòng điền vào đây" name="comment"class="r_corners notes full_width"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" name="checkbox_8" required id="checkbox_8" class="d_none"><label for="checkbox_8">Tôi đồng ý đặt hàng</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Đặt hàng</button>
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
                            <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Sản phẩm yêu thích</h3>
                                </figcaption>
                                <div class="widget_content">
                                    Bạn chưa có sản phẩm yêu thích
                                </div>
                            </figure>
                            <!--banner-->
                            
            
                        </aside>
                    </div>
                </div>
            </div>
            <!--markup footer-->
            @include('fontend.include.footer')
        </div>
        <!--social widgets-->
        @include('fontend.include.widget')
            <!--contact info-->
           
        </ul>
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
        <script src="{{asset('public/home/js/myscripts.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    </body>
</html>
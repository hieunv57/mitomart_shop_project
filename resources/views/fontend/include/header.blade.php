            <header role="banner">
                <!--header top part-->
                <section class="h_top_part">
                    <div class="container">
                        <div class="row clearfix">
                            @if (Auth::guest())
                            <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                                <p class="f_size_small">Chào mừng đến với Mito Mart<a href="#" data-popup="#login_popup"> Đăng nhập </a> hoặc <a href="{{asset('dang-ky')}}" > Đăng ký tài khoản </a> </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                                <p class="f_size_small">Liên hệ: <b class="color_dark">094 616 10 32</b></p>
                            </div>
                            @else
                             <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                               
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                                <p class="f_size_small">Liên hệ: <b class="color_dark">094 616 10 32</b></p>
                            </div>
                            <nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                               <ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
                                <!--like-->
                                <!--language settings-->
                                <li class="m_left_5 relative container3d">
                                    <a role="button" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="lang_button"><img class="d_inline_middle m_right_10 m_mxs_right_0" style="height:20px; width:20px"src="{{asset(Auth::user()->avatar)}}"  alt=""><span class="d_mxs_none">{{ Auth::user()->name }}</span></a>
                                    <ul class="dropdown_list top_arrow color_light">
                                     @if (Auth::user()->role_id=='1')
                                        <li><a href="{{asset('admin')}}" class="tr_delay_hover color_light">Trang quản lý</a></li>
                                        @endif
                                        <li><a href="{{asset('thong-tin-ca-nhan')}}" class="tr_delay_hover color_light">Trang cá nhân</a></li>
                                        <li><a href="#" class="tr_delay_hover color_light">Đổi mật khẩu</a></li>
                                        <li><a href="{{asset('dang-xuat')}}" class="tr_delay_hover color_light">Đăng xuất</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </nav>
                            @endif
                            <marquee width="100%" behavior="scroll" direction="left" scrollamount="7">
                                        <a target="_blank" >Hiện tại website Mito Mart vẫn đang trong giai đoạn thử nghiệm. Website sẽ đưa vào hoạt động chỉnh thức trong thời gian sớm nhất. Rất mong được sự ủng hộ của mọi người.</a>
                                    </marquee>
                        </div>
                    </div>
                </section>
                <!--header bottom part-->
                <section class="h_bot_part container">
                    <div class="clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                            <a href="{{asset('/')}}" class="logo m_xs_bottom_15 d_xs_inline_b">
                                <img src="{{asset('public/home/images/mitomart.png')}}" style="height:70px; width:314px" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
                            <ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
                                <!--like-->
                             @if (!Auth::guest())
                                <li>
                                    <a role="button" href="{{asset('san-pham-yeu-thich')}}"  class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c">{{ $total = Wishlist::findWishlist()->count() }}</span></a>
                                </li>
                                @endif
                               
                                <!--language settings-->
                               
                                <!--shopping cart-->
                                 <?php
                                        $content = Cart::content();
                                        $count = Cart::count(false);
                                        $total = Cart::total();
                                    ?>
                                <li class="m_left_5 relative container3d" id="shopping_button">
                                    <a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                                        <span class="d_inline_middle shop_icon m_mxs_right_0">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="count tr_delay_hover type_2 circle t_align_c">{{$count}}</span>
                                        </span>
                                        <b class="d_mxs_none">{{number_format($total)}}</b>
                                    </a>
                                    <div class="shopping_cart top_arrow tr_all_hover r_corners">
                                        <div class="f_size_medium sc_header">Các sản phẩm trong giỏ</div>
                                        <ul class="products_list">
                                        @foreach($content as $item)
                                            <li>
                                                <div class="clearfix">
                                                    <!--product image-->
                                                    <img class="f_left m_right_10" src="{{ asset('public/home/images/products/'.$item->options->image) }}" style="height:60px; width=60px "alt="">
                                                    <!--product description-->
                                                    <div class="f_left product_description">
                                                        <a href="#" class="color_dark m_bottom_5 d_block">{{$item->name}}</a>
                                                        <span class="f_size_medium">Mã sản phẩm: {{$item->id}}</span>
                                                    </div>
                                                    <!--product price-->
                                                    <div class="f_left f_size_medium">
                                                        <div class="clearfix">
                                                            {{$item["qty"]}} x <b class="color_dark">{{number_format(($item->price) - (($item->discount)/100) * ($item->price))}} đồng</b>
                                                        </div>
                                                        
                                                    </div>
                                                    <a href="{!! url('xoa-san-pham', ['id'=>$item['rowid']]) !!}"><button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button></a>
                                                </div>
                                            </li>
                                        @endforeach
                                        </ul>
                                        <!--total price-->
                                        <ul class="total_price bg_light_color_1 t_align_r color_dark">
                                            <li>Tổng giá trị: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15">{{number_format($total)}} đồng</b></li>
                                        </ul>
                                       
                                        <div class="sc_footer t_align_c">
                                            <a href="{{asset('gio-hang')}}" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">Xem giỏ hàng</a>
                                            <a href="{{asset('gio-hang')}}" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Thanh toán</a>
                                        </div>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--main menu container-->
                <section class="menu_wrap relative">
                    <div class="container clearfix">
                        <!--button for responsive menu-->
                        <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
                            <span class="centered_db r_corners"></span>
                            <span class="centered_db r_corners"></span>
                            <span class="centered_db r_corners"></span>
                        </button>
                        <!--main menu-->
                        <nav role="navigation" class="f_left f_xs_none d_xs_none">  
                            <ul class="horizontal_list main_menu clearfix">
                            <li class="current relative f_xs_none m_xs_bottom_5"><a href="{{asset('/')}}" class="tr_delay_hover color_light tt_uppercase"><b>Trang chủ</b></a>
                            

                                <?php
                                    $cate_cha=DB::table('category')->where('level','=','1')->get();
                                ?>
                                @foreach ($cate_cha as $cate)
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="{{asset('danh-muc/'.$cate->link)}}" class="tr_delay_hover color_light tt_uppercase"><b>{{$cate->name}}</b></a>
                                    <!--sub menu-->
                                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                        <ul class="sub_menu">
                                            <?php
                                                $cate_con=DB::table('category')->where('parent_id',$cate->id)->get();
                                            ?>
                                            @foreach ($cate_con as $cate_c)
                                            <li><h4><a class="color_dark tr_delay_hover" href="{{asset('/danh-muc/'.$cate_c->link)}}">{{$cate_c->name}}</a></h4></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="{{asset('tin-tuc')}}" class="tr_delay_hover color_light tt_uppercase"><b>Tin tức</b></a>
                                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                        <ul class="sub_menu">
                                            <li><h4><a class="color_dark tr_delay_hover" href="">Tin tức</a></h4></li>
                                            <li><h4><a class="color_dark tr_delay_hover" href="blog_post.html">Hướng dẫn sử dụng</a></h4></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <!--search form-->
                    <div class="searchform_wrap tf_xs_none tr_all_hover">
                        <div class="container vc_child h_inherit relative">
                            <form role="search" class="d_inline_middle full_width" method="POST" action="{{asset('tag')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm và ấn Enter" required class="f_size_large">
                            </form>
                            <button class="close_search_form tr_all_hover d_xs_none color_dark">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                </section>
            </header>
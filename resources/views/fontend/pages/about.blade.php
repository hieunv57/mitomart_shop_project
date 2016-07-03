<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
 <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
    @extends('fontend.include.head')
    @section('title')
        Mito Mart - Chuyên cung cấp phụ kiện Iphone chính hãng
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
                        <li><a href="#" class="default_t_color">Liên hệ</a></li>
                    </ul>
                </div>
            </section>
            <!--content-->
            <div class="page_content_offset">
                <div class="container">
                    <div class="row clearfix">
                        <!--left content column-->
                        <section class="col-lg-9 col-md-9 col-sm-9">
                            <h2 class="tt_uppercase color_dark m_bottom_25">Liên hệ</h2>
                            <div class="r_corners photoframe map_container shadow m_bottom_45">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.269774905335!2d105.78954031433838!3d21.021888993390046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab50584c2f87%3A0xba0c97695af2eeea!2zMjY1IFnDqm4gSMOyYSwgWcOqbiBIb8OgLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1460656005798"></iframe>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                                    <h2 class="tt_uppercase color_dark m_bottom_25">Địa chỉ liên hệ</h2>
                                    <ul class="c_info_list">
                                        <li class="m_bottom_10">
                                            <div class="clearfix m_bottom_15">
                                                <i class="fa fa-map-marker f_left color_dark"></i>
                                                <p class="contact_e">265 Yên Hòa,<br> Cầu Giấy, Hà Nội</p>
                                            </div>
                                        </li>
                                        <li class="m_bottom_10">
                                            <div class="clearfix m_bottom_10">
                                                <i class="fa fa-phone f_left color_dark"></i>
                                                <p class="contact_e">800-559-65-80</p>
                                            </div>
                                        </li>
                                        <li class="m_bottom_10">
                                            <div class="clearfix m_bottom_10">
                                                <i class="fa fa-envelope f_left color_dark"></i>
                                                <a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="clearfix">
                                                <i class="fa fa-clock-o f_left color_dark"></i>
                                                <p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
                                    <h2 class="tt_uppercase color_dark m_bottom_25">Gửi email liên hệ</h2>
                                    <p class="m_bottom_10">Send an email. All fields with an <span class="scheme_color">*</span> are required.</p>
                                    <form id="contactform">
                                        <ul>
                                            <li class="clearfix m_bottom_15">
                                                <div class="f_left half_column">
                                                    <label for="cf_name" class="required d_inline_b m_bottom_5">Họ và tên</label>
                                                    <input type="text" id="cf_name" name="cf_name" class="full_width r_corners">
                                                </div>
                                                <div class="f_left half_column">
                                                    <label for="cf_email" class="required d_inline_b m_bottom_5">Địa chỉ mail</label>
                                                    <input type="email" id="cf_email" name="cf_email" class="full_width r_corners">
                                                </div>
                                            </li>
                                            <li class="m_bottom_15">
                                                <label for="cf_subject" class="d_inline_b m_bottom_5">Tiêu đề</label>
                                                <input type="text" id="cf_subject" name="cf_subject" class="full_width r_corners">
                                            </li>
                                            <li class="m_bottom_15">
                                                <label for="cf_message" class="d_inline_b m_bottom_5 required">Nội dung</label>
                                                <textarea id="cf_message" name="cf_message" class="full_width r_corners"></textarea>
                                            </li>
                                            <li>
                                                <button class="tr_delay_hover r_corners button_type_14 bg_color_green color_light">Gửi</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!--right column-->
                        <aside class="col-lg-3 col-md-3 col-sm-3">
                            <!--widgets-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Categories</h3>
                                </figcaption>
                                <div class="widget_content">
                                    <!--Categories list-->
                                    <ul class="categories_list">
                                        <li class="active">
                                            <a href="#" class="f_size_large scheme_color d_block relative">
                                                <b>Women</b>
                                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                            <!--second level-->
                                            <ul>
                                                <li class="active">
                                                    <a href="#" class="d_block f_size_large color_dark relative">
                                                        Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                    </a>
                                                    <!--third level-->
                                                    <ul>
                                                        <li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
                                                        <li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
                                                        <li><a href="#" class="color_dark d_block">Party Dresses</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="d_block f_size_large color_dark relative">
                                                        Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d_block f_size_large color_dark relative">
                                                        Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="f_size_large color_dark d_block relative">
                                                <b>Men</b>
                                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                            <!--second level-->
                                            <ul class="d_none">
                                                <li>
                                                    <a href="#" class="d_block f_size_large color_dark relative">
                                                        Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                    </a>
                                                    <!--third level-->
                                                    <ul class="d_none">
                                                        <li><a href="#" class="color_dark d_block">Evening</a></li>
                                                        <li><a href="#" class="color_dark d_block">Casual</a></li>
                                                        <li><a href="#" class="color_dark d_block">Party</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="f_size_large color_dark d_block relative">
                                                <b>Kids</b>
                                                <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <!--compare products-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                <figcaption>
                                    <h3 class="color_light">Compare Products</h3>
                                </figcaption>
                                <div class="widget_content">
                                    You have no product to compare.
                                </div>
                            </figure>
                            <!--banner-->
                            <a href="#" class="d_block r_corners m_bottom_30">
                                <img src="images/banner_img_6.jpg" alt="">
                            </a>
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
        <div class="popup_wrap d_none" id="quick_view_product">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <div class="clearfix">
                    <div class="custom_scrollbar">
                        <!--left popup column-->
                        <div class="f_left half_column">
                            <div class="relative d_inline_b m_bottom_10 qv_preview">
                                <span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
                                <img src="images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
                            </div>
                            <!--carousel-->
                            <div class="relative qv_carousel_wrap m_bottom_20">
                                <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
                                    <i class="fa fa-angle-left "></i>
                                </button>
                                <ul class="qv_carousel d_inline_middle">
                                    <li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
                                    <li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
                                    <li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
                                    <li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
                                    <li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
                                    <li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
                                </ul>
                                <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
                                    <i class="fa fa-angle-right "></i>
                                </button>
                            </div>
                            <div class="d_inline_middle">Share this:</div>
                            <div class="d_inline_middle m_left_5">
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
                        <!--right popup column-->
                        <div class="f_right half_column">
                            <!--description-->
                            <h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
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
                                <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
                            </div>
                            <hr class="m_bottom_10 divider_type_3">
                            <table class="description_table m_bottom_10">
                                <tr>
                                    <td>Manufacturer:</td>
                                    <td><a href="#" class="color_dark">Chanel</a></td>
                                </tr>
                                <tr>
                                    <td>Availability:</td>
                                    <td><span class="color_green">in stock</span> 20 item(s)</td>
                                </tr>
                                <tr>
                                    <td>Product Code:</td>
                                    <td>PS06</td>
                                </tr>
                            </table>
                            <h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
                            <table class="description_table m_bottom_5">
                                <tr>
                                    <td>Product Length:</td>
                                    <td><span class="color_dark">10.0000M</span></td>
                                </tr>
                                <tr>
                                    <td>Product Weight:</td>
                                    <td>10.0000KG</td>
                                </tr>
                            </table>
                            <hr class="divider_type_3 m_bottom_10">
                            <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
                            <hr class="divider_type_3 m_bottom_15">
                            <div class="m_bottom_15">
                                <s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
                            </div>
                            <table class="description_table type_2 m_bottom_15">
                                <tr>
                                    <td class="v_align_m">Size:</td>
                                    <td class="v_align_m">
                                        <div class="custom_select f_size_medium relative d_inline_middle">
                                            <div class="select_title r_corners relative color_dark">s</div>
                                            <ul class="select_list d_none"></ul>
                                            <select name="product_name">
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v_align_m">Quantity:</td>
                                    <td class="v_align_m">
                                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                                            <button class="bg_tr d_block f_left" data-direction="down">-</button>
                                            <input type="text" name="" readonly value="1" class="f_left">
                                            <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="clearfix m_bottom_15">
                                <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--login popup-->
        @include('fontend.include.login')
        <button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
        <!--scripts include-->
       @include('fontend.include.script')
    </body>
</html>
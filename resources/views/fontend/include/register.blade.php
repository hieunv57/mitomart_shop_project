<div class="popup_wrap d_none" id="register_popup">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <h3 class="m_bottom_20 color_dark">Đăng ký tài khoản</h3>
                 <form class="register-form cf-style-1" role="form" method="POST" action="{{asset('dang-ky')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <ul>
                        <li class="m_bottom_15">
                            <label for="username" class="m_bottom_5 d_inline_b">Họ và tên</label><br>
                            <input type="text" name="name"  class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                            <label for="username" class="m_bottom_5 d_inline_b">Địa chỉ email</label><br>
                            <input type="email" name="email"  class="r_corners full_width">
                        </li>
                        <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Mật khẩu</label><br>
                            <input type="password" name="password" id="password" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Xác nhận mật khẩu</label><br>
                            <input type="password" name="password" id="password" class="r_corners full_width">
                        </li>
                         <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Số điện thoại</label><br>
                            <input type="number" name="phone"  class="r_corners full_width">
                        </li>
                        <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Địa chỉ</label><br>
                            <input type="text" name="password" id="password" class="r_corners full_width">
                        </li>
                    
                        <li class="clearfix m_bottom_30">
                            <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Đăng ký</button>
                            
                        </li>
                    </ul>
                </form>
            </section>
        </div>
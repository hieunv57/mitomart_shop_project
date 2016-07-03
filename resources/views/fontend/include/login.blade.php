<div class="popup_wrap d_none" id="login_popup">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <h3 class="m_bottom_20 color_dark">Đăng nhập</h3>
               
                    <a href="auth/facebook"><button type="submit "class="tr_delay_hover r_corners button_type_14 bg_color_green color_light">Facebook</button></a>
                     <a href="auth/google"><button type="submit "class="tr_delay_hover r_corners button_type_14 bg_color_green color_light">Google</button></a>
                <br>
                <hr>
                 <form class="register-form cf-style-1" role="form" method="POST" action="{{asset('dang-nhap')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <ul>
                        <li class="m_bottom_15">
                            <label for="username" class="m_bottom_5 d_inline_b">Địa chỉ email</label><br>
                            <input type="email" name="email" id="username" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Mật khẩu</label><br>
                            <input type="password" name="password" id="password" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                            <input type="checkbox" class="d_none" name="remember"id="checkbox_10"><label for="checkbox_10">Ghi nhớ tài khoản</label>
                        </li>
                        <li class="clearfix m_bottom_30">
                            <button type="submit "class="tr_delay_hover r_corners button_type_14 bg_color_green color_light">Đăng nhập</button>
                            <div class="f_right f_size_medium f_mxs_none">
                                <a href="#" class="color_dark">Quên mật khẩu?</a><br>
                            </div>
                        </li>
                    </ul>
                </form>
                <footer class="bg_light_color_1 t_mxs_align_c">
                    <a href="{{asset('dang-ky')}}" class="color_dark"><h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">Đăng ký tài khoản mới tại đây</h3></a>
                </footer>
            </section>
        </div>
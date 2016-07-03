        <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="{{asset(Auth::user()->avatar)}}" alt="" class="img-circle"/></div>
                        <div class="info"><p>{{ Auth::user()->name }}</p>
                            <ul class="list-inline list-unstyled">
                                <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                                <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a></li>
                                <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="active"><a href="{{asset('admin')}}"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li><a href="#"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Quản lý thành viên</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/thanh-vien/danh-sach')}}"><i class="fa fa-align-left"></i><span class="submenu-title">Danh sách thành viên</span></a></li>
                            <li><a href="{{asset('admin/thanh-vien/them-moi')}}"><i class="fa fa-angle-double-left"></i><span class="submenu-title">Thêm thành viên mới</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Quản lý danh mục sản phẩm</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/danh-muc/danh-sach')}}"><i class="fa fa-briefcase"></i><span class="submenu-title">Danh sách danh mục </span></a></li>
                            <li><a href="{{asset('admin/danh-muc/them-moi')}}"><i class="fa fa-th-large"></i><span class="submenu-title">Thêm mới danh mục</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Quản lý sản phẩm</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/san-pham/danh-sach')}}"><i class="fa fa-columns"></i><span class="submenu-title">Danh sách sản phẩm</span></a></li>
                            <li><a href="{{asset('admin/san-pham/them-moi')}}"><i class="fa fa-file-text-o"></i><span class="submenu-title">Thêm mới sản phẩm</span></a></li>
                            <li><a href="{{asset('admin/san-pham/them-moi-tu-file')}}"><i class="fa fa-file-text-o"></i><span class="submenu-title">Thêm mới sản phẩm từ file</span></a></li>
                        </ul>
                    </li>
                     <li><a href="#"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Quản lý đơn hàng</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/don-hang/danh-sach')}}"><i class="fa fa-columns"></i><span class="submenu-title">Danh sách đơn hàng</span></a></li>
                             <li><a href="{{asset('admin/don-hang/them-moi')}}"><i class="fa fa-columns"></i><span class="submenu-title">Thêm mới đơn hàng</span></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Quản lý khuyến mại</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="table-basic.html"><i class="fa fa-th-large"></i><span class="submenu-title">Danh sách chương trình khuyến mại</span></a></li>
                            <li><a href="table-responsive.html"><i class="fa fa-tablet"></i><span class="submenu-title">Thêm mới chương trình khuyến mại</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Quản lý ảnh slide</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="table-basic.html"><i class="fa fa-th-large"></i><span class="submenu-title">Cập nhật ảnh slide mới</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Quản lý tin bài</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/tin-tuc/danh-sach')}}"><i class="fa fa-suitcase"></i><span class="submenu-title">Danh sách các tin bài</span></a></li>
                            <li><a href="{{asset('admin/tin-tuc/them-moi')}}"><i class="fa fa-steam"></i><span class="submenu-title">Thêm mới tin bài</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
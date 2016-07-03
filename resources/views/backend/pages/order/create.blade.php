<!DOCTYPE html>
<html lang="en">
@include('backend.include.head')
<body>
<div><!--BEGIN THEME SETTING-->
    <!--END THEME SETTING--><!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    @include('backend.include.top')
    <!--END TOPBAR-->
    <div id="wrapper">
    <!--BEGIN SIDEBAR MENU-->
    @include('backend.include.slidebar')
<!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
                        <div class="page-content">
                <div id="table-action" class="row">
                    <div class="col-lg-12">
                        <ul id="tableactiondTab" class="nav nav-tabs">
                            <li class="active"><a href="#table-table-tab" data-toggle="tab">Thêm mới đơn hàng</a></li>
                        </ul>
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-table-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel-body pan">
                                                <form action="{{asset('admin/thanh-vien/them-moi')}}" method="POST" class="form-horizontal form-seperated">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-body">
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Tên khách hàng<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="username" type="text" placeholder="Họ và tên khách hàng" required="required" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Địa chỉ<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="address" type="text" placeholder="Địa chỉ nhận hàng" required="required" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Địa chỉ facebook<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="facebook" type="text" required="required" placeholder="Địa chỉ facebook của khách hàng" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Số điện thoại<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="phone" type="number" required="required" placeholder="Số điện thoại của khách hàng" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Sản phẩm<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="phone" type="number" required="required" placeholder="Tên sản phẩm khách hàng mua" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Số lượng sản phẩm<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="phone" type="number" required="required" placeholder="Số lượng sản phẩm khách hàng mua" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Tổng giá trị<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="phone" type="number" required="required" placeholder="Tổng giá trị đơn hàng" class="form-control"/></div>
                                                        </div>
                                                        <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Hình thức thanh toán<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="phone" type="number" required="required" placeholder="Hình thức thanh toán đơn hàng" class="form-control"/></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions text-center pal">
                                                        <button type="submit" class="btn btn-success">Thêm mới</button>
                                                        &nbsp;
                                                        <button type="reset" class="btn btn-primary">Hủy</button>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <!--END CONTENT--><!--BEGIN FOOTER-->
           <div id="footer">
                <div class="copyright">Trang quản trị website Mito Mart phiên bản 1.0</div>
            </div>
         </div>
     </div>
</div>
<script src="{{asset('public/backend/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('public/backend/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('public/backend/js/jquery-ui.js')}}"></script>
<!--loading bootstrap js-->
<script src="{{asset('public/backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{asset('public/backend/js/html5shiv.js')}}"></script>
<script src="{{asset('public/backend/js/respond.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('public/backend/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('public/backend/vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/iCheck/custom.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/jquery-news-ticker/jquery.news-ticker.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.menu.js')}}"></script>
<script src="{{asset('public/backend/vendors/jquery-pace/pace.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/holder/holder.js')}}"></script>
<script src="{{asset('public/backend/vendors/responsive-tabs/responsive-tabs.js')}}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{asset('public/backend/js/table-action.js')}}"></script>
<!--CORE JAVASCRIPT-->
<script src="{{asset('public/backend/js/main.js')}}"></script>
<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-12', 'auto');
ga('send', 'pageview');


</script>
</body>
</html>
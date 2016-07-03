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
                            <li class="active"><a href="#table-table-tab" data-toggle="tab">Danh sách đơn hàng</a></li>
                        </ul>
                                <div class="col-lg-12">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-{!! Session::get('flash_level') !!}">
                                            {!! Session::get('flash_message') !!}
                                        </div>
                                    @endif
                                </div>
                        <div id="tableactionTabContent" class="tab-content">
                        <div class="portlet-header pam mbn">
                            <div class="actions"><a href="{{asset('admin/don-hang/them-moi')}}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;
                                Thêm mới</a>&nbsp;
                            </div>
                        </div>

                            <div id="table-table-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                                <thead>
                                                <tr>
                                                    <th width="3%"><input type="checkbox" class="checkall"/></th>
                                                    <th width="5%">Mã</th>
                                                    <th width="13%">Tên khách hàng</th>
                                                    <!-- <th width="18%">Sản phẩm</th> -->
                                                    <!-- <th width="15%">Danh mục</th> -->
                                                    <th width="18%">Địa chỉ email</th>
                                                    <th width="13%">Địa chỉ facebook</th>
                                                    <th width="10%">Số điện thoại</th>
                                                    <th width="10%">Thời gian</th>
                                                    <th width="13%">Trạng thái</th>
                                                    <th width="13%">Hành động</th>
                                                </tr>
                                                <tbody>
                                                @foreach ($order as $item)
                                                <tr>
                                                    <td><input type="checkbox"/></td>
                                                    <td>{{ $item -> id }}</td>
                                                    <td>{{ $item->username }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->facebook }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <a href="{{url('admin/don-hang/xem/'.$item->id)}}" ><button type="button" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>&nbsp;
                                                            Xem
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                </thead>
                                            </table>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <div class="pagination-panel">
                                                        {!!$order -> render()!!}
                                                    </div>
                                                </div>
                                                <label class="col-sm-3">Tổng số: {{$total}} đơn hàng</label>
                                            </div>
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
<script>
    $("div.alert").delay(3000).slideUp();
</script>
</body>
</html>
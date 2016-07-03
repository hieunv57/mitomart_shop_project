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
                            <li class="active"><a href="#table-table-tab" data-toggle="tab">Danh sách thành viên</a></li>
                        </ul>
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-table-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                                <thead>
                                                <tr>
                                                    <th width="3%"><input type="checkbox" class="checkall"/></th>
                                                    <th width="5%">STT</th>
                                                    <th width="15%">Tên bài viết</th>
                                                    <th width="15%">Mô tả</th>
                                                    <th width="13%">Hành động</th>
                                                </tr>
                                                <tbody>
                                                @foreach ($news as $item)
                                                <tr>
                                                    <td><input type="checkbox"/></td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <a href="{{url('admin/tin-tuc/xem/'.$item->id)}}" ><button type="button" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>&nbsp;
                                                            Sửa
                                                        </button>
                                                        <a href="{{url('admin/tin-tuc/xoa/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete this item?')"> <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                                                            Xóa
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
                                                        {!!$news -> render()!!}
                                                    </div>
                                                </div>
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
                <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
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
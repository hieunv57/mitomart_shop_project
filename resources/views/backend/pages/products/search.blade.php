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
                            <li class="active"><a href="#table-table-tab" data-toggle="tab">Danh sách sản phẩm</a></li>
                            <form method="POST" class="form-horizontal form-label-left" action="{{asset('admin/san-pham/tim-kiem')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input class="form-control" name="search" value="" placeholder="Nhập tên hoặc id người dùng">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button> 
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            <div class="divider-dashed"></div>
                        </form>
                        </ul>
                         <form class="form-horizontal form-label-left" method="POST" action="{{asset('admin/danh-muc/san-pham')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <select name="category" class="form-control">
                                                    <option value="0">Xem tất cả</option>
                                                    <?php cate_parent($parent); ?>
                                                </select>
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">Xem</button> 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider-dashed"></div>
                                </form>
                                <div class="col-lg-12">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-{!! Session::get('flash_level') !!}">
                                            {!! Session::get('flash_message') !!}
                                        </div>
                                    @endif
                                </div>
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-table-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                                <thead>
                                                <tr>
                                                    <th width="3%"><input type="checkbox" class="checkall"/></th>
                                                    <th width="5%">ID</th>
                                                    <th width="15%">Tên sản phẩm</th>
                                                    <!-- <th width="15%">Danh mục</th> -->
                                                    <th width="18%">Giá</th>
                                                    <th width="10%">Số lượng</th>
                                                    <th width="13%">Hành động</th>
                                                </tr>
                                                <tbody>
                                                @foreach ($products as $item)
                                                <tr>
                                                    <td><input type="checkbox"/></td>
                                                    <td>{{ $item -> id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>
                                                        <a href="{{url('admin/san-pham/xem/'.$item->id)}}" ><button type="button" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>&nbsp;
                                                            Xem
                                                        </button>
                                                        <a href="{{url('admin/san-pham/xoa/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete this item?')"> <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
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
                                                        {!!$products -> render()!!}
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="col-sm-3">Tổng số: {{$total}} sản phẩm</label>
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
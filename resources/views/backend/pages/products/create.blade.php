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
                            <li class="active"><a href="#table-table-tab" data-toggle="tab">Thêm mới sản phẩm</a></li>
                        </ul>
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-table-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel-body pan">
                                                <form class="form-horizontal form-label-left"  method="POST" action="{{asset('admin/san-pham/them-moi')}}" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-body pal"><h3>Thông tin sản phẩm</h3>
                                                    @if(Session::has('flash_message'))
                                                                                    <div class="alert alert-{!! Session::get('flash_level') !!}">
                                                                                        {!! Session::get('flash_message') !!}
                                                                                    </div>
                                                                                @endif
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputFirstName" class="col-md-3 control-label">Tên sản phẩm<span class='require'>*</span></label>

                                                                    <div class="col-md-9"><input name="name" type="text" class="form-control" required/></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="selGender" class="col-md-3 control-label">Ảnh chính<span class='require'>*</span></label>

                                                                   <div class="col-md-9"><input  name="fImages" type="file" class="form-control" required/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Danh mục <span class='require'>*</span></label>

                                                                    <div class="col-md-9">
                                                                        
                                                                            <select name="category" class="form-control" required>
                                                                                <option value="">Chọn danh mục</option>
                                                                                <?php cate_parent($parent); ?>
                                                                            </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="selGender" class="col-md-3 control-label">Ảnh phụ 1</label>

                                                                   <div class="col-md-9"><input  name="fProductDetail[]" type="file" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                           <div class="col-md-6">
                                                                <div class="form-group"><label for="selGender" class="col-md-3 control-label">Giá sản phẩm<span class='require'>*</span></label>

                                                                   <div class="col-md-9"><input id="inputFirstName" name="price" type="number" class="form-control" required/></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputPhone" class="col-md-3 control-label">Ảnh phụ 2</label>

                                                                    <div class="col-md-9"><input name="fProductDetail[]" type="file" placeholder="" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="col-md-3 control-label">Giảm giá</label>

                                                                    <div class="col-md-9"><input name="discount" type="number" placeholder="" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label  class="col-md-3 control-label">Ảnh phụ 3</label>
                                                                    <div class="col-md-9"><input name="fProductDetail[]" type="file" placeholder="" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputStates" class="col-md-3 control-label">Chất liệu</label>

                                                                    <div class="col-md-9"><input id="inputStates" name="material"type="text" placeholder="" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputCity" class="col-md-3 control-label">Ảnh phụ 4</label>

                                                                    <div class="col-md-9"><input name="fProductDetail[]" type="file" placeholder="" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputPostCode" class="col-md-3 control-label">Số lượng</label>

                                                                    <div class="col-md-9"><input  name="quantity" type="number" placeholder="" class="form-control" required/></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputCity" class="col-md-3 control-label">Ảnh phụ 5</label>

                                                                    <div class="col-md-9"><input name="fProductDetail[]" type="file" placeholder="" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputPostCode" class="col-md-3 control-label">Chiều dài</label>

                                                                    <div class="col-md-9"><input  name="height" type="number" placeholder="cm" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="inputCity" class="col-md-3 control-label">Chiều rộng</label>

                                                                    <div class="col-md-9"><input name="width" type="number" placeholder="cm" class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3>Mô tả sản phẩm</h3>
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group"><label for="inputPostCode" class="col-md-3 control-label">Link giới thiệu</label>

                                                                    <div class="col-md-9"><input  name="linkpreview" type="text" placeholder="https://www.youtube.com/embed/..." class="form-control"/></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group"><textarea rows="3" id="editor1" name="description"class="form-control">Thông tin sản phẩm</textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions text-right pal">
                                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                                        &nbsp;
                                                        <button type="reset" class="btn btn-green">Hủy</button>
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
<script type="text/javascript">
    CKEDITOR.replace( 'editor1',
    {
        filebrowserBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Connector=http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
        filebrowserImageBrowseUrl : 'js/ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector=http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
        filebrowserFlashBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector=http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
        filebrowserUploadUrl  :'http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
        filebrowserImageUploadUrl : 'http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
        filebrowserFlashUploadUrl : 'http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
    });
</script>
</script><script>
    $("div.alert").delay(3000).slideUp();
</script>
</body>
</html>
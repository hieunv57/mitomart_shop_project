<!DOCTYPE html>
<html lang="en">
@extends('fontend.include.head')
    @section('title')
        Đổi mật khẩu
    @stop
<body>
    
    <div class="wrapper">
        <!-- ============================================================= TOP NAVIGATION ============================================================= -->
@include('fontend.include.top')
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->       <!-- ============================================================= HEADER ============================================================= -->
@include('fontend.include.header')
<!-- ============================================================= HEADER : END ============================================================= -->       <!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <section class="section sign-in inner-right-xs">
                    <h2 class="bordered">Đổi mật khẩu</h2>
                    @if (session('doi-mat-khau'))
                        <div class="alert alert-success">
                            {{ session('doi-mat-khau') }}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Lỗi</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                   <form class="register-form cf-style-1" role="form" method="POST" action="{{asset('doi-mat-khau')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="field-row">
                            <label>Mật khẩu cũ</label>
                            <input type="password" class="le-input" name="oldPassword" required placeholder="Old Password">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Mât khẩu mới</label>
                            <input type="password" class="le-input" name="password" required placeholder="New Password">
                        </div><!-- /.field-row -->
                        <div class="field-row">
                            <label>Xác nhận mât khẩu mới</label>
                            <input type="password" class="le-input" required name="password_confirmation" placeholder="Confirm New Password">
                        </div><!-- /.field-row -->

                        <div class="field-row clearfix">
                            <span class="pull-right">
                                <a href="{{asset('dat-lai-mat-khau')}}" class="content-color bold">Quên mật khẩu ?</a>
                            </span>
                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Xác nhận</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.cf-style-1 -->

                </section><!-- /.sign-in -->
            </div><!-- /.col -->


        </div><!-- /.row -->
    </div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->     <!-- ============================================================= FOOTER ============================================================= -->
@include('fontend.include.footer')
@include('fontend.include.script')
<script>
    $("div.alert").delay(3000).slideUp();
</script>

</body>
<script src="http://uhchat.net/code.php?f=465c29"></script>
</html>
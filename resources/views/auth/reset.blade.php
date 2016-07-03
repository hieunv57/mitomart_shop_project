<!DOCTYPE html>
<html lang="en">
@include('fontend.include.head')
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
                    <h2 class="bordered">Lấy lại mật khẩu</h2>
                    @if (session('lay-lai-mat-khau'))
                        <div class="alert alert-success">
                            {{ session('lay-lai-mat-khau') }}
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
                   <form class="register-form cf-style-1" role="form" method="POST" action="{{ url('/password/reset') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="field-row">
                            <label>Địa chỉ email</label>
                            <input type="email" class="le-input" name="email" required placeholder="Email address" value="{{ old('email') }}">
                        </div><!-- /.field-row -->
                         <div class="field-row">
                            <label>Mật khẩu mới</label>
                            <input type="password" class="le-input" name="password" required placeholder="Email address" value="{{ old('email') }}">
                        </div>
                         <div class="field-row">
                            <label>Xác nhận mật khẩu mới</label>
                            <input type="password" class="le-input" name="password_confirmation" required placeholder="Email address" value="{{ old('email') }}">
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
</html>
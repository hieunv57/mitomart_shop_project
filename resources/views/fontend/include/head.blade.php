<head>
        <link rel="icon" href="https://www.mobileiron.com/sites/default/files/company/brand/MobileIron-Planet-M.png">
         <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--meta info-->
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="icon" type="image/ico" href="images/fav.ico">
        <!--stylesheet include-->
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/camera.css')}}">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/owl.transitions.css')}}">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/jquery.custom-scrollbar.css')}}">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/style.css')}}">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/home/css/mycss.css')}}">
        <!--font include-->
        <link href="{{asset('public/home/css/font-awesome.min.css')}}" rel="stylesheet">
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1726407527634394',
              xfbml      : true,
              version    : 'v2.6'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
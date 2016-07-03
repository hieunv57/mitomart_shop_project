<!DOCTYPE html>
<html lang="en">
@include('backend.include.head')
<body>
<div><!--BEGIN THEME SETTING-->

    <!--END THEME SETTING--><!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    @include('backend.include.top')
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
       @include('backend.include.slidebar'))
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->
        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Dashboard</li>
                </ol>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div id="tab-general">
                    <div id="sum_box" class="row mbl">
                        <div class="col-sm-6 col-md-3">
                            <div class="panel profit db mbm">
                                <div class="panel-body"><p class="icon"><i class="icon fa fa-shopping-cart"></i></p><h4 class="value"><span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0"></span><span>$</span></h4>

                                    <p class="description">Profit description</p>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success"><span class="sr-only">80% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel income db mbm">
                                <div class="panel-body"><p class="icon"><i class="icon fa fa-money"></i></p><h4 class="value"><span>215</span><span>$</span></h4>

                                    <p class="description">Income detail</p>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-info"><span class="sr-only">60% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel task db mbm">
                                <div class="panel-body"><p class="icon"><i class="icon fa fa-signal"></i></p><h4 class="value"><span>215</span></h4>

                                    <p class="description">Task completed</p>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-danger"><span class="sr-only">50% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel visit db mbm">
                                <div class="panel-body"><p class="icon"><i class="icon fa fa-group"></i></p><h4 class="value"><span>128</span></h4>

                                    <p class="description">Visitor description</p>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar progress-bar-warning"><span class="sr-only">70% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mbl">
                        <div class="col-lg-8">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8"><h4 class="mbs">Network Performance</h4>

                                            <p class="help-block">Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>

                                            <div id="area-chart-spline" style="width: 100%; height:300px"></div>
                                        </div>
                                        <div class="col-md-4"><h4 class="mbm">Server Status</h4><span class="task-item">CPU Usage (25 - 32 cpus)<small class="pull-right text-muted">40%</small><div class="progress progress-sm">
                                            <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-orange"><span class="sr-only">40% Complete (success)</span></div>
                                        </div></span><span>Memory Usage (2.5GB)<small class="pull-right text-muted">60%</small><div class="progress progress-sm">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-blue"><span class="sr-only">60% Complete (success)</span></div>
                                        </div></span><span>Disk Usage (C:\ 120GB , D:\ 430GB)<small class="pull-right text-muted">55%</small><div class="progress progress-sm">
                                            <div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;" class="progress-bar progress-bar-green"><span class="sr-only">55% Complete (success)</span></div>
                                        </div></span><span>Domain (2/5)<small class="pull-right text-muted">66%</small><div class="progress progress-sm">
                                            <div role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;" class="progress-bar progress-bar-yellow"><span class="sr-only">66% Complete (success)</span></div>
                                        </div></span><span>Database (90/100)<small class="pull-right text-muted">90%</small><div class="progress progress-sm">
                                            <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar progress-bar-pink"><span class="sr-only">90% Complete (success)</span></div>
                                        </div></span><span>Email Account (25/50)<small class="pull-right text-muted">50%</small><div class="progress progress-sm">
                                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-violet"><span class="sr-only">50% Complete (success)</span></div>
                                        </div></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="portlet box">
                                <div class="portlet-header">
                                    <div class="caption">Chats</div>
                                </div>
                                <div class="portlet-body">
                                    <div class="chat-scroller">
                                        <ul class="chats">
                                            <li class="in"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" class="avatar img-responsive"/>

                                                <div class="message"><span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                            </li>
                                            <li class="out"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" class="avatar img-responsive"/>

                                                <div class="message"><span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span class="chat-datetime">at July 06, 2014 18:06</span><span class="chat-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                            </li>
                                            <li class="in"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" class="avatar img-responsive"/>

                                                <div class="message"><span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                            </li>
                                            <li class="out"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" class="avatar img-responsive"/>

                                                <div class="message"><span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span class="chat-datetime">at July 06, 2014 18:06</span><span class="chat-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                            </li>
                                            <li class="in"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" class="avatar img-responsive"/>

                                                <div class="message"><span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-form">
                                        <div class="input-group"><input id="input-chat" type="text" placeholder="Type a message here..." class="form-control"/><span id="btn-chat" class="input-group-btn"><button type="button" class="btn btn-green"><i class="fa fa-check"></i></button></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--END CONTENT--><!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
            </div>
            <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
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
<script src="{{asset('public/backend/vendors/intro.js/intro.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.categories.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('public/backend/vendors/flot-chart/jquery.flot.spline.js')}}"></script>
<script src="{{asset('public/backend/vendors/calendar/zabuto_calendar.min.js')}}"></script>
<script src="{{asset('public/backend/js/index.js')}}"></script>
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
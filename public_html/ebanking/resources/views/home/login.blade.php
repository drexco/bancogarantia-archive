<!DOCTYPE html>
  <html ng-app="nwa-merlin-login">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
        <link rel="stylesheet" href="assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css">
        <link rel="stylesheet" href="assets/js/plugins/dropzonejs/dropzone.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/core/sitev4.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Page Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/js/pages/base_pages_login.js"></script>
      </head>

      <body>
        <!-- Login Content -->
        <div class="bg-white">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- Login Title -->
                            <div class="text-center">
                                <img src="assets/img/logo10.png" width="60" alt="">
                                <h1 class="h3 push-10-t">sign In</h1>
                            </div>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            {{ Form::open(array('url' => '/login', 'method'=>'post','role'=>'form','class'=>'js-validation-login form-horizontal push-30-t')) }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                          {{ Form::text('username','',array('class'=>'form-control', 'id'=>'username', 'name'=>'username')) }}
                                            <label for="login-username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                          {{ Form::password('password',array('class'=>'form-control', 'id'=>'password', 'name'=>'password')) }}
                                            <label for="login-password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="/login/password-recovery">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i>Sign in</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-xs-12">
                                    @if(Session::get('login_message'))
                                      {{Session::get('login_message')}}
                                    @endif
                                  </div>
                                </div>
                            {{ Form::close() }}
                            <!-- END Login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div align="center"><img src="/assets/img/logostrip.png" width="50%" alt=""/></div></div>
                <div class="pull-right">
                  <a href="/privacy-policy">Privacy Policy</a> &nbsp; &nbsp; <a href="/terms-and-conditions">Terms of Service</a> &nbsp; &nbsp; <a href="/anti-money-policy">Anti-Money Laundering</a></span>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank"> </a>{{date('Y')}}, &copy; Banco Garantia, A subsidiary of Credit Suisse AG.<span class="js-year-copy"></span>
                </div>
            </footer>
            <!-- END Footer -->
      </body>
    </html>
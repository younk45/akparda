<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Geomoto Media & Technology Template Identity">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>LOGIN AREA | AKPARDA </title>
        <!--/ END META SECTION -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="assets/admin/css/reset.css" rel="stylesheet">
        <link href="assets/admin/css/layout.css" rel="stylesheet">
        <link href="assets/admin/css/components.css" rel="stylesheet">
        <link href="assets/admin/css/plugins.css" rel="stylesheet">
        <link href="assets/admin/css/themes/blue.theme.css" rel="stylesheet" id="theme">
        <link href="assets/admin/css/pages/sign-type-2.css" rel="stylesheet">
        <link href="assets/admin/css/custom.css" rel="stylesheet">

        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
        <![endif]-->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

    <body class="page-backstretch">

        <!-- START @SIGN WRAPPER -->
        <div id="sign-wrapper">

            <!-- Brand -->
            <div class="brand">
                <img src="img/logo-akparda.png" style="width:250px;" alt="brand logo"/>
            </div>
            <!--/ Brand -->

            <!-- Login form -->
            <form class="sign-in form-horizontal shadow no-overflow" action="login_script.php" method="POST">
                <div class="sign-header">
                    <div class="form-group">
                        <div class="sign-text">
                            <span>Login Area</span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-header -->
                <div class="sign-body">
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control input-sm" placeholder="Username" name="username" value="">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="password" class="form-control input-sm" placeholder="Password" name="password" value="">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-body -->
                <div class="sign-footer">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="ckbox ckbox-theme">
                                    <input id="rememberme" type="checkbox">
                                    <label for="rememberme" class="rounded">Remember me</label>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="lost-password.html" title="lost password">Lost password?</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block no-margin" id="login-btn">LOGIN</button>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-footer -->
            </form><!-- /.form-horizontal -->
            <!--/ Login form -->

            <!-- Content text -->
            <p class="text-muted text-center sign-link">Powered By <a href="https://www.facebook.com/younk45" target="_blank" style="color: #000;"> Buyung Hariyanto</a></p>
            <!--/ Content text -->

        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->
        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <script src="assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
        <script src="assets/global/plugins/bower_components/retina.js/dist/retina.min.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-backstretch/jquery.backstretch.min.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="assets/admin/js/pages/blankon.sign.js"></script>
        <script src="assets/admin/js/pages/project-management/blankon.project.management.sign.js"></script>

        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

    </body>
    <!-- END BODY -->

</html>
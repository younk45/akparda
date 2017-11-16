<!DOCTYPE html>
    <html lang="en"> 
    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Hariyanto Buyung">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>AKPARDA</title>
        <!--/ END META SECTION -->
        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
        <!--/ END FONT STYLES -->
        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->
        <!-- START @PAGE LEVEL STYLES -->
        <link href="assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <!-- <link href="assets/global/plugins/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet"> -->
        <link href="assets/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
        <!-- <link href="assets/global/plugins/bower_components/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->
        <!-- <link href="assets/admin/css/pages/dashboard-real-estate.css" rel="stylesheet"> -->
        <link href="assets/global/plugins/bower_components/chosen_v1.2.0/chosen.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/bootstrap-datepicker-vitalets/css/datepicker.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <!-- <link href="assets/global/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->
        <link href="assets/global/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">

        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="assets/global/plugins/bower_components/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <link href="assets/admin/css/reset.css" rel="stylesheet">
        <link href="assets/admin/css/layout.css" rel="stylesheet">
        <link href="assets/admin/css/components.css" rel="stylesheet">
        <link href="assets/admin/css/plugins.css" rel="stylesheet">
        <link href="assets/admin/css/themes/blue.theme.css" rel="stylesheet" id="theme">
        <link href="assets/admin/css/pages/timeline.css" rel="stylesheet">
        <link href="assets/admin/css/custom.css" rel="stylesheet">


        <!--/ END THEME STYLES -->

        <!-- IE Suport -->
        <script src="assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
    </head>
    <!--/ END HEAD -->

    <body class="page-header-fixed page-sidebar-fixed page-footer-fixed">

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <header id="header">

                <!-- Start header left -->
                <div class="header-left">
                    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile left">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header">

                        <!-- Start brand -->
                        <a class="navbar-brand" href="admin.php?page=home">
                            <strong>AKPARDA</strong>
                        </a><!-- /.navbar-brand -->
                        <!--/ End brand -->

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->
                    <div class="clearfix"></div>
                </div><!-- /.header-left -->
                <!--/ End header left -->

                <!-- Start header right -->
                <div class="header-right">
                    <!-- Start navbar toolbar -->
                    <div class="navbar navbar-toolbar navbar-primary" style="height: 51px;">

                        <!-- Start left navigation -->
                        <ul class="nav navbar-nav navbar-left">

                            <!-- Start sidebar shrink -->
                            <li class="navbar-minimize">
                                <a href="javascript:void();" title="Minimize sidebar">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <!--/ End sidebar shrink -->
                            <li class="navbar-search">
                            <!-- Just view on mobile screen-->
                                <h4 style="margin: 15px;"><strong>AKADEMI PARIWISATA DHARMA NUSANTARA SAKTI</strong></h4>
                            </li>
                        </ul><!-- /.nav navbar-nav navbar-left -->
                        <!--/ End left navigation -->

                        <!-- Start right navigation -->
                        <ul class="nav navbar-nav navbar-right" style="margin-right: 5px;"><!-- /.nav navbar-nav navbar-right -->
                            <a href="index.php" class="btn btn-info btn-slideright navbar-btn pull-right">Keluar Aplikasi <i class="icon-arrow-right-circle icons"></i></a>
                        </ul>
                    </div><!-- /.navbar-toolbar -->
                </div><!-- /.header-right -->
            </header> <!-- /#header -->
            
            <aside id="sidebar-left" class="sidebar-circle sidebar-light">
                <?php include 'sidebar.php';?>
            </aside><!-- /#sidebar-left -->
            <!--/ end menu sidebar -->

            <!-- body content start -->
            <section id="page-content">
                <?php if(!isset($_GET['page'])) $_GET['page'] = 0;?>
                <?php
                    if ($_GET['page']) {
                        require_once 'pages/admin/'.$_GET['page'] . '.php';
                    } else {
                        require_once 'pages/admin/home.php';
                    }
                ?>
                <footer class="footer-content">
                    <span id="copyright-year"></span> &copy; Portal AKPARDA. Created by Hariyanto Buyung
                    <!-- <span class="pull-right">Template Identity</span> -->
                </footer>
            </section>

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery.sparkline.min/index.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        
        <script src="assets/global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="assets/global/plugins/bower_components/jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js"></script>
        <script src="assets/global/plugins/bower_components/holderjs/holder.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-autosize/jquery.autosize.min.js"></script>
        <!-- <script src="assets/admin/js/pages/blankon.form.picker.js"></script> -->
        <script src="assets/global/plugins/bower_components/bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js"></script>
        <script src="assets/global/plugins/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/global/plugins/bower_components/moment/min/moment.min.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="assets/admin/js/apps.js"></script>
        <!-- <script src="assets/admin/js/pages/ecommerce/blankon.ecommerce.dashboard.js"></script> -->
        <script src="assets/admin/js/demo.js"></script>
        <script src="assets/admin/js/pages/blankon.form.element.js"></script>
        <!-- <script src="assets/admin/js/pages/blankon.form.picker.js"></script> -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
</html>

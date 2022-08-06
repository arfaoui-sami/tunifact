<?php
require("globals.php");
define('title_show_pages','Panneau de contrôle');
define('this_script','loginpage');
define('this_current_page','login_page_define');
if(ulv<1){
 echo'<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>'.site_title.'</title>
        <meta name="description" content="'.site_title.'">
        <meta name="author" content="911 Prod">
        <meta name="robots" content="noindex, nofollow">
        <!-- Open Graph Meta -->
        <meta property="og:title" content="'.site_title.'">
        <meta property="og:site_name" content="'.site_title.'">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
		
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="'.path_img_admin_files.'/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="'.path_img_admin_files.'/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="'.path_img_admin_files.'/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="'.path_assets_files.'/css/dashmix.min.css">

		 <link rel="stylesheet" id="css-theme" href="'.path_assets_files.'/css/themes/xplay.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>

        <div id="page-container" class="'.lang_rtl_support.'">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url(\''.path_img_admin_files.'/bg/bg.jpg\');">
                    <div class="row no-gutters bg-primary-op">
                        <!-- Main Section -->
                        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                            <div class="p-3 w-100">
                                <!-- Header -->
                                <div class="mb-3 text-center">
                                    <a class="link-fx font-w700 font-size-h1" href="index.html">
                                        <span class="text-dark">Tuni</span><span class="text-primary">Fact</span>
                                    </a>
                                    <p class="text-uppercase font-w700 font-size-sm text-muted">'.lang_login.'</p>';
									if(type=="login"){
										echo'
									<p class="text-danger">'.lang_login_erreur.'</p>';
									}
									echo'
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-sm-8 col-xl-6">
                                        <form class="js-validation-signin" action="?type=login" method="POST">
                                            <div class="py-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="loginUserNames" placeholder="'.lang_login_username.'">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="loginUserPasss" placeholder="'.lang_login_password.'">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> '.lang_login_sendbutton.'
                                                </button>
                                             
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                        <!-- END Main Section -->

                        <!-- Meta Info Section -->
                        <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                            <div class="p-3">
                                <p class="display-4 font-w700 text-white mb-3">
                                    '.lang_login_welcome_login.'
                                </p>
                                <p class="font-size-lg font-w600 text-white-75 mb-0">
                                    '.lang_login_copyright.' </span>
                                </p>
                            </div>
                        </div>
                        <!-- END Meta Info Section -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->


        <script src="'.path_assets_files.'/js/dashmix.core.min.js"></script>

        <script src="'.path_assets_files.'/js/dashmix.app.min.js"></script>

        <script src="'.path_assets_files.'/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <script src="'.path_assets_files.'/js/pages/op_auth_signin.min.js"></script>
    </body>
</html>
';
}else{
$tmp->goToUrl("index.php");
}

?>
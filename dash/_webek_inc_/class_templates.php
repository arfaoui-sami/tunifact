<?php
/**********************************************************
SoumaCar V 1.0
Powred By Hidoussi Med Ayoub
Copyright © 2017 Hidoussi. All Rights Reserved
----------------------------------------------------------------------------------
File Name : globals.php
Description : Class File
----------------------------------------------------------------------------------
If you want any support
E-mail : hmatest@gmail.com/
***********************************************************/

/* Security */
if (!defined('#Th!s@S3cui*ty|Log')) {
    die("Error: Page Not Found");
}



class tmp{
	var $db;

	
	function homepage_ar(){
			global $db;
			$status_topic = $db->get("articles","status",id);
				if(this_current_page=="author"){
			$status_user = $db->get("users","status",id);
			$showname_user = $db->get("users","showname",id);
			}
		if(this_current_page=="articles"){
			if($status_topic ==1){
			$title_page = "| ".$db->get("articles","title",id);
			}else if ($status_topic !=4 and ulv > 0){
			$title_page = "| ".$db->get("articles","title",id);
			}
		}
		if(this_current_page=="cat"){
			$status = $db->get("cat","status",id);
			$title	 = $db->get("cat","title",id);

			if($status ==1){
			$title_page = "| ".$db->get("cat","title",id);
			}else if ($status_topic !=4 and ulv > 0){
			$title_page = "| ".$db->get("cat","title",id);
			}
		}
		if(this_current_page=="report"){
						$title_page = "| ".lang_menu_report;
		}
		if(this_current_page=="contactus"){
						$title_page = "| ".lang_menu_contact;
		}
		if(this_current_page=="method_ar"){
						$title_page = "| المنهجية ";
		}
		if(this_current_page=="author"){
			
			if($status_user !=1 and ulv < 1 or (ulv > 0 and $name == "none") or id ==1){
						$title_page = "";
			}else{
						$title_page = "| ".$showname_user;
			}
			
		}
		echo'<!DOCTYPE html>
<html class="no-js" lang="ar-tn" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>'.site_title.''.$title_page.'</title>    
	<meta name="description" content="'.this_current_page.'">';
	if(this_current_page==""){
	echo'
    <meta name="description" content="'.site_description.'">';
	}
	if(this_current_page=="articles"){
	echo'
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="'.site_keywords.'" />
	<meta name="news_keywords" content="'.$this->keywords_check($db->get("articles","keywords",id)).'" />
	<meta name="description" content="'.$db->get("articles","introduction",id).'" />
	<meta name="robots" content="index, follow" />
	<meta name="language" content="ar" />
	<meta https-equiv="refresh" content="3600" />
	<link rel="amphtml" href="'.$this->get_articles_url(id).'" />
	<link rel="canonical" href="'.$this->get_articles_url(id).'" />
	<meta property="og:locale" content="ar_AR" />
	<meta property="og:title" content="'.$db->get("articles","title",id).'" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="'.$this->get_articles_url(id).'" />
	<meta property="og:image" content="'.website_path.str_replace('../','',$db->get("articles","up_folder",id)).''.$db->get("articles","urllink",id).'" />
	<meta property="og:site_name" content="'.site_title	.'" />
	<meta property="og:description" content="'.$db->get("articles","introduction",id).'" />
	<meta property="article:publisher" content="https://www.facebook.com/Tunifact" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="'.$db->get("articles","introduction",id).'" />
	<meta name="twitter:title" content="'.$db->get("articles","title",id).'" />
	<meta name="twitter:site" content="@TuniFactTn" />
	<meta name="twitter:image" content="'.website_path.str_replace('../','',$db->get("articles","up_folder",id)).''.$db->get("articles","urllink",id).'" />
	<meta name="twitter:creator" content="@TuniFactTn" />
	<meta property="fb:pages" content="101833218728378" />';
	}else{
		echo'
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="'.site_keywords.'" />
	<meta name="description" content="'.site_description.'" />
	<meta name="robots" content="index, follow" />
	<meta name="language" content="ar" />
	<meta https-equiv="refresh" content="3600" />
	<link rel="amphtml" href="'.website_path.'" />
	<link rel="canonical" href="'.website_path.'" />
	<meta property="og:locale" content="ar_AR" />
	<meta property="og:title" content="'.site_title.'" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="'.website_path.'" />
	<meta property="og:image" content="https://tunifacts.org/assets/imgs/LogoSite.jpg" />
	<meta property="og:site_name" content="'.site_title	.'" />
	<meta property="og:description" content="'.site_description.'" />
	<meta property="article:publisher" content="https://www.facebook.com/Tunifact" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="'.site_description.'" />
	<meta name="twitter:title" content="'.site_title.'" />
	<meta name="twitter:site" content="@TuniFactTn" />
	<meta name="twitter:image" content="https://tunifacts.org/assets/imgs/LogoSite.jpg" />
	<meta name="twitter:creator" content="@TuniFactTn" />
	<meta property="fb:pages" content="101833218728378" />';	
	}
	echo'
    <link rel="shortcut icon" type="image/x-icon" href="'.website_path.'assets/imgs/favicon.png">
    <link rel="stylesheet" href="'.website_path.'assets/css/style.css?x=x911Tnx4">
    <link rel="stylesheet" href="'.website_path.'assets/css/widgets.css?x=x911Tnx4">
    <link rel="stylesheet" href="'.website_path.'assets/css/color.css?x=x911Tnx4">
    <link rel="stylesheet" href="'.website_path.'assets/css/responsive.css?x=x911Tnx4">
</head>

<body>
   <div dir="rtl" > <div class="scroll-progress primary-bg" ></div></div>
    <!--
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div data-loader="spinner"></div>
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
	  -->
	 
    <div class="main-wrap">
        <!--Offcanvas sidebar-->
        <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar"></aside>
        <!-- Main Wrap Start -->
        <header class="main-header header-style-1">
            <div class="top-bar pt-10 pb-10 background-white d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            
                                <ul class="header-social-network d-inline-block list-inline">
                                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="https://www.facebook.com/Tunifact"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="https://twitter.com/TuniFactTn"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="https://www.instagram.com/tunifact/"><i class="ti-instagram"></i></a></li>
                            </ul>
                            <div class="vline-space d-inline-block"></div>
                          
                        </div>
                        <div class="col-6 text-right">
                      <div class="language d-inline-block font-small">
                               ';
					  if(page_lang=="fr"){
						  echo'
                                <div id="langMenuDropdow" class="dropdown-menu dropdown-menu-left" aria-labelledby="langMenu">
                                    <a class="dropdown-item" href="'.website_path.'/">العربية <img src="'.website_path.'assets/imgs/tn.png" height="25"></a>
                                </div>
                                <a class="dropdown-toggle" href="#" role="button" id="langMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-world mr-5"></i>
                                    <span>Français <img src="'.website_path.'assets/imgs/fr.png"  height="25"></span>
                                </a>
                           ';
						}else{
						  echo'
                                <div id="langMenuDropdow" class="dropdown-menu dropdown-menu-left" aria-labelledby="langMenu">
                                    <a class="dropdown-item" href="'.website_path.'fr/">Français <img src="'.website_path.'assets/imgs/fr.png" height="25"></a>
                                </div>
                                <a class="dropdown-toggle" href="#" role="button" id="langMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-world mr-5"></i>
                                    <span>العربية <img src="'.website_path.'assets/imgs/tn.png"  height="25"></span>
                                </a>
                           ';
						}
							echo'
                       </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End top bar-->
            <div class="header-logo background-paper text-center pt-40 pb-40 d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="'.website_path.'">
                                <img class="logo-img d-inline" src="'.website_path.'assets/imgs/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End logo-->
            <div class="header-bottom header-sticky background-white text-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="off-canvas-toggle-cover" id="content-mobile">';
							if(page_lang!="fr"){
								echo'
                             <a class="dropdown-item ar_text" href="'.website_path.'fr/">Français <img src="'.website_path.'assets/imgs/fr.png" height="20"></a>';
							 }

							 else{
								echo'
                             <a class="dropdown-item ar_text" href="'.website_path.'">العربية <img src="'.website_path.'assets/imgs/tn.png" height="20"></a>';
							 }
echo'

                            </div>
                            <div class="logo-tablet d-md-inline d-lg-none d-none">
                                <a href="'.website_path.'">
                                    <img class="logo-img d-inline" src="'.website_path.'assets/imgs/logo-tablet.png" alt="">
                                </a>
                            </div>
                            <div class="logo-mobile d-inline d-md-none">
                                <a href="'.website_path.'">
                                    <img class="logo-img d-inline" src="'.website_path.'assets/imgs/logo-mobile.png" alt="">
                                </a>
                            </div>';
							if(page_lang=="fr"){
							
												echo'
                            <!-- Main-menu -->
                            <div class="main-nav text-center d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="main-menu">
									 <li><a href="'.website_path.'fr/">Acceuil</a></li>
                                        <li><a href="'.website_path.'methodologie/">Méthodologie</a></li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Fact Checking&nbsp; </a>
                                            <ul class="sub-menu" style="text-align: left">
                                                <li><a href="'.$this->get_cat_url(9).'">Déclarations</a></li>
                                                <li><a href="'.$this->get_cat_url(10).'">Photos</a></li>
                                                <li><a href="'.$this->get_cat_url(11).'">Vidéos </a></li>
											 <li><a href="'.$this->get_cat_url(12).'">News</a></li>
											 <li><a href="'.$this->get_cat_url(13).'">erreurs journalistiques </a></li>

                                            </ul>
                                        </li>
										<li class="menu-item-has-children">
                                            <a href="#">Articles Divers&nbsp; </a>
                                            <ul class="sub-menu" style="text-align: left">
											<li><a href="'.$this->get_cat_url(14).'">Explicatif et Data</a></li>


                                            </ul>
                                        </li>
									
										<li><a href="'.website_path.'report/">Signaler</a></li>

								
                                    </ul>
                                </nav>
                            </div>';
								}else{
								echo'
                            <!-- Main-menu -->
                            <div class="main-nav text-center d-none d-lg-block" dir="rtl">
                                <nav>
                                    <ul id="navigation" class="main-menu">
									 <li><a href="'.website_path.'">الرئيسية</a></li>
                                        <li><a href="'.website_path.'methodology/">المنهجية</a></li>

                                        <li class="menu-item-has-children">
                                            <a href="#">صحافة التحري&nbsp; </a>
                                            <ul class="sub-menu">
                                                <li><a href="'.$this->get_cat_url(1).'">التصريحات</a></li>
                                                <li><a href="'.$this->get_cat_url(2).'">الأخبار</a></li>
                                                <li><a href="'.$this->get_cat_url(3).'">الصور</a></li>
												<li><a href="'.$this->get_cat_url(4).'">الفيديوهات</a></li>
												<li><a href="'.$this->get_cat_url(5).'">الأخطاء الصحفية</a></li>

                                            </ul>
                                        </li>
										<li class="menu-item-has-children">
                                            <a href="#">صحافة التفسير والبيانات&nbsp; </a>
                                            <ul class="sub-menu">
                                                <li><a href="'.$this->get_cat_url(6).'">صحافة التفسير</a></li>
                                                <li><a href="'.$this->get_cat_url(7).'">صحافة البيانات </a></li>
                                            </ul>
                                        </li>
										<li><a href="'.website_path.'education/">الحقيبة التعليمية</a></li>
										<li><a href="'.website_path.'report/">الإبلاغ</a></li>

								
                                    </ul>
                                </nav>
                            </div>';
							
									
										}
									echo'
                            <!-- Search -->
                            <div class="search-button">
                                <button class="search-icon"><i class="ti-search"></i></button>
                                <span class="search-close float-right font-small"><i class="ti-close mr-5"></i></span>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="position-relative pt-40 background12">
            <!--Search Form-->
            <div class="main-search-form transition-02s">
                <div class="container">
                    <div class="pt-10 pb-50 main-search-form-cover">
                        <div class="row mb-20">
                            <div class="col-12">
                                <form action="'.website_path.'search/" method="post" class="search-form position-relative">
                                    <div class="search-form-icon"><i class="ti-search"></i></div>
                                    <label>
                                        <input type="text" class="search_field" placeholder="كلمة البحث" value="" name="searchinput" dir="rtl">
                                    </label>
                                    <div class="search-switch">
                                        <ul class="list-inline">

                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
	}	
	
	
	
	
	
	function homepage_fr(){
			global $db;
			$status_topic = $db->get("articles","status",id);
				if(this_current_page=="author"){
			$status_user = $db->get("users","status",id);
			$showname_user = $db->get("users","showname",id);
			}
		if(this_current_page=="articles"){
			if($status_topic ==1){
			$title_page = "| ".$db->get("articles","title",id);
			}else if ($status_topic !=4 and ulv > 0){
			$title_page = "| ".$db->get("articles","title",id);
			}
		}
		if(this_current_page=="report"){
						$title_page = "| ".lang_menu_report;
		}
		if(this_current_page=="contactus"){
						$title_page = "| ".lang_menu_contact;
		}
		if(this_current_page=="method_ar"){
						$title_page = "| المنهجية ";
		}
		if(this_current_page=="author"){
			
			if($status_user !=1 and ulv < 1 or (ulv > 0 and $name == "none") or id ==1){
						$title_page = "";
			}else{
						$title_page = "| ".$showname_user;
			}
			
		}
		echo'<!DOCTYPE html>
<html class="no-js" lang="fr-tn" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>'.site_title.''.$title_page.'</title>';
	if(this_current_page==""){
	echo'
    <meta name="description" content="'.site_description.'">';
	}
	if(this_current_page=="articles"){
	echo'
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="'.site_keywords.'" />
	<meta name="news_keywords" content="'.$this->keywords_check($db->get("articles","keywords",id)).'" />
	<meta name="description" content="'.$db->get("articles","introduction",id).'" />
	<meta name="robots" content="index, follow" />
	<meta name="language" content="ar" />
	<meta https-equiv="refresh" content="3600" />
	<link rel="amphtml" href="'.$this->get_articles_url(id).'" />
	<link rel="canonical" href="'.$this->get_articles_url(id).'" />
	<meta property="og:locale" content="ar_AR" />
	<meta property="og:title" content="'.$db->get("articles","title",id).'" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="'.$this->get_articles_url(id).'" />
	<meta property="og:image" content="'.website_path.str_replace('../','',$db->get("articles","up_folder",id)).''.$db->get("articles","urllink",id).'" />
	<meta property="og:site_name" content="'.site_title	.'" />
	<meta property="og:description" content="'.$db->get("articles","introduction",id).'" />
	<meta property="article:publisher" content="https://www.facebook.com/Tunifact" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="'.$db->get("articles","introduction",id).'" />
	<meta name="twitter:title" content="'.$db->get("articles","title",id).'" />
	<meta name="twitter:site" content="@TuniFactTn" />
	<meta name="twitter:image" content="'.website_path.str_replace('../','',$db->get("articles","up_folder",id)).''.$db->get("articles","urllink",id).'" />
	<meta name="twitter:creator" content="@TuniFactTn" />
	<meta property="fb:pages" content="101833218728378" />';
	}
	echo'
    <link rel="shortcut icon" type="image/x-icon" href="'.website_path.'assets/imgs/favicon.png">
    <link rel="stylesheet" href="'.website_path.'assets/css/style.css?x=x911Tnx4">
    <link rel="stylesheet" href="'.website_path.'assets/css/widgets.css?x=x911Tnx4">
    <link rel="stylesheet" href="'.website_path.'assets/css/color.css?x=x911Tnx4">
    <link rel="stylesheet" href="'.website_path.'assets/css/responsive.css?x=x911Tnx4">
</head>

<body>
   <div dir="rtl" > <div class="scroll-progress primary-bg" ></div></div>
    <!--
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div data-loader="spinner"></div>
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
	  -->
	 
    <div class="main-wrap">
        <!--Offcanvas sidebar-->
        <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar"></aside>
        <!-- Main Wrap Start -->
        <header class="main-header header-style-1">
            <div class="top-bar pt-10 pb-10 background-white d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            
                                <ul class="header-social-network d-inline-block list-inline">
                                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="https://www.facebook.com/Tunifact"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="https://twitter.com/TuniFactTn"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="https://www.instagram.com/tunifact/"><i class="ti-instagram"></i></a></li>
                            </ul>
                            <div class="vline-space d-inline-block"></div>
                          
                        </div>
                        <div class="col-6 text-right">
                      <div class="language d-inline-block font-small">';
					  if(page_lang=="fr"){
						  echo'
                                <div id="langMenuDropdow" class="dropdown-menu dropdown-menu-left" aria-labelledby="langMenu">
                                    <a class="dropdown-item" href="'.website_path.'/">العربية <img src="'.website_path.'assets/imgs/tn.png" height="25"></a>
                                </div>
                                <a class="dropdown-toggle" href="#" role="button" id="langMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-world mr-5"></i>
                                    <span>Français <img src="'.website_path.'assets/imgs/fr.png"  height="25"></span>
                                </a>
                            </div>';
						}else{
						  echo'
                                <div id="langMenuDropdow" class="dropdown-menu dropdown-menu-left" aria-labelledby="langMenu">
                                    <a class="dropdown-item" href="'.website_path.'fr/">Français <img src="'.website_path.'assets/imgs/fr.png" height="25"></a>
                                </div>
                                <a class="dropdown-toggle" href="#" role="button" id="langMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-world mr-5"></i>
                                    <span>العربية <img src="'.website_path.'assets/imgs/tn.png"  height="25"></span>
                                </a>
                            </div>';
						}
							echo'
                        </div>
                    </div>
                </div>
            </div>
            <!--End top bar-->
            <div class="header-logo background-paper text-center pt-40 pb-40 d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="'.website_path.'fr/">
                                <img class="logo-img d-inline" src="'.website_path.'assets/imgs/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End logo-->
            <div class="header-bottom header-sticky background-white text-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="off-canvas-toggle-cover" id="content-mobile">
                                <a class="dropdown-item ar_text" href="'.website_path.'">العربية  <img src="'.website_path.'assets/imgs/tn.png" height="20"></a>
                            </div>
                            <div class="logo-tablet d-md-inline d-lg-none d-none">
                                <a href="'.website_path.'">
                                    <img class="logo-img d-inline" src="'.website_path.'assets/imgs/logo-tablet.png" alt="">
                                </a>
                            </div>
                            <div class="logo-mobile d-inline d-md-none">
                                <a href="'.website_path.'">
                                    <img class="logo-img d-inline" src="'.website_path.'assets/imgs/logo-mobile.png" alt="">
                                </a>
                            </div>';
							if(page_lang=="fr"){
							
												echo'
                            <!-- Main-menu -->
                            <div class="main-nav text-center d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="main-menu">
									 <li><a href="'.website_path.'fr/">Acceuil</a></li>
                                        <li><a href="'.website_path.'methodologie/">Méthodologie</a></li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Pour Comprendre&nbsp; </a>
                                            <ul class="sub-menu" style="text-align: left">
                                                <li><a href="'.$this->get_cat_url(9).'">Déclarations</a></li>
                                                <li><a href="'.$this->get_cat_url(10).'">Photos</a></li>
                                                <li><a href="'.$this->get_cat_url(11).'">Vidéos </a></li>

                                            </ul>
                                        </li>
										<li class="menu-item-has-children">
                                            <a href="#">Vérification&nbsp; </a>
                                            <ul class="sub-menu" style="text-align: left">
                                                <li><a href="'.$this->get_cat_url(12).'">News</a></li>
                                                <li><a href="'.$this->get_cat_url(13).'">erreurs rédactionnelles </a></li>
                                            </ul>
                                        </li>
										<li><a href="'.$this->get_cat_url(14).'">Data journalisme</a></li>
										<li><a href="'.website_path.'report/">Signaler</a></li>

								
                                    </ul>
                                </nav>
                            </div>';
								}else{
								echo'
                            <!-- Main-menu -->
                            <div class="main-nav text-center d-none d-lg-block" dir="rtl">
                                <nav>
                                    <ul id="navigation" class="main-menu">
									 <li><a href="'.website_path.'">الرئيسية</a></li>
                                        <li><a href="'.website_path.'methodology/">المنهجية</a></li>

                                        <li class="menu-item-has-children">
                                            <a href="#">صحافة التحري&nbsp; </a>
                                            <ul class="sub-menu">
                                                <li><a href="'.$this->get_cat_url(1).'">التصريحات</a></li>
                                                <li><a href="'.$this->get_cat_url(2).'">الأخبار</a></li>
                                                <li><a href="'.$this->get_cat_url(3).'">الصور</a></li>
												<li><a href="'.$this->get_cat_url(4).'">الفيديوهات</a></li>
												<li><a href="'.$this->get_cat_url(5).'">الأخطاء الصحفية</a></li>

                                            </ul>
                                        </li>
										<li class="menu-item-has-children">
                                            <a href="#">صحافة التفسير والبيانات&nbsp; </a>
                                            <ul class="sub-menu">
                                                <li><a href="'.$this->get_cat_url(6).'">صحافة التفسير</a></li>
                                                <li><a href="'.$this->get_cat_url(7).'">صحافة البيانات </a></li>
                                            </ul>
                                        </li>
										<li><a href="'.$this->get_cat_url(8).'">الحقيبة التعليمية</a></li>
										<li><a href="'.website_path.'report/">الإبلاغ</a></li>

								
                                    </ul>
                                </nav>
                            </div>';
							
									
										}
									echo'
                            <!-- Search -->
                            <div class="search-button">
                                <button class="search-icon"><i class="ti-search"></i></button>
                                <span class="search-close float-right font-small"><i class="ti-close mr-5"></i></span>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="position-relative pt-40 background12">
            <!--Search Form-->
            <div class="main-search-form transition-02s">
                <div class="container">
                    <div class="pt-10 pb-50 main-search-form-cover">
                        <div class="row mb-20">
                            <div class="col-12">
                                <form action="'.website_path.'search/" method="post" class="search-form position-relative">
                                    <div class="search-form-icon"><i class="ti-search"></i></div>
                                    <label>
                                        <input type="text" class="search_field" placeholder="" value="" name="searchinput" dir="rtl">
                                    </label>
                                    <div class="search-switch">
                                        <ul class="list-inline">

                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
	}	
	
	
	
	
	function recent_topics(){
		global $db;
		echo'  <!--taber-->
                                <div class="sidebar-widget widget-taber mb-30">
                                    <div class="widget-taber-content background-white pt-30 pb-30 pl-30 pr-30 border-radius-5">
                                        <nav class="tab-nav float-none mb-20">
                                         <h6 class="text-center ar_text">	'.lang_home_most_visited_ar.'</h6>
                                        </nav>
                                        <div class="tab-content">
                                            <!--Tab Popular-->
                                            <div class="tab-pane fade show active" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab" dir="rtl">
                                                <div class="post-block-list post-module-1">
                                                    <ul class="list-post">';
                                             $sql=$db->select("articles where status='1' and type !='5' and global_type < 8 and  `date` >=  ".strtotime("-1 week +1 day")." order by hits desc limit 5","*");
                                          // $sql=$db->select("articles where status='1' and `date` BETWEEN CURDATE()-INTERVAL 1 WEEK AND CURDATE()  order by hits desc limit 5","*");
												$count=0;
												$certif_count=1;
												while($rs=$db->fetchAssoc($sql)){
													$topic_id=$rs["id"];
													$topictype=$rs["type"];
													$topicstatus=$rs["status"];
													$date=$rs["date"];
													$up_folder=	str_replace('../','',$rs["up_folder"]);
													$urllink=$rs["urllink"];
													$title=$rs["title"];
													if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-2 mb-2">
                    <i class="fa fa-check mr-2"></i> '.lang_post_true.'
                                        </span>';
						$code_color="#82b54b;";
			}else if($topictype==2){
						$typeofpost ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
						$code_color="#e04f1a;";

			}else if($topictype==3){
						$typeofpost ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
						$code_color="#ffb119;";

			}else if($topictype==4){
						$typeofpost ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
						$code_color="#6c757d;";

			}else if($topictype==5){
						$typeofpost ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
						$code_color="#000000;";
						// $code_color_add="  text-shadow: 0 0 3px #d3d9df;";

			}
													echo'  <li class="mb-30">
													
                                                            <div class="d-flex">
                                                                <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale" >
                                                                    <a href="'.$this->get_articles_url($topic_id).'">
                                                                        <img src="'.website_path.''.$up_folder.'m_'.$urllink.'" alt=""  onerror="this.onerror=null;this.src=\''.website_path.'assets/imgs/err.jpg\';">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body text-right meta-0 font-small mb-15">
																
                                                                  '.$typeofpost.'
                                                                    <h6 class="post-title mb-10 text-limit-2-row ar_text">  
																	<a href="'.$this->get_articles_url($topic_id).'">'.$title.'</a></h6>
                                                                    <div class="entry-meta meta-1 font-x-small color-grey ar_text">
                                                                        <span class="post-on">'.showdate($date).'</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>';
												$count++;
													$certif_count++;
												}
											  
                                                 
                                                echo'
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>';
	}		
		
		
		
		
			
	function recent_topics_fr(){
		global $db;
		echo'  <!--taber-->
                                <div class="sidebar-widget widget-taber mb-30">
                                    <div class="widget-taber-content background-white pt-30 pb-30 pl-30 pr-30 border-radius-5">
                                        <nav class="tab-nav float-none mb-20">
                                         <h6 class="text-center ">Articles les plus lus</h6>
                                        </nav>
                                        <div class="tab-content">
                                            <!--Tab Popular-->
                                            <div class="tab-pane fade show active" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab" >
                                                <div class="post-block-list post-module-1">
                                                    <ul class="list-post">';
                                                $sql=$db->select("articles where status='1' and global_type > 8 and `date` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) order by hits desc limit 5","*");
												$count=0;
												$certif_count=1;
												while($rs=$db->fetchAssoc($sql)){
													$topic_id=$rs["id"];
													$topictype=$rs["type"];
													$topicstatus=$rs["status"];
													$date=$rs["date"];
													$up_folder=	str_replace('../','',$rs["up_folder"]);
													$urllink=$rs["urllink"];
													$title=$rs["title"];
													if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-2 mb-2">
                    <i class="fa fa-check mr-2"></i> '.lang_fr_post_true.'
                                        </span>';
						$code_color="#82b54b;";
			}else if($topictype==2){
						$typeofpost ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
						$code_color="#e04f1a;";

			}else if($topictype==3){
						$typeofpost ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
						$code_color="#ffb119;";

			}else if($topictype==4){
						$typeofpost ='  <span type="button" class=" ar-notexact mr-1 mb-1" dir="ltr">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
						$code_color="#6c757d;";

			}else if($topictype==5){
						$typeofpost ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
						$code_color="#000000;";
						// $code_color_add="  text-shadow: 0 0 3px #d3d9df;";

			}
													echo'  <li class="mb-30">
													
                                                            <div class="d-flex">
                                                                <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale" >
                                                                    <a href="'.$this->get_articles_url($topic_id).'">
                                                                        <img src="'.website_path.''.$up_folder.'m_'.$urllink.'" alt=""  onerror="this.onerror=null;this.src=\''.website_path.'assets/imgs/err.jpg\';">
                                                                    </a>
                                                                </div>
                                                                <div class="post-content media-body text-left meta-0 font-small mb-15  text-left" dir="rtl">
																
                                                                  '.$typeofpost.'
                                                                    <h6 class="post-title mb-10 text-limit-2-row text-left">  
																	<a href="'.$this->get_articles_url($topic_id).'">'.$title.'</a></h6>
                                                                    <div class="entry-meta meta-1 font-x-small color-grey ">
                                                                        <span class="post-on">'.showdate($date).'</span>
                                                                    </div>
                                                                </div>
																
																
                                                            </div>
                                                        </li>';
												$count++;
													$certif_count++;
												}
											  
                                                 
                                                echo'
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>';
	}		
	

	function social_media_ar(){
		echo'        <div class="sidebar-widget widget-social-network mb-30">
		<div class="social-network">
                                        <div class="follow-us d-flex align-items-center">
                                            <a class="follow-us-facebook clearfix mr-5 mb-10" href="https://www.facebook.com/Tunifact/" target="_blank">
                                                <div class="social-icon">
                                                    <i class="ti-facebook mr-5 v-align-space"></i>
                                                    <i class="ti-facebook mr-5 v-align-space nth-2"></i>
                                                </div>
                                                <span class="social-name">Facebook</span>
                                                <span class="social-count "></span><span class="social-count"></span>
                                            </a>
                                            <a class="follow-us-twitter clearfix ml-5 mb-10" href="https://twitter.com/TuniFactTn" target="_blank">
                                                <div class="social-icon">
                                                    <i class="ti-twitter-alt mr-5 v-align-space"></i>
                                                    <i class="ti-twitter-alt mr-5 v-align-space nth-2"></i>
                                                </div>
                                                <span class="social-name">Twitter</span>
                                                <span class="social-count "></span><span class="social-count"></span>
                                            </a>
                                        </div>
                                        <div class="follow-us d-flex align-items-center">
                                            <a class="follow-us-instagram clearfix mr-5" href="https://www.instagram.com/tunifact/" target="_blank">
                                                <div class="social-icon">
                                                    <i class="ti-instagram mr-5 v-align-space"></i>
                                                    <i class="ti-instagram mr-5 v-align-space nth-2"></i>
                                                </div>
                                                <span class="social-name">Instagram</span>
                                                <span class="social-count "></span><span class="social-count"></span>
                                            </a>
                                            <a class="follow-us-youtube clearfix ml-5" href="https://www.youtube.com/channel/UCJ49FgofZ0vbyWAk8grPvOQ" target="_blank">
                                                <div class="social-icon">
                                                    <i class="ti-youtube mr-5 v-align-space"></i>
                                                    <i class="ti-youtube mr-5 v-align-space nth-2"></i>
                                                </div>
                                                <span class="social-name">Youtube</span>
                                                <span class="social-count "></span><span class="social-count"></span>
                                            </a>
                                        </div>
                                    </div>
								</div>
									';
	}	
	function slide_home_ar(){
		global $db;
	echo'          <!--Featured post Start-->
            <div class="home-featured mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="featured-slider-1 border-radius-10">
                                <div class="featured-slider-1-items">';
									if(fav_01 > 0 and $db->get("articles","status",fav_01)==1){
										$topictype = $db->get("articles","type",fav_01);
											if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype==2){
						$typeofpost ='  <span type="button" class=" ar-false mr-1 mb-1" >
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
			}else if($topictype==3){
						$typeofpost ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
			}else if($topictype==4){
						$typeofpost ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
			}else if($topictype==5){
						$typeofpost ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single" dir="rtl">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25 ar_text post-in" >
															'.$typeofpost.'
                                                    </div>
                                                    <h2 class="post-title ar_text"><a href="'.$this->get_articles_url(fav_01).'">'.$db->get("articles","title",fav_01).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 ar_text" dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fav_01)).'</span>
														

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ar_text">'.$db->get("articles","introduction",fav_01).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fav_01).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fav_01)).'m_'.$db->get("articles","urllink",fav_01).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }
								   
								   if(fav_02 > 0 and $db->get("articles","status",fav_02)==1){
										$topictype_fav_02 = $db->get("articles","type",fav_02);
											if($topictype_fav_02==1){
						$typeofpost_02 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype_fav_02==2){
						$typeofpost_02 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
			}else if($topictype_fav_02==3){
						$typeofpost_02 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
			}else if($topictype_fav_02==4){
						$typeofpost_02 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
			}else if($topictype_fav_02==5){
						$typeofpost_02 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single" dir="rtl">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25 ar_text post-in">
															'.$typeofpost_02.'
                                                    </div>
                                                    <h2 class="post-title ar_text"><a href="'.$this->get_articles_url(fav_02).'">'.$db->get("articles","title",fav_02).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 ar_text" dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fav_02)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ar_text">'.$db->get("articles","introduction",fav_02).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fav_02).'" >
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fav_02)).'m_'.$db->get("articles","urllink",fav_02).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }	
								   
								   if(fav_03 > 0 and $db->get("articles","status",fav_03)==1){
										$topictype_fav_03 = $db->get("articles","type",fav_03);
											if($topictype_fav_03==1){
						$typeofpost_03 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype_fav_03==2){
						$typeofpost_03 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
			}else if($topictype_fav_03==3){
						$typeofpost_03 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
			}else if($topictype_fav_03==4){
						$typeofpost_03 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
			}else if($topictype_fav_03==5){
						$typeofpost_03 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single" dir="rtl">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25 ar_text post-in">
															'.$typeofpost_03.'
                                                    </div>
                                                    <h2 class="post-title ar_text"><a href="'.$this->get_articles_url(fav_03).'">'.$db->get("articles","title",fav_03).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 ar_text" dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fav_03)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ar_text">'.$db->get("articles","introduction",fav_03).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fav_03).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fav_03)).'m_'.$db->get("articles","urllink",fav_03).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }

								   if(fav_04 > 0 and $db->get("articles","status",fav_04)==1){
										$topictype_fav_04 = $db->get("articles","type",fav_04);
					if($topictype_fav_04==1){
						$typeofpost_04 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype_fav_04==2){
						$typeofpost_04 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
			}else if($topictype_fav_04==3){
						$typeofpost_04 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
			}else if($topictype_fav_04==4){
						$typeofpost_04 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
			}else if($topictype_fav_04==5){
						$typeofpost_04 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single" dir="rtl">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25 ar_text post-in">
															'.$typeofpost_04.'
                                                    </div>
                                                    <h2 class="post-title ar_text"><a href="'.$this->get_articles_url(fav_04).'">'.$db->get("articles","title",fav_04).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 ar_text" dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fav_04)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ar_text">'.$db->get("articles","introduction",fav_04).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fav_04).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fav_04)).'m_'.$db->get("articles","urllink",fav_04).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }
								   
								   
								   if(fav_05 > 0 and $db->get("articles","status",fav_05)==1){
										$topictype_fav_05 = $db->get("articles","type",fav_05);
					if($topictype_fav_05==1){
						$typeofpost_05 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype_fav_05==2){
						$typeofpost_05 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
			}else if($topictype_fav_05==3){
						$typeofpost_05 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
			}else if($topictype_fav_05==4){
						$typeofpost_05 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
			}else if($topictype_fav_05==5){
						$typeofpost_05 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single" dir="rtl">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25 ar_text post-in">
															'.$typeofpost_05.'
                                                    </div>
                                                    <h2 class="post-title ar_text"><a href="'.$this->get_articles_url(fav_05).'">'.$db->get("articles","title",fav_05).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 ar_text" dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fav_05)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ar_text">'.$db->get("articles","introduction",fav_05).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fav_05).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fav_05)).'m_'.$db->get("articles","urllink",fav_05).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }		   
								   if(fav_06 > 0 and $db->get("articles","status",fav_06)==1){
										$topictype_fav_06 = $db->get("articles","type",fav_06);
					if($topictype_fav_06==1){
						$typeofpost_06 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype_fav_06==2){
						$typeofpost_06 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
			}else if($topictype_fav_06==3){
						$typeofpost_06 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </span>';
			}else if($topictype_fav_06==4){
						$typeofpost_06 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </span>';
			}else if($topictype_fav_06==5){
						$typeofpost_06 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single" dir="rtl">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25 ar_text post-in">
															'.$typeofpost_06.'
                                                    </div>
                                                    <h2 class="post-title ar_text"><a href="'.$this->get_articles_url(fav_06).'">'.$db->get("articles","title",fav_06).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 ar_text" dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fav_06)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ar_text">'.$db->get("articles","introduction",fav_06).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fav_06).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fav_06)).'m_'.$db->get("articles","urllink",fav_06).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }
								   echo'
                                </div>
                                <div class="row" dir="rtl">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="arrow-cover"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Featured post End-->';
	}



	function slide_home_fr(){
		global $db;
	echo'          <!--Featured post Start-->
            <div class="home-featured mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="featured-slider-1 border-radius-10">
                                <div class="featured-slider-1-items">';
									if(fr_fav_01 > 0 and $db->get("articles","status",fr_fav_01)==1){
										$topictype = $db->get("articles","type",fr_fav_01);
											if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </button>';
			}else if($topictype==2){
						$typeofpost ='  <span type="button" class=" ar-false mr-1 mb-1" >
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
			}else if($topictype==3){
						$typeofpost ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
			}else if($topictype==4){
						$typeofpost ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
			}else if($topictype==5){
						$typeofpost ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25  post-in" >
															'.$typeofpost.'
                                                    </div>
                                                    <h2 class="post-title "><a href="'.$this->get_articles_url(fr_fav_01).'">'.$db->get("articles","title",fr_fav_01).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 " dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fr_fav_01)).'</span>
														

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ">'.$db->get("articles","introduction",fr_fav_01).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fr_fav_01).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fr_fav_01)).'m_'.$db->get("articles","urllink",fr_fav_01).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }
								   
								   if(fr_fav_02 > 0 and $db->get("articles","status",fr_fav_02)==1){
										$topictype_fr_fav_02 = $db->get("articles","type",fr_fav_02);
											if($topictype_fr_fav_02==1){
						$typeofpost_02 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </button>';
			}else if($topictype_fr_fav_02==2){
						$typeofpost_02 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
			}else if($topictype_fr_fav_02==3){
						$typeofpost_02 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
			}else if($topictype_fr_fav_02==4){
						$typeofpost_02 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
			}else if($topictype_fr_fav_02==5){
						$typeofpost_02 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25  post-in">
															'.$typeofpost_02.'
                                                    </div>
                                                    <h2 class="post-title "><a href="'.$this->get_articles_url(fr_fav_02).'">'.$db->get("articles","title",fr_fav_02).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 " dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fr_fav_02)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ">'.$db->get("articles","introduction",fr_fav_02).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fr_fav_02).'" >
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fr_fav_02)).'m_'.$db->get("articles","urllink",fr_fav_02).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }	
								   
								   if(fr_fav_03 > 0 and $db->get("articles","status",fr_fav_03)==1){
										$topictype_fr_fav_03 = $db->get("articles","type",fr_fav_03);
											if($topictype_fr_fav_03==1){
						$typeofpost_03 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </button>';
			}else if($topictype_fr_fav_03==2){
						$typeofpost_03 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
			}else if($topictype_fr_fav_03==3){
						$typeofpost_03 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
			}else if($topictype_fr_fav_03==4){
						$typeofpost_03 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
			}else if($topictype_fr_fav_03==5){
						$typeofpost_03 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25  post-in">
															'.$typeofpost_03.'
                                                    </div>
                                                    <h2 class="post-title "><a href="'.$this->get_articles_url(fr_fav_03).'">'.$db->get("articles","title",fr_fav_03).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 " dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fr_fav_03)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ">'.$db->get("articles","introduction",fr_fav_03).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fr_fav_03).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fr_fav_03)).'m_'.$db->get("articles","urllink",fr_fav_03).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }

								   if(fr_fav_04 > 0 and $db->get("articles","status",fr_fav_04)==1){
										$topictype_fr_fav_04 = $db->get("articles","type",fr_fav_04);
					if($topictype_fr_fav_04==1){
						$typeofpost_04 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </button>';
			}else if($topictype_fr_fav_04==2){
						$typeofpost_04 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
			}else if($topictype_fr_fav_04==3){
						$typeofpost_04 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
			}else if($topictype_fr_fav_04==4){
						$typeofpost_04 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
			}else if($topictype_fr_fav_04==5){
						$typeofpost_04 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25  post-in">
															'.$typeofpost_04.'
                                                    </div>
                                                    <h2 class="post-title "><a href="'.$this->get_articles_url(fr_fav_04).'">'.$db->get("articles","title",fr_fav_04).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 " dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fr_fav_04)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ">'.$db->get("articles","introduction",fr_fav_04).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fr_fav_04).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fr_fav_04)).'m_'.$db->get("articles","urllink",fr_fav_04).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }
								   
								   
								   if(fr_fav_05 > 0 and $db->get("articles","status",fr_fav_05)==1){
										$topictype_fr_fav_05 = $db->get("articles","type",fr_fav_05);
					if($topictype_fr_fav_05==1){
						$typeofpost_05 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </button>';
			}else if($topictype_fr_fav_05==2){
						$typeofpost_05 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
			}else if($topictype_fr_fav_05==3){
						$typeofpost_05 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
			}else if($topictype_fr_fav_05==4){
						$typeofpost_05 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
			}else if($topictype_fr_fav_05==5){
						$typeofpost_05 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25  post-in">
															'.$typeofpost_05.'
                                                    </div>
                                                    <h2 class="post-title "><a href="'.$this->get_articles_url(fr_fav_05).'">'.$db->get("articles","title",fr_fav_05).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 " dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fr_fav_05)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ">'.$db->get("articles","introduction",fr_fav_05).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fr_fav_05).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fr_fav_05)).'m_'.$db->get("articles","urllink",fr_fav_05).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }		   
								   if(fr_fav_06 > 0 and $db->get("articles","status",fr_fav_06)==1){
										$topictype_fr_fav_06 = $db->get("articles","type",fr_fav_06);
					if($topictype_fr_fav_06==1){
						$typeofpost_06 ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </button>';
			}else if($topictype_fr_fav_06==2){
						$typeofpost_06 ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
			}else if($topictype_fr_fav_06==3){
						$typeofpost_06 ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
			}else if($topictype_fr_fav_06==4){
						$typeofpost_06 ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_not_exact.'
                                        </span>';
			}else if($topictype_fr_fav_06==5){
						$typeofpost_06 ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
			}
										
									echo'
									
								
													
                                    <div class="slider-single">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-12 order-lg-1 order-2 align-center-vertical">
                                                <div class="slider-caption">
                                                    <div class="mb-25  post-in">
															'.$typeofpost_06.'
                                                    </div>
                                                    <h2 class="post-title "><a href="'.$this->get_articles_url(fr_fav_06).'">'.$db->get("articles","title",fr_fav_06).'</a></h2>
                                                    <div class="entry-meta meta-1 font-small color-grey mt-20 mb-20 " dir="rtl">

                                                        <span class="post-on"  >'.showdate($db->get("articles","date",fr_fav_06)).'</span>
														<span class="time-reading" >|  08 دقائق</span>

                                                    </div>
                                                    <p class="excerpt font-medium mt-25 mb-25 ">'.$db->get("articles","introduction",fr_fav_06).'</p>
                                                   
                                                </div>
                                            </div>
                                            <div class="slider-img col-lg-6 order-lg-2 order-1 col-md-12">
                                                <div class="img-hover-scale">
                                                    <span class=" background8"><i class=""></i></span>
                                                    <a href="'.$this->get_articles_url(fr_fav_06).'">
                                                        <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",fr_fav_06)).'m_'.$db->get("articles","urllink",fr_fav_06).'" alt="post-slider">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                   }
								   echo'
                                </div>
                                <div class="row" dir="rtl">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="arrow-cover"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Featured post End-->';
	}

							
	
	
	function  editor_pic_ar() {
		global $db;
		  echo'
            <!--Editor s Picked Start-->
            <div class="widgets-post-carausel-1 mb-40">
                <div class="container">
				
				<div id="content-mobile">
				
				<h2 class="post-title ar_text text-center">المقالات التفسيرية</h2>
				</div>
                    <div class="post-carausel-1 border-radius-10 bg-white">
                        <div class="row no-gutters">
                          
                            <div class="col col-4-5 col-md-12">
                                <div class="post-carausel-1-items row">';
                                           
										   
										   		$sql=$db->select("articles where type='5' and  status='1'  order by id desc limit 5","*");
		$count=0;
		$certif_count=1;
		while($rs=$db->fetchAssoc($sql)){
				$topic_id=$rs["id"];
			$topictype=$rs["type"];
			$topicstatus=$rs["status"];
			$title=$rs["title"];
			$introduction=$rs["introduction"];
			$datetopic=$rs["date"];
			$up_folder=	website_path.str_replace('../','',$rs["up_folder"]);
			$urllink=$rs["urllink"];
				echo'
					<!--start slider single-->

                                    <div class="slider-single col">
                                        <h6 class="post-title pr-5 pl-5 mb-10 text-limit-2-row ar_text"><a href="'.$this->get_articles_url($topic_id).'">'.$title.'</a></h6>
                                        <div class="img-hover-scale border-radius-5 hover-box-shadow ">
                                            <a href="'.$this->get_articles_url($topic_id).'"><img class="border-radius-5" src="'.$up_folder.'r_'.$urllink.'" alt="post-slider"></a>
                                        </div>
                                        <div class="entry-meta meta-1 font-small color-grey mt-10 pr-5 pl-5">
                                       
                                           
                                        </div>
                                    </div>
 
                                    <!--end slider single-->';
									
		$count++;
			$certif_count++;
		}
      
	  
									echo'
							
                              
                       
                                    
                            
                             
                                    <!--end slider single-->
                                </div>
                            </div>
							  <div class="col col-1-5 background6 editor-picked-left d-none d-lg-block">
                                <div class="editor-picked ar_text">
                                    <h4>'.lang_posts_you_might_like.'</h4>
                                    <p class="font-medium color-white mt-20 mb-30">'.lang_you_might_like_text.'</p>
                                    <div class="post-carausel-1-arrow"></div>
                                </div>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
            <!--Editor s Picked End-->';
		}
		
		
	function  footer_arabic() {
		
		 if(page_lang=="fr"){
		$footer_text_ar ='Plateforme independante et à but non lucratif ';
		}else{
		$footer_text_ar ='منصة مستقلة وذات صبغة غير ربحية';
		}
		
		echo'
		 <footer>
            <!-- Footer Start-->
            <div class="footer-area fix pt-20 background11">
                
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area background11">
                <div class="container">
                   <div class="ar_text text-center footer-text" dir="rtl">تونس تتحرى هو موقع متخصص في صحافة التحري أطلقته النقابة الوطنية للصحفيين التونسيين في إطار مشروع مشترك مع منظمة Hivos.</div>
                   <div class="ar_text text-center footer-text " dir="rtl"><img height="50" src="'.website_path.'assets/imgs/footer.png"></div>
                   <div class="ar_text text-center footer-text " dir="rtl">'.$footer_text_ar.'</div>
					<div class="footer-border pt-30 pb-30">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="footer-copy-right">
                                    <p class="font-medium">© 2021, SNJT| All rights reserved. '.base64_decode("LSBQb3dyZWQgQnkgPGEgaHJlZj0iaHR0cDovL3d3dy45MTEuY29tLnRuIiB0YXJnZXQ9Il9ibGFuayI+OTExIFByb2Q8L2E+").'</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-menu float-lg-right mt-lg-0 mt-3">
                                    <ul class="font-medium">
                                        <li><a href="'.website_path.'contact-us/">تواصل معنا</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
    </div>
    <!-- Main Wrap End-->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="'.website_path.'assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/popper.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/bootstrap.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.slicknav.js"></script>
    <script src="'.website_path.'assets/js/vendor/owl.carousel.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/slick.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/wow.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/animated.headline.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.ticker.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.sticky.js"></script>
    <script src="'.website_path.'assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="'.website_path.'assets/js/vendor/waypoints.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.counterup.min.js"></script>
    <script src="'.website_path.'assets/js/vendor/jquery.theia.sticky.js"></script>
    <script src="'.website_path.'assets/js/main.js?x=xxaaazazazazx"></script>
</body>

</html>
		
		';
		
		}
	function  arabic_date($your_date) {
    $months = array("Jan" => "جانفي", "Feb" => "فيفري", "Mar" => "مارس", "Apr" => "أفريل", "May" => "ماي", "Jun" => "جوان", "Jul" => "جويلية", "Aug" => "أوت", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
    // $your_date = date('y-m-d'); // The Current Date
    $en_month = date("M", strtotime($your_date));
    foreach ($months as $en => $ar) {
        if ($en == $en_month) { $ar_month = $ar; }
    }

    $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
    $replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = date('D'); // The Current Day
    $ar_day = str_replace($find, $replace, $ar_day_format);

    header('Content-Type: text/html; charset=utf-8');
    $standard = array("0","1","2","3","4","5","6","7","8","9");
    $eastern_arabic_symbols = array("٠","١","٢","٣","٤","٥","٦","٧","٨","٩");
    $current_date = $ar_day.' '.date('d').' / '.$ar_month.' / '.date('Y');
    $arabic_date = str_replace($standard , $eastern_arabic_symbols , $current_date);

    return $arabic_date;

}
function keywords_check($text) {
$t = $text;

$specChars = array(
    '!' => '-',    '"' => '-',
    '#' => '-',    '$' => '-',    '%' => '-',
    '&' => '-',    '\'' => '-',   '(' => '-',
    ')' => '-',    '*' => '-',    '+' => '-',
    ',' => '-',    '-' => '-',    '.' => '-',
    '/' => '-',    ':' => '-',    ';' => '-',
    '<' => '-',    '=' => '-',    '>' => '-',
    '?' => '-',    '@' => '-',    '[' => '-',
    '\\' => '-',   ']' => '-',    '^' => '-',
    '_' => '-',    '`' => '-',    '{' => '-',
    '|' => '-',    '}' => '-',    '~' => '-',
    ',' => '-',  ' ' => '-',  '،' => '-'
);

foreach ($specChars as $k => $v) {
    $t = str_replace($k, " , ", $t);
}

return $t;
}

function convert_url($text) {

$t = $text;

$specChars = array(
    '!' => '-',    '"' => '-',
    '#' => '-',    '$' => '-',    '%' => '-',
    '&' => '-',    '\'' => '-',   '(' => '-',
    ')' => '-',    '*' => '-',    '+' => '-',
    ',' => '-',    '-' => '-',    '.' => '-',
    '/' => '-',    ':' => '-',    ';' => '-',
    '<' => '-',    '=' => '-',    '>' => '-',
    '?' => '-',    '@' => '-',    '[' => '-',
    '\\' => '-',   ']' => '-',    '^' => '-',
    '_' => '-',    '`' => '-',    '{' => '-',
    '|' => '-',    '}' => '-',    '~' => '-',
    ',' => '-',  ' ' => '-'
);

foreach ($specChars as $k => $v) {
    $t = str_replace($k, $v, $t);
}

return $t;
}

function get_articles_url($id) {
global $db;									
if($db->get("articles","status",$id)==1){
$title = 	$this->convert_url($db->get("articles","title",$id));
$articles_url = website_path."articles/$id/$title/";
}else{
$articles_url = website_path."articles/$id/";
}

return $articles_url;
}

function get_cat_url($id) {
global $db;									
if($db->get("cat","status",$id)==1){
$title = 	$this->convert_url($db->get("cat","title",$id));
$articles_url = website_path."cat/$id/$title/";
}else{
$articles_url = website_path."cat/$id/";
}

return $articles_url;
}

function get_home_ar_url($id) {
global $db;									


$articles_url = website_path."ar/";


return $articles_url;
}

function get_home_fr_url($id) {
global $db;									


$articles_url = website_path."fr/";


return $articles_url;
}



function get_author_url($id) {
global $db;									
if($db->get("users","status",$id)==1){
$title = 	$this->convert_url($db->get("users","urluser",$id));
$articles_url = website_path."author/$id/$title/";
}else{
$articles_url = website_path."author/$id/";
}

return $articles_url;
}

function clean_symbols($text) {

$t = $text;

$specChars = array(
    '!' => '',    '"' => '',
    '#' => '',    '$' => '',    '%' => '',
    '&' => '',    '\'' => '',   '(' => '',
    ')' => '',    '*' => '',    '+' => '',
    ',' => '',    '' => '',    '.' => '',
    '/' => '',    ':' => '',    ';' => '',
    '<' => '',    '=' => '',    '>' => '',
    '?' => '',    '@' => '',    '[' => '',
    '\\' => '',   ']' => '',    '^' => '',
    '_' => '',    '`' => '',    '{' => '',
    '|' => '',    '}' => '',    '~' => '',
    ',' => '',  ' ' => ''
);

foreach ($specChars as $k => $v) {
    $t = str_replace($k, $v, $t);
}

return $t;
}

	
	function admin_head_all(){
echo'<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>'.site_title.' - Dashboard </title>

        <meta name="description" content="">
        <meta name="author" content="911 Prod">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="'.path_img_admin_files.'/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="'.path_img_admin_files.'/media/favicons/favicon-192x192.png'.x_x_x.'">
        <link rel="apple-touch-icon" sizes="180x180" href="'.path_img_admin_files.'/media/favicons/apple-touch-icon-180x180.png'.x_x_x.'">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
		
				         <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/dropzone/min/dropzone.min.css">
		
		
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="'.path_assets_files.'/css/dashmix.min.css'.x_x_x.'">
		 <link rel="stylesheet" id="css-theme" href="'.path_assets_files.'/css/themes/xplay.min.css'.x_x_x.'">

        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow '.lang_rtl_support.' sidebar_pos_toggle">

      
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="bg-header-dark">
                    <div class="content-header bg-white-10">
                        <!-- Logo -->
                        <a class="font-w600 text-white tracking-wide" href="?type=home">
                            <span class="smini-visible">
                                D<span class="opacity-75">x</span>
                            </span>
                            <span class="smini-hidden">
                                <span class="opacity-75">'.lang_borad.'</span>
                            </span>
                        </a>
                        <!-- END Logo -->

                        <!-- Options -->
                        <div>
                            <!-- Toggle Sidebar Style -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout(\'sidebar_style_toggle\');Dashmix.layout(\'header_style_toggle\');" href="javascript:void(0)">
                                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                            </a>
                            <!-- END Toggle Sidebar Style -->

                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                                <i class="fa fa-times-circle"></i>
                            </a>
                            <!-- END Close Sidebar -->
                        </div>
                        <!-- END Options -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Navigation -->
                    <div class="content-side">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="?type=home">
                                    <i class="nav-main-link-icon fa fa-home"></i>
                                    <span class="nav-main-link-name">'.lang_borad_home.'</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="?type=add_new_topic">
                                    <i class="nav-main-link-icon fa fa-edit"></i>
                                    <span class="nav-main-link-name">'.lang_home_new_post.'</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="?type=fav_set">
                                    <i class="nav-main-link-icon fa fa-star"></i>
                                    <span class="nav-main-link-name">'.lang_menu_fav_seetings.'</span>
                                </a>
                            </li> 
							<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=favfr_set">
                                    <i class="nav-main-link-icon fa fa-star"></i>
                                    <span class="nav-main-link-name">'.lang_menu_fav_seetings.' (FR) </span>
                                </a>
                            </li>
							<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=editpg">
                                    <i class="nav-main-link-icon fa fa-star"></i>
                                    <span class="nav-main-link-name">الحقيبة التعليمية</span>
                                </a>
                            </li>
							<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=up_gallery">
                                    <i class="nav-main-link-icon fa fa-star"></i>
                                    <span class="nav-main-link-name">'.lang_menu_website_uploads.'</span>
                                </a>
                            </li>';
						
							if(ulv == 5){
								echo'
							<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=cats">
                                    <i class="nav-main-link-icon fa fa-bars"></i>
                                    <span class="nav-main-link-name">'.lang_menu_website_categories.'</span>
                                </a>
                            </li>
							<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=stats">
                                    <i class="nav-main-link-icon fa fa-chart-bar"></i>
                                    <span class="nav-main-link-name">'.lang_menu_website_stats.'</span>
                                </a>
                            </li>
							<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=users_set">
                                    <i class="nav-main-link-icon fa fa-user-cog"></i>
                                    <span class="nav-main-link-name">'.lang_menu_users_seetings.'</span>
                                </a>
                            </li>
								<li class="nav-main-item">
                                <a class="nav-main-link" href="?type=gen_set">
                                    <i class="nav-main-link-icon fa fa-tools"></i>
                                    <span class="nav-main-link-name">'.lang_menu_website_seetings.'</span>
                                </a>
                            </li>';
								
									}
							echo'
                            
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div>
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                   
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div>
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">'.showname.'<span>
                                <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                                   '.lang_user_options.'
                                </div>
                                <div class="p-2">
                                    <a class="dropdown-item" href="?type=my_posts">
                                        <i class="far fa-file-alt mr-1"></i> '.lang_my_posts.'
                                    </a>
                                    <a class="dropdown-item" href="?type=my_settings">
                                        <i class="si si-settings mr-1 mr-1"></i> '.lang_profile_settings.'
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>


                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="?type=logout"  onClick="return confirm(\''.lang_logout_confirm.'\')">
                                        <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> '.lang_logout.'
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->



                 
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

        

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-header-dark">
                    <div class="bg-white-10">
                        <div class="content-header">
                            <div class="w-100 text-center">
                                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->
';

}	
		
	
	
	function footer_admin_dash(){
echo'           
         
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
        <link rel="stylesheet" href="assets/js/plugins/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/flatpickr/flatpickr.min.css">

        <script src="assets/js/dashmix.core.min.js'.x_x_x.'"></script>

        <script src="assets/js/dashmix.app.min.js'.x_x_x.'"></script>
		        <!-- Page JS Plugins -->
		 <script src="assets/js/plugins/summernote/summernote-bs4.min.js'.x_x_x.'"></script>
        <script src="assets/js/plugins/ckeditor/ckeditor.js'.x_x_x.'"></script>
        <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="assets/js/plugins/dropzone/min/dropzone.min.js"></script>
        <script src="assets/js/pages/be_forms_validation.min.js"></script>

        <script src="assets/js/plugins/flatpickr/flatpickr.min.js"></script>


        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.js"></script>



        <!-- Page JS Helpers (CKEditor plugin) -->
        <script>jQuery(function(){CKEDITOR.config.height = \'460\';
		Dashmix.helpers([\'ckeditor\',\'summernote\' ,\'flatpickr\', \'select2\']);});
		</script>
    </body>
</html>
';
	}	
		
	function footer_admin_all($add_to_footer){
	
	echo'
	
                  
                 


            </main>
            <!-- END Main Container -->

	
            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Powred By <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">911 Prod</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="#">Al Fayrouz Center</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Apps</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <!-- CRM -->
                                        <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-speedometer fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    CRM
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END CRM -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Products -->
                                        <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-rocket fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Products
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Products -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Sales -->
                                        <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-plane fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Sales
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Sales -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Payments -->
                                        <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-wallet fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Payments
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Payments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Modal -->
        </div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out '.folder_assets.'_es6/main/bootstrap.js'.x_c.' for more info.

            If you like, you could also include them separately directly from the '.folder_assets.'js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            '.folder_assets.'js/core/jquery.min.js'.x_c.'
            '.folder_assets.'js/core/bootstrap.bundle.min.js'.x_c.'
            '.folder_assets.'js/core/simplebar.min.js'.x_c.'
            '.folder_assets.'js/core/jquery-scrollLock.min.js'.x_c.'
            '.folder_assets.'js/core/jquery.appear.min.js'.x_c.'
            '.folder_assets.'js/core/js.cookie.min.js'.x_c.'
        -->
        <script src="'.folder_assets.'js/oneui.core.min.js'.x_c.'"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at '.folder_assets.'_es6/main/app.js'.x_c.'
        -->
        <script src="'.folder_assets.'js/oneui.app.min.js'.x_c.'"></script>
    </body>
</html>
';

        if(add_js_to_footer!="add_js_to_footer"){
        	echo add_js_to_footer;
        }
  
}	
		
		
	function time_calculate($time){
   if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
	
	if($minutes ==0){
		$min_text = "";
		}
		else if($minutes ==1){
		$min_text = "- %02d minute";
		}else{
		$min_text = "- %02d minutes";
		}
			
		
	if($hours <= 1){
		$format = "%02d heure $min_text";
	}else {
		$format = "%02d heures $min_text";
	}
    return sprintf($format, $hours, $minutes);
	}		
		
		
	function alert_message($color,$title,$text){
	echo'<div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                   <div class="block block-rounded block-themed">
                                <div class="block-header bg-'.$color.'">
                                    <h3 class="block-title">'.$title.'</h3>
                                    <div class="block-options">
                                       
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>'.$text.'</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>';
	}
			



	function chekstyle($a,$b,$value){
		if($a==$b){
		return $value;
		}
	}
		function chekstyle_db($a,$b,$value,$c,$d){
		if($a==$b and $c==$d){
		return $value;
		}
	}
	
	

	function SuccesAdmin($title=""){
echo'               
		<div class="box success">
					<p>'.$title.'</strong>. </p>
				</div>';
	}
		



	function infomsg($typeofinfo,$variable){
		if ($typeofinfo==1){
			$class_alert="primary";
		}
		else if ($typeofinfo==2){
			$class_alert="secondary";
		}	
		else if ($typeofinfo==3){
			$class_alert="success";
		}
		else if ($typeofinfo==4){
			$class_alert="warning";
		}
		else if ($typeofinfo==5){
			$class_alert="danger";
		}
		else if ($typeofinfo==6){
			$class_alert="dark";
		}
		else if ($typeofinfo==7){
			$class_alert="light";
		}
		
	echo'  
	
	
	 <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Alerts -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                        </div>
                        <div class="block-content">
                            <!-- Default -->
                            <div class="row">
                               
                                <div class="col-lg-12">
                                    <div class="alert alert-'.$class_alert.'" role="alert">
                                        <p class="mb-3"><center>'.$variable.'</center></p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Default -->

            
                        </div>
                    </div>
                    <!-- END Bootstrap Alerts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
	
	';
	}
	
	function gourlwithsec($seconds,$urltogo){
	// echo'  <meta http-equiv="refresh" content="'.$seconds.';URL='.$urltogo.'>';
	echo'
    <script>
        var timer = setTimeout(function() {
            window.location=\''.$urltogo.'\'
        }, '.$seconds.'000);
    </script>';	
	}

function adminBox($title,$text,$color="green",$width=60,$padding=12,$center=true){
		echo"
		<table".($width>0 ? " width=\"{$width}%\"" : "")." cellSpacing=\"0\" cellPadding=\"0\" border=\"0\"".($center ? " align=\"center\"" : "")." border=\"0\">
			<tr>
				<td><img src=\"images/boxs/box_{$color}_left.gif\" width=\"4\" height=\"30\" border=\"0\"></td>
				<td align=\"center\" style=\"height:12px;padding:6px;font-size:11px;background-image:url(images/boxs/box_".$color."_center.gif);background-repeat:repeat-x\"><b>$title</b></td>
				<td><img src=\"images/boxs/box_{$color}_right.gif\" width=\"4\" height=\"32\" border=\"0\"></td>
			</tr>
			<tr>
				<td style=\"width:4px;height:99%;background-image:url(images/boxs/box_right.gif);background-repeat:repeat-y\"></td>
				<td style=\"padding:{$padding}px;background-color:#ffffff\">$text</td>
				<td style=\"width:4px;height:99%;background-image:url(images/boxs/box_left.gif);background-repeat:repeat-y\"></td>
			</tr>
			<tr>
				<td><img src=\"images/boxs/box_down_left.gif\" width=\"4\" height=\"4\" border=\"0\"></td>
				<td style=\"height:4px;background-image:url(images/boxs/box_down.gif);background-repeat:repeat-x\"></td>
				<td><img src=\"images/boxs/box_down_right.gif\" width=\"4\" height=\"4\" border=\"0\"></td>
			</tr>
		</table>";
	}
	
	

function cleanQuery($string){
		$hackerKeys=array(
			'chr(','chr=','chr%20','%20chr','wget%20','%20wget','wget(','cmd=','%20cmd','cmd%20','rush=','%20rush',
			'rush%20','union%20','%20union','union(','union=','echr(','%20echr','echr%20','echr=','esystem(',
			'esystem%20','cp%20','%20cp','cp(','mdir%20','%20mdir','mdir(','mcd%20','mrd%20','rm%20','%20mcd',
			'%20mrd','%20rm','mcd(','mrd(','rm(','mcd=','mrd=','mv%20','rmdir%20','mv(','rmdir(','chmod(',
			'chmod%20','%20chmod','chmod(','chmod=','chown%20','chgrp%20','chown(','chgrp(','locate%20','grep%20',
			'locate(','grep(','diff%20','kill%20','kill(','killall','passwd%20','%20passwd','passwd(','telnet%20',
			'vi(','vi%20','insert%20into','select%20','nigga(','%20nigga','nigga%20','fopen','fwrite','%20like',
			'like%20','$_request','$_get','$request','$get','.system','HTTP_PHP','&aim','%20getenv','getenv%20',
			'new_password','/etc/password','/etc/shadow','/etc/groups','/etc/gshadow','HTTP_USER_AGENT',
			'HTTP_HOST','/bin/ps','wget%20','uname\x20-a','/usr/bin/id','/bin/echo','/bin/kill','/bin/','/chgrp',
			'/chown','/usr/bin','g\+\+','bin/python','bin/tclsh','bin/nasm','perl%20','traceroute%20','ping%20',
			'.pl','/usr/X11R6/bin/xterm','lsof%20','/bin/mail','.conf','motd%20','HTTP/1.','.inc.php','config.php',
			'cgi-','.eml','file\://','window.open','<SCRIPT>','javascript\://','img src','img%20src','.jsp',
			'ftp.exe','xp_enumdsn','xp_availablemedia','xp_filelist','xp_cmdshell','nc.exe','.htpasswd','servlet',
			'/etc/passwd','wwwacl','~root','~ftp','.js','.jsp','.history','bash_history','.bash_history','~nobody',
			'server-info','server-status','reboot%20','halt%20','powerdown%20','/home/ftp','/home/www',
			'secure_site,ok','chunked','org.apache','/servlet/con','<script','/robot.txt','/perl',
			'mod_gzip_status','db_mysql.inc','.inc','select%20from','select from','drop%20','.system','getenv',
			'http_','_php','<?php','?>','sql=','_global','global_','global[','_server','server_','server[',
			'phpadmin','root_path','_globals','globals_','globals[','ISO-8859-1','http://www.google.de/search',
			'?hl=','.txt','.exe','union','google.de/search','yahoo.de','lycos.de','fireball.de','ISO-'
		);
		$string=@strtolower($string);
		$proString=@str_replace($hackerKeys,'******',$string);
		if($string!=$proString){
			$place=$_SERVER['REQUEST_URI'];
			$ip=ip;
			$date=time();
			$file="system_security_ip_check.ap";
			$f=@fopen($file,"a");
			@chmod($file,0777);
			@fwrite($f,"$place{>:c:<}$ip{>:c:<}$date{>:r:<}\r\n");
			@fclose($f);
			$string=@htmlspecialchars($string);
			// print "done";
			$this->homepage_ar();
			echo'  <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="rtl">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_prob_hack_error.'</span></h2>
                     <p class="">'.lang_prob_hack_error_text.'<br>'.$ip.'
                            </p>
							<center><img class="col-lg-3" src="'.website_path.'assets/imgs/noplz.gif" alt=""></center>
                    </div>
                </div>
				
              
                        
                
            </div>
        </main>';

			$this->footer_arabic();
			// print msgBox("<center><font face='Times'><b>ÇáÑÇÈØ ÇáÐí ÅÊÈÚÊå ÛíÑ ÕÍíÍ<br><br><b> http://{$_SERVER['HTTP_HOST']}$proString </b><br><br>æÊÚÊÈÑ åÐå ÇáÚãáíÉ ãÍÇæáÉ ÇÎÊÑÇÞ ááãæÞÚ<br>Êã ÊÓÌíá ÈíÇäÇÊ ÌåÇÒß áÏíäÇ æÝí ÍÇáÉ ÊßÑÇÑ ÇáãÍÇæáÉ ÓíÊã ãäÚß ãä ÏÎæá ÇáãæÞÚ<br>","red",10,0,false,false,false);
			exit();
		}
		return $proString;
	}


function msg($type,$text){
echo"<div id=\"$type\"><span class=\"icon_$type\">$text</span></div>";
}

function navSep($val,$url,$add=false,$showSep=true){
	if($add==true){
	$target = 'target="_blank"';
	}
	if($showSep==true){
	$bar = '<img src="images/styles/bar.gif">';
	}		
	echo"&nbsp;<a $target class=\"outSubMenu\" href=\"$url\">$val</a>&nbsp;$bar&nbsp;";		
	}
	

	
	
function display($name,$ret=false){
		global $db;
		$html=$db->get_sql("template","text","name",$name);
		// $html=$db->get_sql("template",$var,$field,$value,$line="");
		$html=$this->htmlCode($html);
		if($ret){
			return $html;
		}
		else{
			echo $html;
		}
	}
	function htmlCode($html){
		extract($GLOBALS);
		$html="<code>$html</code>";
		$html=stripslashes($html);
		$html=eregi_replace("{{","</code>",$html);
		$html=eregi_replace("}}","<code>",$html);
		$html=$this->condition($html);
		$html=$this->loopEach($html);
		$html=$this->loop($html);
		$html=$this->sql($html);
		$html=addslashes($html);
		$html=eregi_replace("\<code>","echo\"",$html);
		$html=eregi_replace("\</code>","\";",$html);
		$html.='return true;';
		ob_start();
		$html=eval($html);
		$html=ob_get_contents();
		ob_end_clean();
		return $html;
	}
	function condition($html){
		$html=preg_replace('/\<if condition\=\"(.*)\">/','</code> if($1){ <code>',$html);
		$html=eregi_replace("\<else>",'</code>} else{ <code>',$html);
		$html=preg_replace('/\<\/if\>/','</code>} <code>',$html);
		return $html;
	}
	function sql($html){
		$html=preg_replace('#<sql sql="(.*)" result="(.*)" fetch="(.*)">#','</code> $count=0;while($2=@$db->fetch$3($1)){ <code>',$html);
		$html=preg_replace('/\<\/sql\>/','</code> $count++;} <code>',$html);
		return $html;
	}
	function loop($html){
		$html=preg_replace('#<loop value="(.*)" star="(.*)" end="(.*)">#','</code> for($1=$2;$1<$3;$1++){ <code>',$html);
		$html=preg_replace('/\<\/loop\>/','</code> } <code>',$html);
		return $html;
	}
	function loopEach($html){
		$html=preg_replace('/\<foreach array\=\"(.*)\" key\=\"(.*)\" val\=\"(.*)\">/','</code> foreach($1 as $2=>$3){ <code>',$html);
		$html=preg_replace('/\<\/foreach\>/','</code> } <code>',$html);
		return $html;
	}
			function chooses($v1,$v2,$type){
		if($v1==$v2){
			$text=array('s'=>'selected','c'=>'checked');
			return $text["{$type}"];
		}
	}
		function button($value,$events='',$ret=true){
		$button="<input  type=\"button\" $events value=\"$value\">";
		if($ret) return $button;
		else echo $button;
		}
function input($size=200,$att=array(),$ret=true){
		$input="";
		if(!in_array("type",array_keys($att))){
			$att['type']='text';
		}
		foreach($att as $tag=>$value){
			$input.=" {$tag}=\"$value\"";
		}
		$code=$this->fieldBox("<input{$input} style=\"width:{$size}px;border:gray 0px solid;background:none transparent scroll repeat 0% 0%\">");
		if($ret){
			return $code;
		}
		else{
			echo $code;
		}
	}
	function fieldBox($text,$width=0){
		$code="
		<table dir=\"ltr\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
			<tr>
				<td style=\"background:url(images/boxes/input1.gif) no-repeat 0px 0px;width:4px;height:30px;\"></td>
				<td style=\"background:url(images/boxes/input2.jpg) repeat-x 0px 0px;height:30px".($width>0 ? ";width:{$width}px" : "")."\" dir=\"rtl\">$text</td>
				<td style=\"background:url(images/boxes/input3.gif) no-repeat 0px 0px;width:4px;height:30px;\"></td>
			</tr>
		</table>";
		return $code;
	}
function setCookie($name,$val,$expire=-1){
		$expire=($expire>=0?$expire:expire);
		@setcookie($this->cnf['cookie']['prefix'].$name,$val,$expire);
	}
	function getCookie($name){
		$val=$_COOKIE[$this->cnf['cookie']['prefix'].$name];
		return $val;
	}
	function setSession($name,$val){
		$_SESSION["{$this->cnf['cookie']['prefix']}{$name}"]=$val;
	}
	function getSession($name){
		$val=$_SESSION["{$this->cnf['cookie']['prefix']}{$name}"];
		return $val;
	}
	function quick($url="index.php"){
		header("Location: $url");
		exit();
	}
	function go_To($url="index.php"){
		echo"<script type=\"text/javascript\">window.location='$url';</script>";
		exit();
	}		
	function goToUrl($url="index.php"){
		echo"<script type=\"text/javascript\">window.location='$url';</script>";
		exit();
	}	

function getLogin($chk=''){
	global $db;
	$userName=$this->getCookie('loginAdminName');
	$userPass=$this->getCookie('loginAdminPass');
	$db->line(__line__);
	$db->select("users WHERE name = '$userName' AND pass = '$userPass' AND status = 1","id,level");
	if($db->num_rows()>0){
		$get=($chk=='arr'?$db->fetch_array():true);
	}
	else{
		$get=($chk=='arr'?array('id'=>0,'level'=>0):false);
	}
	return $get;
}
	
function setLogin($x){
	global $db;
	$expire=($x['remember']==1?time()+(60*60*24*30):0);
	$this->setCookie('loginAdminName',$x['loginAdminName'],$expire);
	$this->setCookie('loginAdminPass',md5($x['loginAdminPass']),$expire);
	header("index.php?type=login");
}	
	
//* Clean//	
function cleanHTML($text,$inline=false){
        $text=eregi_replace("<[[:space:]]*([^>]*)[[:space:]]*>",'<\\1>',$text);
		$text=str_replace(array("<d>","</d>"),"",$text);
        $text=eregi_replace("<[[:space:]]* img[[:space:]]*([^>]*)[[:space:]]*>",'',$text);
        $text=eregi_replace("<a[^>]*href[[:space:]]*=[[:space:]]*\"?javascript[[:punct:]]*\"?[^>]*>",'',$text);
        $tmp="";
        while(ereg("<(/?[[:alpha:]]*)[[:space:]]*([^>]*)>",$text,$reg)){
                $i=strpos($text,$reg[0]);
                $l=strlen($reg[0]);
                if($reg[1][0]=="/"){
					$tag=strtolower(substr($reg[1],1));
				}
                else{
					$tag=strtolower($reg[1]);
				}
                $tmp.=substr($text,0,$i);
                $text=substr($text,$i+$l);
        }
        $text=$tmp.$text;
		if($inline){
			$text=$this->inlineText($text);
		}
        return trim($text);
	}
	function convertBadWords($text){
		// $sql=$db->query("SELECT code,val FROM ".prefix."badwords",__file__,__line__);
		// while($rs=$this->db->fetchRow($sql)){
			// $text=eregi_replace($rs[0],$rs[1],$text);
		// }
		// return $text;
	}
	function cleanText($text,$icnov=false,$char=array('utf-8','windows-1256')){
		$text=$this->cleanHTML($text);
		$text=$this->convertBadWords($text);
		if($icnov){
			$text=iconv($char[0],$char[1],$text);
		}
		return $text;
	}	
///////// ***** Admin Section ***** ////////




/******************* New Admin Section *******************/
	
function paging($sql,$link,$id='id',$numPage=0){
		global $db;
		// $count=$db->db_count($sql,$id);
		$dbsql = $db->select($sql,$id);
		$count = mysql_num_rows($dbsql);
		$numPage=($numPage==0 ? num_pages : $numPage);
		$pages=ceil($count/$numPage);
		$pages=($pages==0?1:$pages);
		$pg=(pg>0?pg:1);
		if($pages>1){
			if($pg>1){
				$first=" href=\"{$link}pg=1\" ";
				$prev=" href=\"{$link}pg=".($pg-1)."\"";
			}
			else{
				$firstDis="Dis";
			}
			$code="<br>
			<div class=\"btn-toolbar mt-10\" role=\"toolbar\" aria-label=\"Pagination\">
			<table cellPadding=\"0\" cellSpacing=\"2\" border=\"0\" style=\"margin-left:auto;margin-right:auto;\"><tr>
			<td valign=\"top\"><a$first><div class=\"pgFirst$firstDis\"></div></a></td>
			<td valign=\"top\"><a$prev><div class=\"pgPrev$firstDis\"></div></a></td>";
			if($pg>1){
				$equal=$pg-($pg==2?1:2);
				for($x=$equal;$x<$pg;$x++){
					$code.="<td align=\"center\" valign=\"top\"><a href=\"{$link}pg=$x\"><div valign=\"middle\" class=\"btn btn-outline-dark\">$x</div></a></td>";
				}
			}
			$code.="<td align=\"center\" valign=\"top\"><a><div class=\"btn btn-success\">$pg </div></a></td>";
			if($pg<$pages){
				$equal=$pg+($pg==($pages-1)?1:2);
				for($x=$pg+1;$x<=$equal;$x++){
					$code.="<td align=\"center\" valign=\"top\"><a href=\"{$link}pg=$x\"><div class=\"btn btn-outline-dark\">$x</div></a></td>";
				}
				$next=" href=\"{$link}pg=".($pg+1)."\" ";
				$last=" href=\"{$link}pg=$pages\" ";
			}
			else{
				$lastDis="Dis";
			}
			$code.="
			<td valign=\"top\">&nbsp;<a$next><div class=\"pgNext$lastDis\"></div></a>&nbsp;</td>
			<td valign=\"top\">&nbsp;<a$last><div class=\"pgLast$lastDis\"></div></a>&nbsp;</td>
			</tr></table></div><br>";
		}

		return $code;
	}	
	
function paging_home($sql,$link,$id='id',$numPage=0){
	
			global $db;
		// $count=$db->db_count($sql,$id);
		$dbsql = $db->select($sql,$id);
		$count = mysql_num_rows($dbsql);
		$numPage=($numPage==0 ? num_pages : $numPage);
		$pages=ceil($count/$numPage);
		$pages=($pages==0?1:$pages);
		$pg=(pg>0?pg:1);
		if($pages>1){
			if($pg>1){
				$first=" href=\"{$link}/\" ";
				$prev=" href=\"{$link}/".($pg-1)."/\"";
			}
			else{
				$firstDis="Dis";
			}
			$code="<br>
			<div class=\"  mt-10\" role=\"toolbar\" aria-label=\"Pagination\" >
			<table cellPadding=\"0\" cellSpacing=\"2\" border=\"0\" style=\"margin-left:auto;margin-right:auto;\"><tr>
			<td valign=\"top\" ><a$first><div class=\"pgFirst$firstDis\"></div></a></td>
			<td valign=\"top\"><a$prev><div class=\"pgPrev$firstDis\"></div></a></td>";
			if($pg>1){
				$equal=$pg-($pg==2?1:2);
				for($x=$equal;$x<$pg;$x++){
					$code.="<td align=\"center\" valign=\"top\"><a href=\"{$link}$x/\"><div valign=\"middle\" class=\"btttn bar-false\">$x</div></a></td>";
				}
			}
			$code.="<td align=\"center\" valign=\"top\"><a><div class=\"btttn ar-false\">$pg </div></a></td>";
			if($pg<$pages){
				$equal=$pg+($pg==($pages-1)?1:2);
				for($x=$pg+1;$x<=$equal;$x++){
					$code.="<td align=\"center\" valign=\"top\"><a href=\"{$link}$x/\"><div class=\"btttn ar-false\">$x</div></a></td>";
				}
				$next=" href=\"{$link}".($pg+1)."/\" ";
				$last=" href=\"{$link}$pages\"/ ";
			}
			else{
				$lastDis="Dis";
			}
			$code.="
			<td valign=\"top\">&nbsp;<a$next><div class=\"pgNext$lastDis\"></div></a>&nbsp;</td>
			<td valign=\"top\">&nbsp;<a$last><div class=\"pgLast$lastDis\"></div></a>&nbsp;</td>
			</tr></table></div><br>";
		}

		return $code;
	}	
	

function pgLimit($max){
		$pg=(pg>0 ? pg : 1);
		$limit=(($pg*$max)-$max);
		return $limit;
	}
	

	function field_Box($text,$width=0){
		$code="
		<table dir=\"rtl\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
			<tr>
				<td style=\"background:url(images/boxes/input3.gif) no-repeat 0px 0px;width:4px;height:30px;\"></td>
				<td style=\"background:url(images/boxes/input2.jpg) repeat-x 0px 0px;height:30px".($width>0 ? ";width:{$width}px" : "")."\" dir=\"ltr\">$text</td>
				<td style=\"background:url(images/boxes/input1.gif) no-repeat 0px 0px;width:4px;height:30px;\"></td>
			</tr>
		</table>";
		return $code;
	}	
	function choose($v1,$v2,$type){
			if($v1==$v2){
				$text=array('s'=>'selected','c'=>'checked');
				return $text["{$type}"];
			}
		}





 function article_photo($id,$type) {
	global $db;
	$photourl = $db->get("articles","photo",$id);
	$up_folder = $db->get("articles","up_folder",$id);
	if($id<=528){
	if ($up_folder!=""){
	if($type=="S"){
		$value=$up_folder."/c_".$photourl;
		}elseif($type=="M"){
		$value=$up_folder."/m_".$photourl;
		}elseif($type=="R"){
		$value=$up_folder."/r_".$photourl;
		}
	}else{
		if($type=="S"){
		$value="uploads/S/$photourl";
		}elseif($type=="M"){
		$value="uploads/M/$photourl";
		}elseif($type=="R"){
		$value="uploads/R/$photourl";
		}
	}
	if ($photourl=="noimage.gif"){
		$value = "images/noimage.gif";
	}
	// end old articles
	}else{
		if($type=="S"){
		$value=$up_folder."/c_".$photourl;
		}elseif($type=="M"){
		$value=$up_folder."/m_".$photourl;
		}elseif($type=="R"){
		$value=$up_folder."/r_".$photourl;
		}
		if ($photourl=="noimage.gif"){
		$value = "images/noimage.gif";
	}
	}
	return $value;
 }




























	
}
?>
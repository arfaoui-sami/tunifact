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
	function header(){
	global $title_page,$db,$StyleGet,$big_player;
echo'<!DOCTYPE html>
<html dir="ltr" lang="en-US"  xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!-- Title -->
<title>'.site_title.' '.$title_page.'</title>
<!-- Meta Tags -->
<meta property="fb:admins" content="1485032357"/>
<meta property="og:site_name" content="Magturf.com"/>
<meta property="og:country-name" content="Tunisia" />
<meta property="og:image" content="http://www.magturf.com/minilogo.jpg"/>

';
if(this_page!="video"){
echo'
<meta property="og:type" content="article" />';
}

if(this_page=="programme"){
echo'
<link rel="image_src" href="http://www.magturf.com/images/logo.png"/>';
}
if(this_page=="video"){
echo'
<meta property="og:type" content="video.movie" />
<meta property="og:url" content="http://www.magturf.com/video.php?video='.video.'" />
<link rel="image_src" type="image/jpeg" href="http://i3.ytimg.com/vi/'.$big_player.'/default.jpg />
<meta property="og:image" content="http://i3.ytimg.com/vi/'.$big_player.'/default.jpg"/>';
}
echo'
<meta property="fb:pages" content="1699503113600552" />
<meta name="copyright" content="Copyright © 2013 Webek.net">
<meta name="keywords" content="'.site_keywords.'">
<meta name="description" content="Magturf.com - Magazine courses et elevage de chevaux au Maghreb">
<link rel="index" title="'.site_title.'" href="http://www.magturf.com/" />
  <link rel="stylesheet" href="css_files/k2.css" type="text/css">
  <link rel="stylesheet" href="css_files/system.css" type="text/css">
  <link rel="stylesheet" href="css_files/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css_files/template.css?x=3" type="text/css">
  <link rel="stylesheet" href="css_files/bootstrap-responsive.css" type="text/css">
  <link rel="stylesheet" href="css_files/template-responsive.css" type="text/css">
  <link rel="stylesheet" href="css_files/megamenu.css" type="text/css">
  <link rel="stylesheet" href="css_files/megamenu-responsive.css" type="text/css">
  <link rel="stylesheet" href="css_files/off-canvas.css" type="text/css">
  <link rel="stylesheet" href="css_files/style.css" type="text/css">
  <link rel="stylesheet" href="css_files/blueimp-gallery.min.css" type="text/css">
  <link rel="stylesheet" href="css_files/bootstrap-image-gallery.css" type="text/css">
  <link rel="stylesheet" href="css_files/style(1).css" type="text/css">
  <link rel="stylesheet" href="css_files/style(2).css" type="text/css">
  <link rel="stylesheet" href="css_files/style(3).css" type="text/css">
  <link rel="stylesheet" href="css_files/jquery.bxslider.css" type="text/css">
  <link rel="stylesheet" href="css_files/style(4).css" type="text/css">
  <link rel="stylesheet" href="css_files/style(5).css" type="text/css">
  <link rel="stylesheet" href="css_files/style(6).css" type="text/css">
  <link rel="stylesheet" href="css_files/style(7).css" type="text/css">



  <script src="js_files/mootools-core.js" type="text/javascript"></script>
  <script src="js_files/jquery.min.js" type="text/javascript"></script>
  <script src="js_files/jquery-noconflict.js" type="text/javascript"></script>
  <script src="js_files/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="js_files/core.js" type="text/javascript"></script>
  <script src="js_files/k2.js" type="text/javascript"></script>
  <script src="js_files/caption.js" type="text/javascript"></script>
  <script src="js_files/bootstrap.js" type="text/javascript"></script>
  <script src="js_files/jquery.tap.min.js" type="text/javascript"></script>
  <script src="js_files/off-canvas.js" type="text/javascript"></script>
  <script src="js_files/script.js" type="text/javascript"></script>
  <script src="js_files/menu.js" type="text/javascript"></script>
  <script src="js_files/responsive.js" type="text/javascript"></script>
  <script src="js_files/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="js_files/script(1).js" type="text/javascript"></script>
  <script src="js_files/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
  <script src="js_files/bootstrap-image-gallery.js" type="text/javascript"></script>
  <script src="js_files/script(2).js" type="text/javascript"></script>
  <script src="js_files/jquery.bxslider.js" type="text/javascript"></script>
  <script src="js_files/script(3).js" type="text/javascript"></script>
  <script src="js_files/script(4).js" type="text/javascript"></script>
  <script src="js_files/script(5).js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on(\'load\',  function() {
				new JCaption(\'img.caption\');
			});

	jQuery(document).ready(function($){
		$(\'#noo-cs-182\').noocs({
			animation: \'fade\',
			auto:1,
			repeat:1,
			duration:1000,
			interval:5000,
			control:1,
			pager:0
		});
	});


jQuery(document).ready(function($){
	blueimp.Gallery($("#noo-gallery-lists li a"), $("#blueimp-gallery").data());
});


jQuery(document).ready(function($){
	$(\'#noo_s2161\').nooslider2({
		 auto: 0,
		 speed: 500,
		 interval: 3000,
		 easing: \'linear\'
	});
});


	jQuery(document).ready(function($){
		$(\'#noo-k2i153\').bxSlider({
			mode:\'fade\',
			useCSS:true,
			easing:\'linear\',
			speed:500,
			auto:0,
			infiniteLoop:1,
			pager:1,
			controls:0,
			touchEnabled:false,
			pause:4000
		});
	});


	jQuery(document).ready(function($){
		$(\'#noo_slider148\').nooSliderLite({
			btnPrev: \'#btn_prev148\',
	        btnNext: \'#btn_next148\',
	        btnGo: null,
	        auto: 1,
	        interval: 3000,
	        speed: 500,
	        easing: \'linear\',
	        vertical: false,
	        direction:\'left\',
	        visible: 3,
			image_slider: 0,
			thumbHeight: 68
	       });
	});


jQuery(document).ready(function(){
	jQuery(\'#noo_weather_159\').nooweather({
		unit: \'c\',
		image: 1,
		country: 0,
		highlow:  0,
		wind: 0,
		humidity: 0,
		visibility:  0,
		sunrise:  0,
		sunset: 0,
		forecast: 0,
		link: 0,
		showerror:true,
		linktarget: \'_blank\',
		woeid:  0
	})
});


	jQuery(document).ready(function($){
		$(\'#noo-ticker142\').nooticker({
			interval:3000,
			mode    :\'horizontal_left\',
			buttons : null,
			anOptions: {
				duration: 500,
				easing: \'linear\',
				queue:false
			}
		});
	});

  </script>

    
<!-- META FOR IOS & HANDHELD -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="YES">
<!-- //META FOR IOS & HANDHELD -->




<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link href="/test/templates/noo_noonews/css/template-ie8.css" rel="stylesheet" />
<![endif]-->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- For IE6-8 support of media query -->
<!--[if lt IE 9]>
<script type="text/javascript" src="/test/plugins/system/t3/base/js/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<link href="/test/templates/noo_noonews/css/ie7only.css" rel="stylesheet" />
<![endif]-->

<!-- You can add Google Analytics here-->
  </head>

  <body>
  
	
<!-- HEADER -->
<header id="top-header" class="top-header">
	<div class="container ">
		<div class="row">

						<div class="span4 head-login">     
			  <div class="noo-ticker">
			<div class="noo-ticker-headtext">
			<span></span>
		</div>
					<div id="noo-ticker142" class="noo-ticker-inner" style="overflow: hidden; position: relative !important; height: 18px;">
					
					
				</div>
	</div>
			</div>
			

						<div class="span8 head-top">     
			  
<ul class="nav  nav-pills">

<li class="item-118">	<a href="contacts.php">contacts</a></li></ul>

			</div>
			
		</div>
	</div>
</header>
<!-- //HEADER -->
	
    
<!-- HEADER -->
<header id="t3-header" class="container t3-header">
  <div class="row">
	
		<div class="span3 background-header">
		

<div class="custom">
	<p><a href="derby_maroc.php">
	<img src="./img_files/derby.jpg" height="120"></a></p></div>
	</div>
		
    <!-- LOGO -->
    <div class="span6 logos">
		<div id="date">'.date_show_fr().'</div>
		<div class="slogo-image" align="center">
				<a href="index.php?type=ar&title=Magazine_courses_et_elevage_de_chevaux_au_Maghreb" title="MagTurf">
					<img src="img_files/logo.png">
				</a>
		<div id="directeur">Directeur de la publication : Mondher Zouiten</div>
		</div>
    </div>
    <!-- //LOGO -->

        <!-- HEAD SEARCH -->
    <div class="span3 background-header"><a href="emirates.php">
			<img src="pub/ads_here_1.jpg" height="120"></a>
    </div>
    <!-- //HEAD SEARCH -->
    
  </div>
</header>
<!-- //HEADER -->
    
    
<!-- MAIN NAVIGATION -->
<nav id="t3-mainnav" class="wrap t3-mainnav navbar-collapse-fixed-top">
  <div class="container">	
  <div class="navbar">
    <div class="navbar-inner">
    
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <i class="icon-reorder">Sections</i>
      </button>

  	  <div class="nav-collapse collapse always-show">
              <div class="t3-megamenu" data-responsive="true">
<ul class="nav navbar-nav level0">
<li data-id="101" data-level="1"><a class="" href="index.php?type=ar&title=Magazine_courses_et_elevage_de_chevaux_au_Maghreb" data-target="#">Maghreb </a></li>
<li data-id="101" data-level="1"><a class="" href="index.php?type=int&title=Magazine_courses_et_elevage_de_chevaux_International" data-target="#">International</a></li>
<li class="dropdown mega" data-id="108" data-level="1">
<a class=" dropdown-toggle" href="#" data-target="#" data-toggle="dropdown">Archives <b class="caret"></b></a>
<div class="nav-child dropdown-menu mega-dropdown-menu"><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span12 mega-col-nav" data-width="12"><div class="mega-inner">
<ul class="mega-nav level1">
<li data-id="179" data-level="2">
<a class="" href="archives.php?type=ar&title=archives_Magazine_courses_et_elevage_de_chevaux_au_Maghreb" data-target="#">Maghreb</a>
</li>
<li data-id="180" data-level="2">
<a class="" href="archives.php?type=int&title=archives_Magazine_courses_et_elevage_de_chevaux_International" data-target="#">International</a>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>
<li class="dropdown mega" data-id="119" data-level="1">
<a class=" dropdown-toggle" href="#" data-target="#" data-toggle="dropdown">R&#233;sultats<b class="caret"></b></a>
<div class="nav-child dropdown-menu mega-dropdown-menu"><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span12 mega-col-nav" data-width="12"><div class="mega-inner">
<ul class="mega-nav level1">
<li data-id="173" data-level="2">
<a class="" href="resultats.php?type=tn&title=Resultats_techniques_Tunisie" data-target="#">Tunisie</a>
</li>
<li data-id="174" data-level="2">
<a class="" href="resultats.php?type=ma&title=Resultats_techniques_Maroc" data-target="#">Maroc</a>
</li>
<li data-id="176" data-level="2">
<a class="" href="resultats.php?type=dz&title=Resultats_techniques_Algerie" data-target="#">Algerie </a>
</li>
<li data-id="176" data-level="2">
<a class="" href="resultats.php?type=int&title=Resultats_techniques_international" data-target="#">International </a>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>
<li class="dropdown mega" data-id="120" data-level="1">
<a class=" dropdown-toggle" href="#" data-target="#" data-toggle="dropdown">Pronostics <b class="caret"></b></a>
<div class="nav-child dropdown-menu mega-dropdown-menu"><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span12 mega-col-nav" data-width="12"><div class="mega-inner">
<ul class="mega-nav level1">
<li data-id="183" data-level="2">
<a class="" href="pronostics.php?type=tn&title=Les_Pronostics_Tunisie" data-target="#">Tunisie</a>
</li>
<li data-id="184" data-level="2">
<a class="" href="pronostics.php?type=fr&title=Les_Pronostics_France" data-target="#">France </a>
</li>
<li data-id="184" data-level="2">
<a class="" href="pronostics.php?type=int&title=Les_Pronostics_International" data-target="#">International</a>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>
<li class="dropdown mega" data-id="121" data-level="1">
<a class=" dropdown-toggle" href="#" data-target="#" data-toggle="dropdown">Programme<b class="caret"></b></a>
<div class="nav-child dropdown-menu mega-dropdown-menu" style=""><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span12 mega-col-nav" data-width="12"><div class="mega-inner">
<ul class="mega-nav level1">
<li data-id="169" data-level="2">
<a class="" href="programme.php?type=tn&title=Programme_de_Course_Tunisie" data-target="#">Tunisie </a>
</li>
<li data-id="170" data-level="2">
<a class="" href="programme.php?type=ma&title=Programme_de_Course_Maroc" data-target="#">Maroc </a>
</li>
<li data-id="171" data-level="2">
<a class="" href="programme.php?type=dz&title=Programme_de_Course_Algerie" data-target="#">Algerie </a>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>
<li data-id="101" data-level="1"><a class="" href="albums.php?title=album_phtos_de_Course_Tunisie_Algerie_Maroc" data-target="#">Photos </a></li>
<li class="dropdown mega" data-id="121" data-level="1">
<a class=" dropdown-toggle" href="video.php?title=video_de_Course_Tunisie" data-target="#" data-toggle="dropdown">Videos<b class="caret"></b></a>
<div class="nav-child dropdown-menu mega-dropdown-menu" style=""><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span12 mega-col-nav" data-width="12"><div class="mega-inner">
<ul class="mega-nav level1">
<li data-id="169" data-level="2">
<a class="" href="video.php?title=video_de_Course_Tunisie" data-target="#">Tunisie </a>
</li>
<li data-id="170" data-level="2">
<a class="" href="vmaroc.php?title=video_de_Course_Maroc" data-target="#">Maroc </a>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>



<li class="video" data-id="127" data-level="1" data-class="photo">
<a class="" href="http://www.facebook.com/Magturf" data-target="#">Photo </a>
</li>



</ul>
</div>
        		</div>
    </div>
  </div>
      <div class="span3 head-search">
		<div class="search">
    <form action="./index_files/index.html" method="post" class="form-inline">
    		<label for="mod-search-searchword" class="element-invisible">Rechercher</label> <input name="searchword" id="mod-search-searchword" maxlength="20" class="inputbox search-query" type="text" size="20" value="Recherche..." onblur="if (this.value==&#39;&#39;) this.value=&#39;Recherche...&#39;;" onfocus="if (this.value==&#39;Recherche...&#39;) this.value=&#39;&#39;;">    	<input type="hidden" name="task" value="search">
    	<input type="hidden" name="option" value="com_search">
    	<input type="hidden" name="Itemid" value="244">
    </form>
</div>

    </div>
    </div>
</nav>
<!-- //MAIN NAVIGATION -->	
	
<!-- NAV HELPER -->
<section class="wrap t3-slider">
	<div class="container">
		<div class="slider">
			<div id="main-slider">
	<div id="inner-slider">
		<div id="noo_slider148" class="noo-slider horizontal" style="overflow: hidden; position: relative; z-index: 2; left: 0px; width: 939px;">
			<div id="wapper" class="noo-slider-wapper" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 939px;"> 
								<ul class="noo-slider-inner" style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 5634px; left: -939px;">
								
						
								';
								$sql=$db->select("articles where status='1' order by id desc LIMIT 12 ","id,title");
$count=0;
while($rs=$db->fetchAssoc($sql)){
$id = $rs['id'];
$title = $rs['title'];
echo'
							<li class="noo-slider-item" style="overflow: hidden; float: left; padding: 5px; margin: 0px; width: 303px;">
								<div class="noo-content-slider" style="height: 100px;">
														<div class="noo-slider-image">
											<a href="articles.php?id='.$id.'" title="'.$title.'">
											<img src="'.$this->article_photo($id,'S').'" width="90" height="68"></a>	
											</div>
							<div class="noo-slider-info">
							<h5><a href="articles.php?id='.$id.'" title="'.$title.'"><span>'.$title.'</span></a></h5>
																																																		</div>

								</div>
							</li>';
						}
						echo'	
					
							
							
							</ul>
								</div>
		</div>
	</div>
</div>
	<div class="noo-slider-control">
		<a id="btn_next148" href="javascript:void(0)" class="noo-slider-btn btn-next">Next</a>
		<a id="btn_prev148" href="javascript:void(0)" class="noo-slider-btn btn-prev">Prev</a>
	</div>

		</div>
		
		<!-- 
	<div align="center"  class="sec_ad" style=" margin:25px;">
<a href="http://www.arqana.com/catalogue/vente_d-elevage__05_decembre_2015/205" target="_blank"><img border="0" src="pub/PubMagturf29.jpg"></a>
</div>
 -->

	<div align="center"  class="sec_ad" style=" margin:25px;">
<a href="#">
<img border="0" src="pub/Magturf_fevrier_HD.jpeg"></a>
</div>


	<div align="center"  class="sec_ad">
<a href="#"><img border="0" src="pub/mezghani-2015.jpg?x=2s"></a>
</div>

</div>
	
</section>

<!-- //NAV HELPER -->
<!-- NAV HELPER -->
<!-- //NAV HELPER -->
    <section id="t3-mainbody" class="container t3-mainbody onsidebar2">
		<div class="row">
    
		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content span8">
			<div class="main-content">
	
';
	    // die('<div align="center"><h1 class="entry-title"><a href="#" class="home_text"><h2>Magturf est en cours de maintenance ...</h2></a></h1></div>');
		
	}	

	
	function admin_head_all(){
		echo'<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>'.site_title.'</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css?x1" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>
	<!-- /theme JS files -->

</head>';
if(this_current_page!="login_page_define"){
echo'
<body class="navbar-top">
	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo2.png?X" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>


			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/tn.png" class="position-left" alt="">
						العربية
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="Francais"><img src="assets/images/flags/fr.png" alt=""> Français</a></li>
						<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="arabic"><img src="assets/images/flags/tn.png" alt=""> العربية</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-notification2"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">3</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left"><img src="assets/images/MyProfile.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>
						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="'.userphoto.'" alt="">
						<span>'.showname.'</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="?type=logout"><i class="icon-switch2"></i> '.lang_login_logout.'</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-fixed">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="'.userphoto.'" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">'.showname.' '.username.'</span>
									<div class="text-size-mini text-muted">
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span></span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="?type=home"><i class="icon-home4"></i><b> <span>الصفحة الرئيسية</span></b></a></li>
						
								<li>
									<a href="#"><i class="icon-cog6"></i><span><b>إعدادات العضوية</b></span></a>
									<ul>
										<li><a href="#">'.lang_stock_management_vignette.'</a></li>
										<li><a href="#">'.lang_stock_management_insurance.'</a></li>
										<li><a href="#">'.lang_stock_management_technical_visit.'</a></li>
									</ul>
								</li>
								<li>
								<a href="#"><i class="icon-archive"></i> <span><b>قائمة الدروس</b></span> </a>
									<ul>
										<li><a href="#">'.lang_client_management_list.'</a></li>
										<li><a href="#">'.lang_client_management_add.'</a></li>
										<li><a href="#">'.lang_stock_management_technical_visit.'</a></li>
									</ul>
								</li>		
								<li>
								<a href="#"><i class="icon-question4"></i> <span><b>الإستفسارات</b></span> <span><span class="label bg-orange-400">3</span></a>
									<ul>
										<li><a href="#">'.lang_invoice_management_list.'</a></li>
										<li><a href="#">'.lang_client_management_add.'</a></li>
										<li><a href="#">'.lang_invoice_management_new.'</a></li>
									</ul>
								</li>		
								<li>
								<a href="#"><i class=" icon-cash3"></i> <span><b>الحسابات المالية</b></span> </a>
									<ul>
										<li><a href="#">'.lang_invoice_management_list.'</a></li>
										<li><a href="#">'.lang_client_management_add.'</a></li>
										<li><a href="#">'.lang_invoice_management_new.'</a></li>
									</ul>
								</li>
								
								<li><a href="#"><i class="icon-bubbles"></i> <span><b>التواصل الإداري</b></span></a></li>
								<li><a href="#"><i class="icon-info22"></i> <span><b>الأسئلة المتكررة</b></span></a></li>
								<!-- /main -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
		<!-- Main content -->
			<div class="content-wrapper">';
			
			
	} // end for login page
	}	
		
	
	
	function footer_admin_all(){
	echo'	<!-- Content area -->
				<div class="content">


					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">

					
						</div>

					</div>
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#">'.SystemName.' v '.SystemVersion.' </a>Powred by <a href="#">Iwin</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
</body>
</html>
';
}	
		
		
	function new_side(){
	global $db;
	echo'				
			

	
		</div>
		</div>
		<!-- //MAIN CONTENT -->
<div class="t3-sidebar span4">
    <div class="row">
        <!-- SIDEBAR 2 -->
        <div class="t3-sidebar t3-sidebar-2 span4">
            <div class="main-siderbar">
			           <div class="t3-module module " id="Mod107">
                    <div class="module-inner">
                        <div class="module-ct">
                            <div class="custom">
                                <p style="text-align: center; margin: 0px;">
                                    <img class="image-banner" src="pub/556x800.jpg" alt="" width="100%"> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t3-module module " id="Mod107">
                    <div class="module-inner">
                        <div class="module-ct">
                            <div class="custom">
                                <p style="text-align: center; margin: 0px;">
                                    <img class="image-banner" src="pub/image001.gif" alt="" width="100%"> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
			 
				<div class="t3-module module " id="Mod107">
                    <div class="module-inner">
					    <h3 class="module-title "><span>Facebook</span></h3>
                        <div class="module-ct">
                            <div class="custom">
                                <p style="text-align: center; margin: 0px;">
                                    <iframe scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:283px; height:280px;" src="//www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/magturf&amp;width=283&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23fff&amp;stream=false&amp;header=false&amp;height=280"></iframe>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t3-module module " id="Mod107">
                    <div class="module-inner">
                        <div class="module-ct">
                            <div class="custom">
                                <p style="text-align: center; margin: 0px;">
                                    <img class="image-banner" src="pub/abouaziz.jpg" alt=""> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="t3-module module " id="Mod174">
                    <div class="module-inner">
                        <h3 class="module-title "><span>Video</span></h3>
                        <div class="module-ct">
                            <div id="k2ModuleBox174" class="k2ItemsBlock">';
							$sql=$db->select("youtube order by id desc LIMIT 1","*");							
							while($rs=$db->fetchAssoc($sql)){
							echo '<a href="video.php?video='.($rs['id']).'&type=play&id=1"><img src="http://i3.ytimg.com/vi/'.($rs['code']).'/hqdefault.jpg" alt="'.($rs['title']).'">
							<h4>'.($rs['title']).'</h4></a>';
							}
							echo'
							</div>
                        </div>
                    </div>
                </div>
                <div class="t3-module module " id="Mod143">
                    <div class="module-inner">
					    <h3 class="module-title "><span>Les articles plus consultés</span></h3>
                        <div class="module-ct">
                            <div class="custom">
                                <p></p>
                                <div id="nooTabnooTabs-992127006" class="nootab ">
                                    <ul class="nav nav-tabs" id="nooTabs-992127006">
                                        <li class=" active"><a href="#nootab-9921270060" title="Most Read" data-toggle="tab">une semaine</a> </li>
                                        <li class=""><a href="#nootab-9921270061" title="Most Popular" data-toggle="tab">Un mois</a> </li>
                                    </ul>
                                    <div id="nooTabs-992127006Content" class="tab-content">
                                        <div class="tab-pane  active" id="nootab-9921270060">
                                            <div id="k2ModuleBox172" class="k2ItemsBlock">
                                                <ul>';
											    $sql=$db->select("articles where status=1 and date > DATE_SUB(CURDATE(), INTERVAL 7 DAY)  order by id desc LIMIT 5","*");
												while($rs=$db->fetchAssoc($sql)){
												echo'
                                                    <li class="even"><a href="articles.php?id='.($rs['id']).'&title='.title_url_none($rs['title']).'" title="'.($rs['title']).'">'.($rs['title']).' </a>
                                                        <div class="clr"></div>
                                                    </li>';
													}
												echo'
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="nootab-9921270061">
                                            <div id="k2ModuleBox173" class="k2ItemsBlock">
                                                 <ul>';
											    $sql=$db->select("articles where status=1 and date > DATE_SUB(CURDATE(), INTERVAL 30 DAY)  order by id desc LIMIT 8,5","*");
												while($rs=$db->fetchAssoc($sql)){
												echo'
                                                    <li class="even"><a href="articles.php?id='.($rs['id']).'&title='.title_url_none($rs['title']).'" title="'.($rs['title']).'">'.($rs['title']).' </a>
                                                        <div class="clr"></div>
                                                    </li>';
													}
												echo'
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
               
           
                
            </div>
        </div>
        <!-- //SIDEBAR 2 -->
    </div>
</div>
</div>
</section>
';
?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId  : '154824771213219',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml  : true  // parse XFBML
    });
  };

  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/fr_FR/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="cool hit counter" ><script  type="text/javascript" >
try {Histats.start(1,2081342,4,0,0,0,"00010000");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2081342&101" alt="cool hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38111412-1']);
  _gaq.push(['_setDomainName', 'magturf.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><?
	
	}
	
	
	function header_old(){
	global $title_page,$db,$StyleGet,$big_player;
echo'<!DOCTYPE html>
<html dir="ltr" lang="en-US"  xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<!-- BEGIN head -->
<head>
<!-- Title -->
<title>'.site_title.' '.$title_page.'</title>
<!-- Meta Tags -->
<meta property="fb:admins" content="1485032357"/>
<meta property="og:site_name" content="Magturf.com"/>
<meta property="og:country-name" content="Tunisia" />
<meta property="og:image" content="http://www.magturf.com/minilogo.jpg"/>

';
if(this_page!="video"){
echo'
<meta property="og:type" content="article" />';
}

if(this_page=="programme"){
echo'
<link rel="image_src" href="http://www.magturf.com/images/logo.png"/>';
}
if(this_page=="video"){
echo'
<meta property="og:type" content="video.movie" />
<meta property="og:url" content="http://www.magturf.com/video.php?video='.video.'" />
<link rel="image_src" type="image/jpeg" href="http://i3.ytimg.com/vi/'.$big_player.'/default.jpg />
<meta property="og:image" content="http://i3.ytimg.com/vi/'.$big_player.'/default.jpg"/>';
}
echo'
<meta name="copyright" content="Copyright © 2013 Webek.net">
<meta name="keywords" content="'.site_keywords.'">
<meta name="description" content="Magturf.com - Magazine courses et elevage de chevaux au Maghreb">
<link rel="index" title="'.site_title.'" href="http://www.magturf.com/" />
<!-- The Stylesheet -->
<link href="style.css?x=art881221" rel="stylesheet" type="text/css" />
<link href="css/fixed.css" rel="stylesheet" type="text/css" />
<!-- favicon -->
<link rel="shortcut icon" href="favicon.png" />
<!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- javaScript -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.li-scroller.1.0.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js'.x_c.'"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js'.x_c.'"></script>
</head>
<body>
<div class="fixed">
<div id="top" class="top_bar">
    <div class="inner">
         <ul class="top_nav">
            <li><a href="index.php?type=ar&title=Magazine_courses_et_elevage_de_chevaux_au_Maghreb">Maghreb</a></li>
            <li><a href="index.php?type=int&title=Magazine_courses_et_elevage_de_chevaux_International">International</a></li>
            <li><a href="#">Archives</a>
                <ul class="sub-menu">
                        <li><a href="archives.php?type=ar&title=archives_Magazine_courses_et_elevage_de_chevaux_au_Maghreb">Maghreb</a></li>
                        <li><a href="archives.php?type=int&title=archives_Magazine_courses_et_elevage_de_chevaux_International">International</a></li>
                </ul>
            </li>
            <li><a href="#">R&#233;sultats</a>
			   <ul class="sub-menu">
                        <li><a href="resultats.php?type=tn&title=Resultats_techniques_Tunisie">Tunisie</a></li>
                        <li><a href="resultats.php?type=ma&title=Resultats_techniques_Maroc">Maroc</a></li>
                        <li><a href="resultats.php?type=dz&title=Resultats_techniques_Algerie">Algerie</a></li>
                        <li><a href="resultats.php?type=int&title=Resultats_techniques_international">international</a></li>
                </ul>
			</li>
            <li><a href="#">Pronostics</a>
			   <ul class="sub-menu">
                        <li><a href="pronostics.php?type=tn&title=Les_Pronostics_Tunisie">Tunisie</a></li>
                        <li><a href="pronostics.php?type=fr&title=Les_Pronostics_France">France</a></li>
                        <li><a href="pronostics.php?type=int&title=Les_Pronostics_International">International</a></li>
                </ul>
			</li>
            <li><a href="#">Programme</a>
			   <ul class="sub-menu">
                        <li><a href="programme.php?type=tn&title=Programme_de_Course_Tunisie">Tunisie</a></li>
                        <li><a href="programme.php?type=ma&title=Programme_de_Course_Maroc">Maroc</a></li>
                        <li><a href="programme.php?type=dz&title=Programme_de_Course_Algerie">Algerie</a></li>
                </ul>
			</li>
            <li><a href="nostalgie.php?type=nostalgie">Nostalgie</a></li>
            <li><a href="nostalgie.php?type=cluture">Culture</a></li>
            <li><a href="albums.php?title=album_phtos_de_Course_Tunisie_Algerie_Maroc">Photos</a></li>
            <li><a href="video.php?title=video_de_Course_Tunisie">Videos Tunisie</a>
			 <ul class="sub-menu">
                        <li><a href="video.php?title=video_de_Course_Tunisie">Tunisie</a></li>
                        <li><a href="vmaroc.php?title=video_de_Course_Maroc">Maroc</a></li>
                </ul>
			</li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="contacts.php">Annonceurs</a></li>
        </ul>
		
    </div> <!--End Inner-->
</div> <!--End Topbar-->

<header id="header">
    <div class="top_line"></div>
    <div class="inner">
        <div class="logo">
            <a href="index.php">
                    <img src="images/logo.png" alt="'.site_title.'" title="'.site_title.'" />
            </a>
					<div id="director">
	Directeur de la publication : <b>Mondher Zouiten</b>
	</div>
        </div> <!--End Logo-->
        <div class="top_ad">
            <a href="derby_maroc.php"><img src="pub/derby.jpg" alt="" /></a>
        </div> <!--End Top Ad-->
    </div> <!--Inner-->
</header> <!--End Header-->
<nav id="navigation">
    <div class="nav_wrap">
    <div class="inner">
        <ul class="nav">
           <li><a href="index.php?type=ar&title=Magazine_courses_et_elevage_de_chevaux_au_Maghreb">Maghreb</a></li>
            <li><a href="index.php?type=int&title=Magazine_courses_et_elevage_de_chevaux_International">International</a></li>
            <li><a href="#">Archives</a>
                <ul class="sub-menu">
                        <li><a href="archives.php?type=ar&title=archives_Magazine_courses_et_elevage_de_chevaux_au_Maghreb">Maghreb</a></li>
                        <li><a href="archives.php?type=int&title=archives_Magazine_courses_et_elevage_de_chevaux_International">International</a></li>
                </ul>
            </li>
            <li><a href="#">R&#233;sultats</a>
			   <ul class="sub-menu">
                        <li><a href="resultats.php?type=tn&title=Resultats_techniques_Tunisie">Tunisie</a></li>
                        <li><a href="resultats.php?type=ma&title=Resultats_techniques_Maroc">Maroc</a></li>
                        <li><a href="resultats.php?type=dz&title=Resultats_techniques_Algerie">Algerie</a></li>
                        <li><a href="resultats.php?type=int&title=Resultats_techniques_international">international</a></li>
                </ul>
			</li>
            <li><a href="#">Pronostics</a>
			   <ul class="sub-menu">
                        <li><a href="pronostics.php?type=tn&title=Les_Pronostics_Tunisie">Tunisie</a></li>
                        <li><a href="pronostics.php?type=fr&title=Les_Pronostics_France">France</a></li>
                        <li><a href="pronostics.php?type=int&title=Les_Pronostics_International">International</a></li>
                </ul>
			</li>
            <li><a href="#">Programme</a>
			   <ul class="sub-menu">
                        <li><a href="programme.php?type=tn&title=Programme_de_Course_Tunisie">Tunisie</a></li>
                        <li><a href="programme.php?type=ma&title=Programme_de_Course_Maroc">Maroc</a></li>
                        <li><a href="programme.php?type=dz&title=Programme_de_Course_Algerie">Algerie</a></li>
                </ul>
			</li>
            <li><a href="nostalgie.php?type=nostalgie">Nostalgie</a></li>
            <li><a href="nostalgie.php?type=cluture">Culture</a></li>
            <li><a href="albums.php?title=album_phtos_de_Course_Tunisie_Algerie_Maroc">Photos</a></li>
			<li><a href="video.php?title=video_de_Course_Tunisie">Videos</a>
			 <ul class="sub-menu">
                        <li><a href="video.php?title=video_de_Course_Tunisie">Tunisie</a></li>
                        <li><a href="vmaroc.php?title=video_de_Course_Maroc">Maroc</a></li>
                </ul>
			</li>
            <li><a href="contacts.php">Contacts</a></li>
        </ul>
<div class="menu-main-container" id="mobile_menu_secondary">
    <select name="mobileMainMenu" id="mobileMainMenu" class="mobileMainMenu" onchange="location.href = document.getElementById(\'mobileMainMenu\').value;">
        Home
        <option value="#" />Menu</option>
<option value="index.php?type=ar&title=Magazine_courses_et_elevage_de_chevaux_au_Maghreb">Maghreb</option>
<option value="index.php?type=int&title=Magazine_courses_et_elevage_de_chevaux_International">International</option>
<option value="archives.php?type=ar&title=archives_Magazine_courses_et_elevage_de_chevaux_au_Maghreb">Maghreb</option>
<option value="archives.php?type=int&title=archives_Magazine_courses_et_elevage_de_chevaux_International">International</option>
<option value="resultats.php?type=tn&title=Resultats_techniques_Tunisie">Tunisie</option>
<option value="resultats.php?type=ma&title=Resultats_techniques_Maroc">Maroc</option>
<option value="resultats.php?type=dz&title=Resultats_techniques_Algerie">Algerie</option>
<option value="resultats.php?type=int&title=Resultats_techniques_international">international</option>
<option value="pronostics.php?type=tn&title=Les_Pronostics_Tunisie">Tunisie</option>
<option value="pronostics.php?type=fr&title=Les_Pronostics_France">France</option>
<option value="pronostics.php?type=int&title=Les_Pronostics_International">International</option>
<option value="programme.php?type=tn&title=Programme_de_Course_Tunisie">Tunisie</option>
<option value="programme.php?type=ma&title=Programme_de_Course_Maroc">Maroc</option>
<option value="programme.php?type=dz&title=Programme_de_Course_Algerie">Algerie</option>
<option value="nostalgie.php?type=nostalgie">Nostalgie</option>
<option value="nostalgie.php?type=cluture">Culture</option>
<option value="albums.php?title=album_phtos_de_Course_Tunisie_Algerie_Maroc">Photos</option>
<option value="video.php?title=video_de_Course_Tunisie">Videos Tunisie</option>
<option value="vmaroc.php?title=video_de_Course_Maroc">Videos Maroc</option>
<option value="contacts.php">Contacts</option>
     </select>
 </div>
   </div> <!--Inner-->
    </div> <!--End Nav Wrap-->
</nav> <!--End Navigation-->
<div class="inner">
<!--
<div align="center" class="our_ad">
<a href="albums.php" ><img border="0" src="pub/QPhoto.jpg"></a>
</div>
<div align="center" class="our_ad">
<a href="http://www.sheikhmansoorfestival.com/" target="_blank"><img border="0" src="pub/zayed.jpg"></a>
</div>
<div align="center"  class="sec_ad">
<a href="#"><img border="0" src="pub/pub.jpg?x=256x"></a>
</div>
<div align="center" class="our_ad">
<a href="contacts.php" ><img border="0" src="pub/d_3.JPG"></a>
</div>
-->

<div align="center"  class="sec_ad">
<a href="#"><img border="0" src="pub/falags.jpg?x=s"></a>
</div>
    <div class="container">
    <div class="main">
';
	    // die('<div align="center"><h1 class="entry-title"><a href="#" class="home_text"><h2>Magturf est en cours de maintenance ...</h2></a></h1></div>');
		
	}

	function footer() {
echo'
    </div> <!--End Main-->
    <aside class="sidebar">
       
	   	
        <div class="box_outer">
            <div class="widget">
                <h3 class="widget_title">Recherche</h3>
                <div class="wid_border"></div>
                   <div class="search_box">

            <form method="get" action="search.php">

                <input type="submit" class="sb" value="Rechercher" />

                <input type="text" class="sf" placeholder="Rechercher ici ..." name="search"  />

            </form>

        </div> <!--Search Box-->
			
            </div>
        </div> <!--End Widget-->
        
	
		
        <div class="box_outer">
            <div class="widget">
			
			
			
		      <div class="box_ads">
					<center><a href="derby_maroc.php"><img src="pub/derbyside.PNG" width="250"></a></center><br>
        </div><!--End Widget-->
		
		
		
		
                <div class="mom_social_counter">
			<div class="sc_rss sc_item">
                            <div class="social_box">
                                    <a href="rss.php">
                                        <img alt="" src="images/widgets/sc_rss.png" />
                                    </a>
                                    <span>Rss</span>
                            </div>
		    	</div> <!--SC Item-->

			<div class="sc_twitter sc_item">
                            <div class="social_box">
				<a href="http://twitter.com/magturf" target="_blank">
                                    <img alt="" src="images/widgets/sc_twitter.png" />
				</a>
				<span>Twitter</span>
                            </div>
			</div> <!--SC Item-->

			<div class="sc_facebook sc_item">
			    <div class="social_box">
				<a href="http://www.facebook.com/magturf" target="_blank">
                                    <img alt="" src="images/widgets/sc_facebook.png" />
				</a>
				<span>Facebook</span>
			    </div>
			</div> <!--SC Item-->
			</div> <!--mom_social_counter-->
             </div>
        </div> <!--End Widget-->

		      <div class="box_ads">
					<center><img src="pub/d_1.JPG" width="250"></center><br>
        </div><!--End Widget-->
		
		
	
        <div class="box_outer">
            <div class="widget">
                <h3 class="widget_title">Facebook</h3>
                <div class="wid_border"></div>
                <div class="like_box_footer">
<iframe scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:283px; height:65px;" src="//www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/magturf&amp;width=283&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23acb7d1&amp;stream=false&amp;header=false&amp;height=335"></iframe>
        </div><!--like_box_footer-->
			
            </div>
        </div> <!--End Widget-->
        
        <div class="box_ads">
					<center><img src="pub/abouaziz.jpg" width="250"></center><br>
					<center><img src="pub/longines.jpg" width="250"></center><br>
					<center><img src="pub/d_2.JPG" width="250"></center><br>
					<center><img src="pub/azamour.jpg" width="250"></center><br>
        </div><!--End Widget-->
		
		
      
    </aside> <!--End Sidebar-->
    </div> <!--End Container-->
<!--Footer-->
    <div class="bot_ad" align="center">
          					<center><img src="pub/ourads.png"></center>

    </div> <!--End bot Ad-->
</div> <!--End Inner-->

<div class="bottom_bar">
    <div class="inner">
    <ul class="social_icons">
        <li class="twitter" title="Twitter"><a target="_blank" href="http://www.twitter.com/Magturf">Twitter</a></li>
        <li class="facebook" title="Facebook"><a target="_blank" href="http://www.facebook.com/Magturf">Facebook</a></li>        
        <li class="youtube" title="Youtube"><a target="_blank" href="http://www.youtube.com/Magturf">Youtube</a></li>
        <li class="rss" title="Rss"><a target="_blank" href="rss.php">rss</a></li>
    </ul>
<p class="copyrights">Copyright Magturf © 2013 Powered By <a href="#">Webek.net</a> </p>
    </div> <!--End Inner-->
</div> <!--end bottom Bar-->
</div> <!--End Fixed-->
<div class="scrollTo_top">
    <a title="Scroll To Top" href="#">
	<img src="images/up.png" alt="Top" />
    </a>
</div>';
?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId  : '154824771213219',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml  : true  // parse XFBML
    });
  };

  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/fr_FR/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="cool hit counter" ><script  type="text/javascript" >
try {Histats.start(1,2081342,4,0,0,0,"00010000");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2081342&101" alt="cool hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38111412-1']);
  _gaq.push(['_setDomainName', 'magturf.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?
echo'</body>
</html>';
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
		
		
		
	function right($title=""){
echo'               
    <div class="right-panel sidebar"> 
        
        <div class="inner">';
                                
    // <div id="tabbed-latest-reviews"> <!-- begin jquery tabbed latest reviews -->
     
         // <ul class="tabnav">  <!-- tab headers link to tab areas below -->
            // <li><a href="#tabs-movies-latest">Movies</a></li>					
            // <li><a href="#tabs-music-latest">Music</a></li>                    
            // <li><a href="#tabs-games-latest">Games</a></li>                    
            // <li><a href="#tabs-books-latest">Books</a></li>                    				
        // </ul> 
        
        // <div class="tabdiv-wrapper"> 
                                    
            // <div id="tabs-movies-latest" class="tabdiv">  <!-- each of these divs needs to correspond to header above -->
            
                // <ul> 
                
                    // <li>																					
                                
                        // <div class="stars tooltip" title="4.5 / 5 Excellent">
                            // <div class="heart full">&nbsp;</div>
                            // <div class="heart full">&nbsp;</div>
                            // <div class="heart full">&nbsp;</div>
                            // <div class="heart full">&nbsp;</div>
                            // <div class="heart half">&nbsp;</div>
                        // </div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Shutter Island">Shutter Island</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3 / 5 Above Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Limitless">Limitless</a>												
                        
                   // </li>
                                                    
                   // <li>																					
                        
                        // <div class="stars tooltip" title="5 / 5 Excellent"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Minority Report">Minority Report</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="2.5 / 5 Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Aviator">The Aviator</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="4 / 5 Very Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="War of the Worlds">War of the Worlds</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3 / 5 Above Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Scream 4">Scream 4</a>												
                        
                    // </li>
                                              
                    // <li>																					
                        
                        // <div class="stars tooltip" title="1.5 / 5 Poor"><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Hop">Hop</a>												
                        
                    // </li> 
                    
                    // <li class="last gentesque tooltip" title="View all movie reviews"><a href="./reviews.php.html">More</a></li> 

                // </ul> 
                
            // </div>          
                                
            // <div id="tabs-music-latest" class="tabdiv"> 
            
                // <ul>
                 
                    // <li>																					
                                
                        // <div class="stars tooltip" title="3.5 / 5 Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Arcade Fire &#8211; Neon Bible">Arcade Fire &#8211; Neon Bible</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="4.5 / 5 Excellent"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Killers &#8211; Tranquilize">The Killers &#8211; Tranquilize</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="2 / 5 Below Average"><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart">&nbsp;</div><div class="heart">&nbsp;</div><div class="heart">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Killers &#8211; Sam&#8217;s Town">The Killers &#8211; Sam&#8217;s Town</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="5 / 5 Excellent"><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Killers &#8211; Hot Fuss">The Killers &#8211; Hot Fuss</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="4 / 5 Very Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Eminem Recovery">Eminem Recovery</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3.5 / 5 Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Veckatimest">Veckatimest</a>												
                        
                    // </li>
                    
                    // <li class="last gentesque tooltip" title="View all music reviews"><a href="./reviews.php.html">More</a></li> 

                // </ul> 
                
            // </div>          
                                
            // <div id="tabs-games-latest" class="tabdiv">
             
                // <ul> 
                
                    // <li>																					
                                
                        // <div class="stars tooltip" title="4 / 5 Very Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Homefront">Homefront</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="5 / 5 Excellent"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Angry Birds Rio HD">Angry Birds Rio HD</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3 / 5 Above Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Dead Space">Dead Space</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="4 / 5 Very Good"><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart full">&nbsp;</div><div class="heart">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Super Street Fighter IV: 3D Edition">Super Street Fighter IV: 3D Edition</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="1 / 5 Very Poor"><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Tom Clancy&#8217;s Splinter Cell 3D">Tom Clancy&#8217;s Splinter Cell 3D</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="2.5 / 5 Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Third Birthday">The Third Birthday</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3 / 5 Above Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Legend of Heroes: Trails In The Sky">The Legend of Heroes: Trails In The Sky</a>												
                        
                    // </li> 
                    
                    // <li class="last gentesque tooltip" title="View all video game reviews"><a href="./reviews.php.html">More</a></li> 

                // </ul> 
                
            // </div>          
                                
            // <div id="tabs-books-latest" class="tabdiv">
             
                // <ul> 
                
                    // <li>																					
                                
                        // <div class="stars tooltip" title="4 / 5 Very Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Girl Who Kicked The Hornets Nest">The Girl Who Kicked The Hornets Nest</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="4.5 / 5 Excellent"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Girl Who Played With Fire">The Girl Who Played With Fire</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="5 / 5 Excellent"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Girl With The Dragon Tattoo">The Girl With The Dragon Tattoo</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3.5 / 5 Good"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="The Zombie Survival Guide: Complete Protection from the Living Dead">The Zombie Survival Guide: Complete Protection from the Living Dead</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="4.5 / 5 Excellent"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star half">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="World War Z: An Oral History of the Zombie War">World War Z: An Oral History of the Zombie War</a>												
                        
                    // </li> 
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="2 / 5 Below Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Ford County: Stories">Ford County: Stories</a>												
                        
                    // </li>
                                                    
                    // <li>																					
                        
                        // <div class="stars tooltip" title="3 / 5 Above Average"><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star full">&nbsp;</div><div class="star">&nbsp;</div><div class="star">&nbsp;</div></div>	
                        
                        // <a class="post-title" href="./reviews.php.html" title="Theodore Boone: Kid Lawyer">Theodore Boone: Kid Lawyer</a>												
                        
                    // </li>
                    
                    // <li class="last gentesque tooltip" title="View all book reviews"><a href="./reviews.php.html">More</a></li> 

                // </ul> 
                
            // </div>          
                            
        // </div> 
                                 
    // </div>  <!-- end tabbed latest reviews -->
    echo'
		<script>
			$(document).ready(function(){
				// Examples of how to assign the ColorBox event to elements
				$(".floaw").colorbox({rel:\'floaw\'});

				
				// Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$(\'#click\').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>';
	echo'
    
	<div class="unwrapped">
    
    <div class="widget"> <!-- begin  Actuellement en kiosque -->
    
        <div class="header-left">&nbsp;</div>
        
        <div class="header-middle">
        
            <h2 class="gentesque">
               Actuellement en kiosque
            </h2>
            
        </div>
        <div class="header-right">&nbsp;</div>
        
        <br class="clearer" />
        
        <div class="content-wrapper">
        
            <div class="content">
    <center> 
	<a class="floaw  tooltip" href="images/last_cover.png" title="Cliquez ici pour agrandir l’image" >
	<img src="images/last_cover.png" width="220" height="320"></a></center> 
            </div>
            
        </div>
        
    </div> <!-- end Actuellement en kiosque -->
	
	
	    <div class="Pub">            
            <a href="#">
                <center><img alt="Pub Ici" src="images/pub.jpg" width="200"/><center>
            </a>
        </div>
        
    

    <div class="widget"> <!-- begin  Dossier Sciences Plus -->
    	        <br/>

        <div class="header-left">&nbsp;</div>
        
        <div class="header-middle">
            <h2 class="gentesque">
               Dossier Sciences Plus
            </h2>
        </div>
        <div class="header-right">&nbsp;</div>
        
        <br class="clearer" />
        
        <div class="content-wrapper">
        
            <div class="content">
			
    <center>
		'.dossier.'
	</center> 
            </div>
            
        </div>
        
    </div> <!-- end Actuellement en kiosque -->

		
        
        <br class="clearer" />
        
    </div> <!-- end unwrapped sidebar areas -->
    
	
    <div class="widget"> <!-- begin newsletter signup -->
    
        <div class="header-left">&nbsp;</div>
        
        <div class="header-middle">
        
            <h2 class="gentesque">
               NewsLettre
            </h2>
            
        </div>
        
        <div class="header-right">&nbsp;</div>
        
        <br class="clearer" />
        
        <div class="content-wrapper">
        
            <div class="content">	
                    
                <form class="subscribe" action="#" method="post" target="popupwindow">
                
                    <p>Entrez votre adresse email</p>
                    
                    <p><input type="text" name="email"/></p>
                    
                    <input type="submit" class="btn gentesque tooltip" value="Valider" title="Vous recevrez un courriel quotidien avec de nouveaux contenus à partir de notre site." />
                    
                </form> 
    
                <br class="clearer" /> 

            </div>
            
        </div>
        
    </div> <!-- end newsletter signup -->
    
 
</div>     
     
    </div> 

    <br class="clearer" />
    
</div> <!-- end page content wrapper -->

';
	}
	function Get_id($variable){
	echo'';
	}
	
	function HeadAdmin(){
	global $db;
	     // <li class="dd"><img src="images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span>
                        // <ul class="menu_body">
                            // <li><a href="#" title="">new message</a></li>
                            // <li><a href="#" title="">inbox</a></li>
                            // <li><a href="#" title="">outbox</a></li>
                            // <li><a href="#" title="">trash</a></li>
                        // </ul>
                    // </li>
	echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>'.site_title.'</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />

<script src="jss/jquery-1.4.4.js" type="text/javascript"></script>

<script type="text/javascript" src="jss/spinner/jquery.mousewheel.js"></script>
<script type="text/javascript" src="jss/spinner/ui.spinner.js"></script>

<script type="text/javascript" src="js/jquery-ui.min.js"></script> 

<script type="text/javascript" src="jss/fileManager/elfinder.min.js"></script>

<script type="text/javascript" src="jss/wysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="jss/wysiwyg/wysiwyg.image.js"></script>
<script type="text/javascript" src="jss/wysiwyg/wysiwyg.link.js"></script>
<script type="text/javascript" src="jss/wysiwyg/wysiwyg.table.js"></script>

<script type="text/javascript" src="jss/flot/jquery.flot.js"></script>
<script type="text/javascript" src="jss/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="jss/flot/excanvas.min.js"></script>

<script type="text/javascript" src="jss/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="jss/dataTables/colResizable.min.js"></script>

<script type="text/javascript" src="jss/forms/forms.js"></script>
<script type="text/javascript" src="jss/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="jss/forms/autotab.js"></script>
<script type="text/javascript" src="jss/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="jss/forms/jquery.validationEngine.js"></script>

<script type="text/javascript" src="jss/colorPicker/colorpicker.js"></script>

<script type="text/javascript" src="jss/uploader/plupload.js"></script>
<script type="text/javascript" src="jss/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="jss/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="jss/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="jss/ui/progress.js"></script>
<script type="text/javascript" src="jss/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="jss/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="jss/ui/jquery.alerts.js"></script>

<script type="text/javascript" src="jss/jBreadCrumb.1.1.js"></script>
<script type="text/javascript" src="jss/cal.min.js"></script>
<script type="text/javascript" src="jss/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="jss/jquery.ToTop.js"></script>
<script type="text/javascript" src="jss/jquery.listnav.js"></script>
<script type="text/javascript" src="jss/jquery.sourcerer.js"></script>

<script type="text/javascript" src="jss/custom.js"></script>

</head>

<body>

<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Bienvenue, '.showname.'</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="./index.php" target="_blank"><img src="images/icons/topnav/tasks.png" alt="" /><span>Accueil</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">1</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Paramètres du compte</span></a></li>
                    <li><a href="?type=logout" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Déconnexion</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
    <div class="logo"><img src="images/splogo.png" alt="" /></div>
    <div class="middleNav">
    	<ul>
            <li class="iStat"><a href="#" title=""><span>Statistics</span></a></li>
            <li class="iUser"><a href="#" title=""><span>Les utilisateurs</span></a></li>
        </ul>
    </div>
    <div class="fix"></div>
</div>';
	if(site_statut==2&&ulv==4){
		echo'
        <div class="wrapper">
            <div class="nNote nWarning hideit">
                <p><strong>WARNING: </strong>Website is Closed</p>
            </div>
        </div>';
	}	
echo'
<!-- Content wrapper -->
<div class="wrapper">
	
	<!-- Left navigation -->
    <div class="leftNav">
    	<ul id="menu">
        	<li class="dash"><a href="?type=home" title="" '.$this->chekstyle(type,'home','class="active"').'><span>Paramètres Génerales</span></a></li>
			<li class="forms"><a href="#" title="" class="exp"><span>Les articles</span></a>
            	<ul class="sub">
                    <li><a href="?type=editor" title="">Ajouter un article</a></li>
                    <li><a href="#" title="">Liste des articles</a></li>
                    <li><a href="?type=editarticle" title="">Modifier un article</a></li>
                    <li><a href="#" title="">Liste des articles cachés</a></li>
                    <li><a href="#" title="">Liste des articles en attente</a></li>
                </ul>
            </li>
            <li class="gallery"><a href="?type=images" title="" '.$this->chekstyle(type,'images','class="active"').'><span>Les Images</span></a></li>
			<li class="contacts"><a href="#" title="" class="exp"><span>Les Utilisateurs</span></a>
            	<ul class="sub">
                    <li><a href="#" title="">Ajouter un utilisateur</a></li>
                    <li><a href="#" title="">Liste des utilisateurs</a></li>
                </ul>
            </li>
			<li class="contacts"><a href="#" title="" class="exp" '.$this->chekstyle(type,'messages','class="active"').'><span>Les messages <span class="numberLeft">0</span></span></a>
            	<ul class="sub">
                    <li><a href="?type=menu" title="">Les messages</a></li>
                    <li><a href="#" title="">messages</a></li>
                </ul>
            </li>
            </li>
			<li class="contacts"><a href="#" title="" class="exp" '.$this->chekstyle(type,'menu','class="active"').' id="opened"><span>Dev</span></a>
            	<ul class="sub">
                    <li><a href="?type=menu" title="">Menu</a></li>
                    <li><a href="?type=dossier" title="">Dossier</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>';
	
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
	
	
/* function  Clean Query */
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
			$this->header();
			echo"<div class=\"home_text\"><h2> Cette opération est indisponible <br> Il y'a une possibilité d'attaques <br> on a enregistré  votre adresse IP : <b>".$ip."</b></h2></div>";
			$this->footer();
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

	function adminHeader() {
echo'<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html><!--<![endif]-->

<head>

	<!-- BASIC PAGE NEEDS -->
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
	<title>'.site_title.' - Cpanel</title>

	<link rel="stylesheet" href="cp/reset2.css" />
	<link rel="stylesheet" href="cp/main2.css" />
	<link rel="stylesheet" href="cp/login.css" />

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<link rel="shortcut icon" href="media/favicon.ico" />
	<link rel="apple-touch-icon" href="media/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="media/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="media/apple-touch-icon-114x114.png" />

</head>';
	}

	function administrationHead() {
	echo'
	<body>

	<!-- CONTAINER -->
	<div id="container">

		<!-- HEADER -->
		<header id="header">
			<div id="header-inner" class="clearfix">
				<h1 id="logo"><a href="'.admin_file.'"><img src="images/logoCp.png" alt="SweetDashboard" /></a></h1>
			</div>
		</header>
		<!-- //HEADER -->
		
	<!-- MAIN -->
	<div id="main" class="clearfix">

		<!-- NAVIGATION -->
		<nav id="navigation">

			<!-- SEARCH -->
			
			<!-- //SEARCH -->
			
			<!-- PAGE CHANGER -->
			
		
		
			<!-- BLOCK #1 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">CPanel</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'home','class="active"').' href="?type=home"><span class="dashboard '.$this->chekstyle(type,'home','active').'  ">Paramètre Générales</span></a></li>
						<li><a '.$this->chekstyle(type,'logout','class="active"').' href="?type=logout" onclick="return(confirm(\'Etes vous certain de vouloir vous déconnecter? \'));"><span class="error-pages  '.$this->chekstyle(type,'logout','active').' ">Déconnexion</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #1 -->

			<!-- BLOCK #2 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Photos & Albums</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'albums','class="active"').' href="?type=albums"><span class="general-stats '.$this->chekstyle(type,'albums','active').'">Albums</span></a></li>
						<li><a '.$this->chekstyle(type,'photos','class="active"').' href="?type=photos"><span class="popular-products '.$this->chekstyle(type,'photos','active').'">Photos</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
		
			<!-- BLOCK #2 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Photos d articles</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'add_photo_articles','class="active"').' href="?type=add_photo_articles" target="_blank"><span class="popular-products '.$this->chekstyle(type,'add_photo_articles','active').'">Photos d articles</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
		
			<!-- BLOCK #3 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Articles</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'add_article','class="active"').' href="?type=add_article"><span class="general-stats '.$this->chekstyle(type,'add_article','active').'">Ajouter un article</span></a></li>
						<li><a '.$this->chekstyle(type,'list_article','class="active"').' href="?type=list_article"><span class="popular-products '.$this->chekstyle(type,'list_article','active').'">Liste des articles</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
			
			<!-- BLOCK #3 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Annonces</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'annonces','class="active"').' href="?type=annonces"><span class="general-stats '.$this->chekstyle(type,'annonces','active').'">Annonces</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
			
			<!-- BLOCK #3 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Programme</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'programme','class="active"').' href="?type=programme"><span class="general-stats '.$this->chekstyle(type,'programme','active').'">Programme</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
			
			<!-- BLOCK #3 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Résultats</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'resultats','class="active"').' href="?type=resultats"><span class="general-stats '.$this->chekstyle(type,'resultats','active').'">Résultats</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
			
			<!-- BLOCK #3 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Pronostics</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle_db(type,'pronostics','class="active"',id,'1').' href="?type=pronostics&id=1"><span class="general-stats '.$this->chekstyle_db(type,'pronostics','active',id,'1').'">Tunisie</span></a></li>
						<li><a '.$this->chekstyle_db(type,'pronostics','class="active"',id,'2').' href="?type=pronostics&id=2"><span class="general-stats '.$this->chekstyle_db(type,'pronostics','active',id,'2').'">France</span></a></li>
						<li><a '.$this->chekstyle_db(type,'pronostics','class="active"',id,'3').' href="?type=pronostics&id=3"><span class="general-stats '.$this->chekstyle_db(type,'pronostics','active',id,'3').'">International</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
			
					<!-- BLOCK #3 -->
			<aside class="section">
				<h3 class="nav-head"><a href="#">Videos</a></h3>
				<div class="section-content">
					<ul>
						<li><a '.$this->chekstyle(type,'add_video','class="active"').' href="?type=add_video"><span class="general-stats '.$this->chekstyle(type,'add_video','active').'">Ajouter un video</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- //BLOCK #2 -->
		
		</nav>
		<!-- //NAVIGATION -->

		<!-- CONTENT -->
	<!-- CONTENT -->
		<section id="content">
			<div id="content-wrapper">

	';
	}	
	
	
		function FooterAdmin(){
	echo'	
			</div>
		</section>
		<!-- //CONTENT --><!-- FOOTER -->
		<footer id="footer" class="clearfix">
			<p id="footer-logo"><img src="images/logomagturf.png" height="13" alt="SweetDashboard" /></p>
			<p>&copy; 2012 <a href="http://www.webek.net" target="_blank">Webek.net</a>. All Rights Reserved</p>
		</footer>
		<!-- //FOOTER -->
		
	</div>
	<!-- //MAIN -->

</div>
<!-- //CONTAINER -->

<!-- REQUIRED JAVASCRIPT FILES -->

<script src="jss/jquery-1.7.2.min.js"></script>
<script src="jss/ui-core.js"></script>
<script src="jss/ui-widget.js"></script>
<script src="jss/datepicker.js"></script>
<script src="jss/tooltip.js"></script>
<script src="jss/select.js"></script>
<script src="jss/radio-checkbox.js"></script>
<script src="jss/cleditor.js"></script>
<script src="jss/raphael.js"></script>
<script src="jss/analytics.js"></script>
<script src="jss/popup.js"></script>
<script src="jss/main.js"></script>
';
	}	






/******************* New Admin Section *******************/

	function adminToolsBox($img,$subject,$url,$ret=true){
		$code="
		<div style=\"padding-top:22px;width:142px;height:142px;text-align:center;font-weight:bold;font-size:11px;color:#5d5d5d;background-image:url(images/adminpanel/background.gif);background-repeat:no-repeat\"><a class=\"tools\" href=\"".admin_file."?$url\"><img src=\"images/adminpanel/{$img}\" width=\"80\" height=\"80\" border=\"0\"><br><br>$subject</a></div>";
		if($ret){
			return $code;
		}
		else{
			echo $code;
		}
	}


	function adminMenuRows($color,$title,$url){
		echo"
		<td>
		<table width=\"100%\" cellSpacing=\"0\" cellPadding=\"0\" border=\"0\" align=\"center\">
			<tr>
				<td><img src=\"images/adminpanel/menu_{$color}_left.gif\" width=\"4\" height=\"34\" border=\"0\"></td>
				<td align=\"center\" style=\"width:98%;height:34px;padding:4px;background-image:url(images/adminpanel/menu_{$color}_center.gif);background-repeat:repeat-x\"><a class=\"{$color}Menu\" href=\"$url\"><nobr>$title</nobr></a></td>
				<td><img src=\"images/adminpanel/menu_{$color}_right.gif\" width=\"4\" height=\"34\" border=\"0\"></td>
			</tr>
		</table>
		</td>";
	}	


function adminHead(){
echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"cp/cpcss.css".x_c."\" />";
$menus=array(
			'index'=>array('Accueil',admin_file),
			'setting'=>array('Paramètres généraux',admin_file.'?type=setting'),
			'resultats'=>array('Les resultats',admin_file.'?type=resultats&method=tn'),
			'articles'=>array('Les Articles',admin_file.'?type=articles&method=ar'),
			'newsection'=>array('Nostalgie / Culture',admin_file.'?type=newsection&method=ar'),
			// 'quicknews'=>array('Quick News',admin_file.'?type=quicknews&method=list'),
			// 'articles'=>array('Les articles',admin_file.'?type=articles&method=list'),
			// 'reseaux'=>array('Réseaux',admin_file.'?type=reseaux&method=info'),
			// 'coming'=>array('Coming News',admin_file.'?type=coming'),
			// 'email'=>array('Liste des E-mails',admin_file.'?type=email'),
			// 'galerie'=>array('Galerie de photos',admin_file.'?type=galerie&method=list'),
			'video'=>array('Déconnexion ',admin_file.'?type=logout')			
		);
		$subMenus=array(
			'codes'=>array(
				'tn'=>array('Pronostics Tunisie',admin_file.'?type=codes&method=tn'),
				'fr'=>array('Pronostics France',admin_file.'?type=codes&method=fr'),
				'int'=>array('Pronostics International',admin_file.'?type=codes&method=int'),
			),
			'articles'=>array(
				'ar'=>array('Liste des articles Maghreb',admin_file.'?type=articles&method=ar'),
				'int'=>array('Liste des articles International',admin_file.'?type=articles&method=int'),
				'add'=>array('Ajouter un article',admin_file.'?type=articles&method=add'),
			),
			'resultats'=>array(
				'add'=>array('Ajouter Resultats',admin_file.'?type=resultats&method=add'),
				'tn'=>array('Resultats Tunisie',admin_file.'?type=resultats&method=tn'),
				'dz'=>array('Resultats Algerie',admin_file.'?type=resultats&method=dz'),
				'ma'=>array('Resultats Maroc',admin_file.'?type=resultats&method=ma'),
				'int'=>array('Resultats International',admin_file.'?type=resultats&method=int'),
			),
			'newsection'=>array(
				'ar'=>array('Liste des Culture',admin_file.'?type=newsection&method=ar'),
				'int'=>array('Liste des Nostalgie',admin_file.'?type=newsection&method=int'),
				'add'=>array('Ajouter un article',admin_file.'?type=newsection&method=add'),
			),
			// 'reseaux'=>array(
				// 'info'=>array('info rapide',admin_file.'?type=reseaux&method=info'),
				// 'details'=>array('les details',admin_file.'?type=reseaux&method=details'),
			// ),
			'news'=>array(
				'list'=>array('liste des news',admin_file.'?type=news&method=list'),
				'add'=>array('ajouter des news',admin_file.'?type=news&method=add'),
			),
			'galerie'=>array(
				'list'=>array('liste des photos',admin_file.'?type=galerie&method=list'),
				'add'=>array('ajouter des photos',admin_file.'?type=galerie&method=add'),
			),
			'video'=>array(
				'list'=>array('liste des videos',admin_file.'?type=video&method=list'),
				'add'=>array('ajouter un video',admin_file.'?type=video&method=add'),
			),	
			'users'=>array(
				'list'=>array('liste des users',admin_file.'?type=users&method=list'),
				'add'=>array('ajouter un user',admin_file.'?type=users&method=add'),
			),
			'pages'=>array(
				'list'=>array('liste des page',admin_file.'?type=pages&method=list'),
				'add'=>array('ajouter une page',admin_file.'?type=pages&method=add'),
				'del'=>array('les pages désactivées',admin_file.'?type=pages&method=del'),
			),
		);
	$this->adminType=(type=='' ? 'index' : type);
		if(method==''){
			if($subMenus["{$this->adminType}"]){
				$getkey=array_keys($subMenus["{$this->adminType}"]);
				$this->adminMethod=$getkey[0];
			}
			else{
				$this->adminMethod='mainoptions';
			}
		}
		else{
			$this->adminMethod=method;
		}
	
	echo"<br><br>
				<table width=\"100%\" cellSpacing=\"0\" cellPadding=\"0\" border=\"0\" align=\"center\">
					<tr>
						<td style=\"width:20px\">&nbsp;</td>";
					$count=0;
					foreach($menus as $key=>$row){
						if($count>0){
							echo"
							<td style=\"width:12px\">&nbsp;</td>";
						}
						$color=($this->adminType==$key ? 'white' : 'blue');
						$this->adminMenuRows($color,$row[0],$row[1]);
						$count++;
					}
						echo"
						<td style=\"width:90%\">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>";
			echo"
			<tr>
				<div background=\"images/x.gif\" colspan=\"2\" style=\"height:47px;padding-bottom:8px;background-image:url(images/x.gif);background-repeat:repeat-x\">";

			if($subMenus["{$this->adminType}"]){
				echo"
				<table cellSpacing=\"1\" cellPadding=\"4\" border=\"0\">
					<tr>&nbsp;";
					foreach($subMenus["{$this->adminType}"] as $key=>$cell){
						echo"
						<td><a class=\"".($key==$this->adminMethod ? 'normalhref' : 'normalcliked')."\" href=\"$cell[1]\"><nobr>$cell[0]</nobr></a></td>";
					}
					echo"
					</tr>
				</table>";
			}
				echo"
				</td>
			</tr>";
	
}	

	function PhotosBox($img,$subject,$id,$ret=true){
		$code="
		<div style=\"padding-top:22px;width:142px;height:142px;text-align:center;font-weight:bold;font-size:11px;color:#5d5d5d;background-image:url(images/adminpanel/background.gif);background-repeat:no-repeat\"><img src=\"upload/{$img}\" width=\"80\" height=\"80\" border=\"0\"><br><br><a href=\"cpadmin.php?type=galerie&method=trash&id=$id\" onclick=\"return confirm('Etes-vous sûr ?');\"><img border=\"0\" src=\"images/icons/delete.png\"></a></div>";
		if($ret){
			return $code;
		}
		else{
			echo $code;
		}
	}
	
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
			$code="<br><table cellPadding=\"0\" cellSpacing=\"2\" border=\"0\"><tr>
			<td valign=\"top\"><a$first><div class=\"pgFirst$firstDis\"></div></a></td>
			<td valign=\"top\"><a$prev><div class=\"pgPrev$firstDis\"></div></a></td>";
			if($pg>1){
				$equal=$pg-($pg==2?1:2);
				for($x=$equal;$x<$pg;$x++){
					$code.="<td align=\"center\" valign=\"top\"><a href=\"{$link}pg=$x\"><div valign=\"middle\" class=\"pgOut\">$x</div></a></td>";
				}
			}
			$code.="<td align=\"center\" valign=\"top\"><a><div class=\"pgIn\">$pg</div></a></td>";
			if($pg<$pages){
				$equal=$pg+($pg==($pages-1)?1:2);
				for($x=$pg+1;$x<=$equal;$x++){
					$code.="<td align=\"center\" valign=\"top\"><a href=\"{$link}pg=$x\"><div class=\"pgOut\">$x</div></a></td>";
				}
				$next=" href=\"{$link}pg=".($pg+1)."\" ";
				$last=" href=\"{$link}pg=$pages\" ";
			}
			else{
				$lastDis="Dis";
			}
			$code.="
			<td valign=\"top\"><a$next><div class=\"pgNext$lastDis\"></div></a></td>
			<td valign=\"top\"><a$last><div class=\"pgLast$lastDis\"></div></a></td>
			</tr></table><br>";
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




 function nostalgie_photo($id,$type) {
 	global $db;
	$photourl = $db->get("nostalgie","photo",$id);
	$up_folder = $db->get("nostalgie","up_folder",$id);
	if($id<=8){
		if($type=="S"){
		$value="uploads/S/$photourl";
		}elseif($type=="M"){
		$value="uploads/M/$photourl";
		}elseif($type=="R"){
		$value="uploads/R/$photourl";
		}
	}else{
		if($type=="S"){
		$value=$up_folder."s_".$photourl;
		}elseif($type=="M"){
		$value=$up_folder."m_".$photourl;
		}elseif($type=="R"){
		$value=$up_folder."r_".$photourl;
		}
	}
	return $value;
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
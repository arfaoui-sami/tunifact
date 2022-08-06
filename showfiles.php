<?php
require("dash/globals.php");
define('this_current_page','articles');
$tmp->homepage_ar();
// $tmp->slide_home_ar();
// $tmp->editor_pic_ar();


echo'
            <!--  Recent Articles start -->
            <div class="recent-area pt-10 pb-10">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
							<div class="widget-area">
                               
									
              ';
			  
if(type=="report"){
echo'
        <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_menu_report.'</span></h2>
                     <p class="">'.lang_page_report_text.'
                            </p>
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd-7dRL2w2_ELcYA3HFwaWGRbGTGPn0MG39e1XPbIjPsalhBA/viewform?embedded=true" width="590" height="1329" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading…</iframe>
                    </div>
                </div>
				
              
                        
                
            </div>
        </main>
       ';
	}
if(type=="contactusform"){
echo'
        <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_menu_contact.'</span></h2>
                     <p class="">'.lang_page_contact_text.'
                            </p>
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeFQddt8rEFP9MyxyIkI6tX3gBRJTA2qCWC3QvPvzoF28yGVw/viewform?embedded=true" width="590" height="790" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading…</iframe>                    
</div>
                </div>
				
              
                        
                
            </div>
        </main>
       ';
	}
if(type=="fr"){
echo'        <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_sorry_french.'</span></h2>
                     <p class="">'.lang_sorry_french_text.'
                            </p>
							<center><img class="col-lg-4" src="'.website_path.'assets/imgs/under.png" alt=""></center>
							 <p class=""></p>
							 <p class=""></p>
							 <p class=""></p>
							 <p class=""></p>
                    </div>
                </div>
				
              
                        
                
            </div>
        </main>';
}

if(type=="education"){
echo'            <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                   '.page_education.'


                    </div>
                </div>
				
              
                        
                
            </div>
        </main>';
}
			  
			  echo'
                    </div>
                </div>
                </div>
            </div>
           ';
$tmp->footer_arabic();
?>       
<?php
require("dash/globals.php");
define('this_current_page','articles');
$globaltype = $db->get("articles","global_type",id);
if($globaltype > 8 ){
	define('page_lang','fr');

$tmp->homepage_fr();
$text_err = "Cet article n'est pas disponible ";

}
	else {
$tmp->homepage_ar();
$text_err = lang_page_error_text;
}

echo'
<style>
a {
    color: #ff0000;
}
</style>';

// echo "G : ".$globaltype;
// echo ulv;
$topictype = $db->get("articles","type",id);
$status = $db->get("articles","status",id);
$user_author = $db->get("articles","user_id",id);
$current_url = $tmp->get_articles_url(id);

if($status !=1 and ulv < 1){
echo'
        <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="rtl">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.$text_err.'</span></h2>
                     <p class="">'.lang_page_error_text.'
                            </p>
							<center><img class="col-lg-3" src="'.website_path.'assets/imgs/notfound.png" alt=""></center>
                    </div>
                </div>
				
              
                        
                
            </div>
        </main>
       ';
$tmp->footer_arabic();

exit();
}
if($globaltype > 8 ){

	if($db->get_sql_double("viewscount","id","articleid",id,"adresseip",ip)=="none"){

	// echo"None ".$db->get_sql_double("viewscount","id","articleid",id,"adresseip",ip)." ";
	  $db->insert("viewscount (adresseip,articleid,date) VALUES ('".ip."','".id."','".time()."')"); 
	$db->update("articles SET hits = hits+1 WHERE id = '".id."' ");

	}

	
	
	if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_fr_post_true.'
                                        </span>';
						$code_color="#82b54b;";
			}else if($topictype==2){
						$typeofpost ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_fr_post_false.'
                                        </span>';
						$code_color="#e04f1a;";

			}else if($topictype==3){
						$typeofpost ='  <span type="button" class=" ar-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_fr_post_not_exact.' 
                                        </span>';
						$code_color="#ffb119;";

			}else if($topictype==4){
						$typeofpost ='  <span type="button" class=" ar-notexact mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_fr_post_confused.'
                                        </span>';
						$code_color="#6c757d;";

			}else if($topictype==5){
						$typeofpost ='     <span type="button" class=" ar-explicatif mr-1 mb-1">
                                            <i class="fa mr-1"></i> '.lang_fr_post_explicatif.'
                                        </span>';
						$code_color="#000000;";
						// $code_color_add="  text-shadow: 0 0 3px #d3d9df;";

			}
			
			
echo'
        <main class="position-relative">
            <!--Search Form-->
         						 								   

            <!--main content-->
            <div class="main_content sidebar_right ">
                <div class="container">
                    <div class="row">
                      <!--  <div class="col-lg-8 col-md-12 col-sm-12">-->
					      <div class="col-lg-8 col-md-12 col-sm-12">';
						  if($status !=1 and ulv >0){
							echo'
										<div class="alert alert-warning text-center">
										  <strong>'.lang_warning_text_topic.'</strong>
										</div>';
							}
							echo'										
						           <div class="entry-header entry-header-1 mb-20 ">
								<div id="content-desktop">		
								'.$typeofpost.'
                                <h1 class="post-title " >
                                 <span style="color: '.$code_color.'" dir="ltr"> '.$db->get("articles","title",id).'</span>
                                </h1>
								</div>
								<div id="content-mobile">		
								'.$typeofpost.'
                                <h3 class="post-title " >
                                 <span style="color: '.$code_color.'" dir="ltr"> '.$db->get("articles","title",id).'</span>
                                </h3>
								</div>
                               
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="single-social-share clearfix ">
                                    <div class="entry-meta meta-1 font-small color-grey float-right mt-10">
                                    <span class="post-on has-dot ">'.showdate($db->get("articles","date",id)).'</span>

                                    </div>
									<div id="content-mobile">Partager</div> 
	

									<ul class="d-inline-block list-inline float-left">
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center color-white" target="_blank" href="http://www.facebook.com/sharer.php?u='.$current_url.'"><i class="ti-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center color-white" target="_blank" href="http://twitter.com/share?url='.$current_url.'&text='.$db->get("articles","title",id).'&hashtags=Tunifact&hashtags=تونس_تتحرى" ><i class="ti-twitter-alt"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon whatsapp-icon text-xs-center color-white" target="_blank" href="whatsapp://send?text=='.$db->get("articles","title",id).' '.$current_url.'"  data-action="share/whatsapp/share">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
</svg>
										
										</a></li>
                                    </ul>
									<div id="content-desktop">	</div> 

                                </div>
                            </div>
                            <!--end entry header-->
                            <figure class="single-thumnail">
                                <div class="featured-slider-1 border-radius-5">
                                    <div class="featured-slider-1-items">
                                        <div class="slider-single">
                                            <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",id)).'m_'.$db->get("articles","urllink",id).'" alt="">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="arrow-cover"></div>
                               
                            </figure> 
                            <div class="articles-height " dir="ltr">
                                <p class="font-large  ">'.$db->get("articles","message",id).'</p>
									<p>&nbsp;</p>
														<div class="bt-1 border-color-1 mt-30 mb-30"></div>

                            </div>

                           
                         
                    
						
                                    <!--Widget about-->
                                <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 background12 border-radius-5"  id="content-mobile">
                                    <h5 class="mb-20 "><a target="_blank" href="'.$tmp->get_author_url($user_author).'">'.$db->get("users","showname",$user_author).'
									<img class="about-author-img float-right ml-20" src="'.website_path.''.$db->get("users","photo",$user_author).'" alt=""></a></h5>
                                    <p class="font-medium ">'.$db->get("users","description_fr",$user_author).'</p>
                                    <ul class="header-social-network d-inline-block list-inline color-white mb-20">';
                                        
										if($db->get("users","fb_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="'.$db->get("users","fb_link",$user_author).'"><i class="ti-facebook"></i></a></li>';
										} 
										if($db->get("users","twitter_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="'.$db->get("users","twitter_link",$user_author).'"><i class="ti-twitter-alt"></i></a></li>';
										}   
										if($db->get("users","instagram_link",$user_author)!=""){
										echo'
										<li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="'.$db->get("users","instagram_link",$user_author).'"><i class="ti-instagram"></i></a></li>';
										}
										echo'
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                                <!--Widget social--> 
                        </div>
                        
						
		
	
							
						<div class="col-lg-4 col-md-12 col-sm-12 primary-sidebar sticky-sidebar">
						
						 <div class="widget-area pl-30">
                                <!--Widget about-->
                                <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 background12 border-radius-5"  id="content-desktop">
                                    <h5 class="mb-20 "><a target="_blank" href="'.$tmp->get_author_url($user_author).'">'.$db->get("users","showname",$user_author).'<img class="about-author-img float-right ml-20" src="'.website_path.''.$db->get("users","photo",$user_author).'" alt=""></a></h5>
                                    <p class="font-medium ">'.$db->get("users","description_fr",$user_author).'</p>
                                    <ul class="header-social-network d-inline-block list-inline color-white mb-20">';
                                        
										if($db->get("users","fb_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="'.$db->get("users","fb_link",$user_author).'"><i class="ti-facebook"></i></a></li>';
										} 
										if($db->get("users","twitter_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="'.$db->get("users","twitter_link",$user_author).'"><i class="ti-twitter-alt"></i></a></li>';
										}   
										if($db->get("users","instagram_link",$user_author)!=""){
										echo'
										<li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="'.$db->get("users","instagram_link",$user_author).'"><i class="ti-instagram"></i></a></li>';
										}
										echo'
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                                <!--Widget social--> <div id="content-desktop">';
                          $tmp->social_media_ar();
						  echo'</div>
						  <div id="content-desktop">';
						  $tmp->recent_topics_fr();


                          echo'    
							</div>

						  </div>
                            <!--related posts-->
                        </div>
                        <!--col-lg-8-->
                        <!--Right sidebar-->
                        <!-- <div class="col-lg-4 col-md-12 col-sm-12 primary-sidebar sticky-sidebar">-->
						
										<!--End sidebar-->
                    </div>
                </div>
            </div>
	';
					
	}
else 	{
	
	
		if($db->get_sql_double("viewscount","id","articleid",id,"adresseip",ip)=="none"){

	// echo"None ".$db->get_sql_double("viewscount","id","articleid",id,"adresseip",ip)." ";
	  $db->insert("viewscount (adresseip,articleid,date) VALUES ('".ip."','".id."','".time()."')"); 
	$db->update("articles SET hits = hits+1 WHERE id = '".id."' ");

	}
if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-1 mb-1">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
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
			
			
echo'
        <main class="position-relative">
            <!--Search Form-->
         						 								   

            <!--main content-->
            <div class="main_content sidebar_right ">
                <div class="container">
                    <div class="row">
                      <!--  <div class="col-lg-8 col-md-12 col-sm-12">-->
					      <div class="col-lg-4 col-md-12 col-sm-12 primary-sidebar sticky-sidebar">

                        <div class="widget-area pl-30">
                                <!--Widget about-->
                                <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 background12 border-radius-5"  id="content-desktop">
                                    <h5 class="mb-20 ar_text">'.lang_author.'<a target="_blank" href="'.$tmp->get_author_url($user_author).'">'.$db->get("users","showname",$user_author).'<img class="about-author-img float-right ml-20" src="'.website_path.''.$db->get("users","photo",$user_author).'" alt=""></a></h5>
                                    <p class="font-medium ar_text">'.$db->get("users","description_ar",$user_author).'</p>
                                    <ul class="header-social-network d-inline-block list-inline color-white mb-20">';
                                        
										if($db->get("users","fb_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="'.$db->get("users","fb_link",$user_author).'"><i class="ti-facebook"></i></a></li>';
										} 
										if($db->get("users","twitter_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="'.$db->get("users","twitter_link",$user_author).'"><i class="ti-twitter-alt"></i></a></li>';
										}   
										if($db->get("users","instagram_link",$user_author)!=""){
										echo'
										<li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="'.$db->get("users","instagram_link",$user_author).'"><i class="ti-instagram"></i></a></li>';
										}
										echo'
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                                <!--Widget social--> <div id="content-desktop">';
                          $tmp->social_media_ar();
						  echo'</div>
						  <div id="content-desktop">';
						  $tmp->recent_topics();


                          echo'    
</div>

						  </div>
                            <!--related posts-->
                        </div>
                        <!--col-lg-8-->
                        <!--Right sidebar-->
                        <!-- <div class="col-lg-4 col-md-12 col-sm-12 primary-sidebar sticky-sidebar">-->
						 <div class="col-lg-8 col-md-12 col-sm-12">';
							if($status !=1 and ulv >0){
							echo'
										<div class="alert alert-warning text-center">
										  <strong>'.lang_warning_text_topic.'</strong>
										</div>';
							}
							echo'										
						           <div class="entry-header entry-header-1 mb-20 ar_text">
								<div id="content-desktop">		
								'.$typeofpost.'
                                <h1 class="post-title ar_text" >
                                 <span style="color: '.$code_color.'" dir="rtl"> '.$db->get("articles","title",id).'</span>
                                </h1>
								</div>
								<div id="content-mobile">		
								'.$typeofpost.'
                                <h3 class="post-title ar_text" >
                                 <span style="color: '.$code_color.'" dir="rtl"> '.$db->get("articles","title",id).'</span>
                                </h3>
								</div>
                               
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="single-social-share clearfix ">
                                    <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                                    <span class="post-on has-dot ">'.showdate($db->get("articles","date",id)).'</span>

                                    </div>
									<div id="content-mobile">	شارك المقال</div> 
	

									<ul class="d-inline-block list-inline float-left">
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center color-white" target="_blank" href="http://www.facebook.com/sharer.php?u='.$current_url.'"><i class="ti-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center color-white" target="_blank" href="http://twitter.com/share?url='.$current_url.'&text='.$db->get("articles","title",id).'&hashtags=Tunifact&hashtags=تونس_تتحرى" ><i class="ti-twitter-alt"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon whatsapp-icon text-xs-center color-white" target="_blank" href="whatsapp://send?text=='.$db->get("articles","title",id).' '.$current_url.'"  data-action="share/whatsapp/share">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
</svg>
										
										</a></li>
                                    </ul>
									<div id="content-desktop">	شارك المقال</div> ';
									if($user_author == uid or ulv > 3){ 
									echo'
									<div>
									  <li class="list-inline-item">
									  <a class="social-icon fa fa-pencil" target="_blank" href="'.website_path.'/dash/?type=editpost&id='.id.'">												<i class="fa fa-fw fa-pencil-alt text-primarys"></i></a></li>
									</div>';
									}
echo'
                                </div>
                            </div>
                            <!--end entry header-->
                            <figure class="single-thumnail">
                                <div class="featured-slider-1 border-radius-5">
                                    <div class="featured-slider-1-items">
                                        <div class="slider-single">
                                            <img src="'.website_path.str_replace('../','',$db->get("articles","up_folder",id)).'m_'.$db->get("articles","urllink",id).'" alt="">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="arrow-cover"></div>
                               
                            </figure> 
                            <div class="articles-height ar_text" dir="rtl">
                                <p class="font-large  ar_text">'.$db->get("articles","message",id).'</p>
									<p>&nbsp;</p>
														<div class="bt-1 border-color-1 mt-30 mb-30"></div>

                            </div>

                           
                         
                    
						
                                    <!--Widget about-->
                                <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 background12 border-radius-5"  id="content-mobile">
                                    <h5 class="mb-20 ar_text">'.lang_author.'<a target="_blank" href="'.$tmp->get_author_url($user_author).'">'.$db->get("users","showname",$user_author).'<img class="about-author-img float-right ml-20" src="'.website_path.''.$db->get("users","photo",$user_author).'" alt=""></a></h5>
                                    <p class="font-medium ar_text">'.$db->get("users","description_ar",$user_author).'</p>
                                    <ul class="header-social-network d-inline-block list-inline color-white mb-20">';
                                        
										if($db->get("users","fb_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="'.$db->get("users","fb_link",$user_author).'"><i class="ti-facebook"></i></a></li>';
										} 
										if($db->get("users","twitter_link",$user_author)!=""){
										echo'
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="'.$db->get("users","twitter_link",$user_author).'"><i class="ti-twitter-alt"></i></a></li>';
										}   
										if($db->get("users","instagram_link",$user_author)!=""){
										echo'
										<li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="'.$db->get("users","instagram_link",$user_author).'"><i class="ti-instagram"></i></a></li>';
										}
										echo'
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                                <!--Widget social--> 
                        </div>
                        
						
						<!--End sidebar-->
                    </div>
                </div>
            </div>';
			
		} // lang end
$tmp->footer_arabic();
?>       
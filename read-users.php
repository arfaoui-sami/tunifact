<?php
require("dash/globals.php");
define('this_current_page','author');
$tmp->homepage_ar();

// echo ulv;
$status = $db->get("users","status",id);
$name = $db->get("users","name",id);
$user_author = id;
$num_pages=10;
$pgLimit=$tmp->pgLimit($num_pages);

if($status !=1 and ulv < 1 or (ulv > 0 and $name == "none") or id ==1){
echo'
        <main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="rtl">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_page_error.'</span></h2>
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
		
echo'
        <main class="position-relative">
            <!--Search Form-->
         						 								   

            <!--main content-->
            <div class="main_content sidebar_right pb-50 pt-50">
                <div class="container">
                    <div class="row">
                      <!--  <div class="col-lg-8 col-md-12 col-sm-12">-->
					      <div class="col-lg-4 col-md-12 col-sm-12 primary-sidebar sticky-sidebar">

                        <div class="widget-area pl-30">
                            ';
                          $tmp->social_media_ar();
						 $tmp->recent_topics();

                          echo'     </div>
                            <!--related posts-->
                        </div>
                        <!--col-lg-8-->
                        <!--Right sidebar-->
                        <!-- <div class="col-lg-4 col-md-12 col-sm-12 primary-sidebar sticky-sidebar">-->
						 <div class="col-lg-8 col-md-12 col-sm-12">';
							
							echo'										
						           <div class="entry-header entry-header-1 mb-30 ar_text">
								 						 	   <!--Widget about-->
                                <div class="">
                                    <h5 class="mb-20 ar_text"> '.lang_author.'<a target="_blank" href="'.$tmp->get_author_url($user_author).'">'.$db->get("users","showname",$user_author).'<img class="about-author-img float-right ml-20" src="'.website_path.''.$db->get("users","photo",$user_author).'" alt=""></a></h5>
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
                                <h5 class="mb-5 ar_text">'.lang_author_topics.'</h5>

                               
                            </div>
                         
                          

                        <div class="col-lg-10 col-md-12">
                           <div class="loop-list">

							  ';
		$sql=$db->select("articles where status='1' and user_id ='".id."' order by id desc limit $pgLimit,$num_pages","*");
		$count=0;
		$certif_count=1;
		while($rs=$db->fetchAssoc($sql)){
			$topic_id=$rs["id"];
			$topictype=$rs["type"];
			$topicstatus=$rs["status"];
			$title=$rs["title"];
			$introduction=$rs["introduction"];
			$datetopic=$rs["date"];
			$up_folder=	str_replace('../','',$rs["up_folder"]);
			$urllink=$rs["urllink"];

			
			if($topictype==1){
						$typeofpost ='  <span type="button" class=" ar-true mr-1 mb-1"><small>
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'</small>
                                        </span>';
						$code_color="#82b54b;";
			}else if($topictype==2){
						$typeofpost ='  <span type="button" class=" ar-false mr-1 mb-1">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </span>';
						$code_color="#e21613;";

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
						$code_color="#219ebc;";

			}
			
			echo'
			
			             <article class="row mb-50">
                                 	<div class="col-md-6 " id="content-mobile">

											<div class="post-thumb position-relative thumb-overlay mr-20">
												<div class="img-hover-slide border-radius-5 position-relative"  style="border: 5px solid '.$code_color.'; background-image: url('.$up_folder.''.$urllink.');">
													<a class="img-link" href="'.$tmp->get_articles_url($topic_id).'"></a>
													<span class=""><i class=""></i></span>
												</div>
                                            </div>
                                    </div>
                                    <div class="col-md-8 align-center-vertical">
                                        <div class="post-content ar_text">
                                            <div class="meta-0 font-small mb-15"><a href="category.html">
											'.$typeofpost .'
											</a></div>
                                            <h4 class="post-title ar_text">
                                                <a href="'.$tmp->get_articles_url($topic_id).'">'.$title.'</a>
                                            </h4>
                                            <div class="entry-meta meta-1 font-small color-grey mt-15 mb-15" dir="rtl">
                                                        <span class="post-on"  >'.showdate($db->get("articles","date",$topic_id)).'</span>
														<span class="time-reading" >|  10 دقائق</span>
                                            </div>
											
											<p class="font-medium">'.$introduction.'</p>
                                        </div>
                                    </div>
									<div class="col-md-4 " id="content-desktop" >
											<div class="post-thumb position-relative thumb-overlay mr-20 " >
												<div class="img-hover-slide-home border-radius-5 position-relative"  style="border-left: 10px solid '.$code_color.';">
													<a href="'.$tmp->get_articles_url($topic_id).'"><img src="'.website_path.''.$up_folder.'r_'.$urllink.'" class="img-hover-zoom--slowmo" onerror="this.onerror=null;this.src=\''.website_path.'assets/imgs/err.jpg\';"></a>
												</div>
                                            </div>
                                    </div>
                                </article>
			
			
			';
		$count++;
			$certif_count++;
		}
      
							 echo'
                               
                            </div>
                  
                       
                        </div>
                           
                         									<div class="col-4 " dir="rtl">

                    							'.$tmp->paging_home("articles  where status='1' and user_id ='".id."'  ","".$tmp->get_author_url(id)."","id",$num_pages).'
					                        </div>

							
							
                            
                        </div>
                        <!--End sidebar-->
                    </div>
                </div>
            </div>';
$tmp->footer_arabic();
?>       
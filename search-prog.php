<?php
require("dash/globals.php");
define('this_current_page','author');

// echo ulv;
$search_value=$tmp->cleanQuery($_POST["searchinput"]);
$search_value_secend=$_POST["searchinput"];
if(!$tmp->cleanQuery){
// @setCookie('active_search','1',(60*1*60));
$search_value_secend=$tmp->clean_symbols($_POST["searchinput"]);

}
$tmp->homepage_ar();



// $user_author = id;
$num_pages=30;
$pgLimit=$tmp->pgLimit($num_pages);

// if($tmp->getCookie("active_search")==1){
// echo'
        // <main class="position-relative">

            // <!--main content-->
            // <div class="main_content sidebar_right" dir="rtl">
			                // <div class="page-header page-header-style-1 text-center">
                    // <div class="container">
                        // <h2><span class="color1">'.lang_page_error_search.'</span></h2>
                     // <p class="">
                            // </p>
							// <center></center>
                    // </div>
                // </div>
				
              
                        
                
            // </div>
        // </main>
       // ';
// $tmp->footer_arabic();

// exit();
// }


		$sql=$db->select("articles where status='1' and ( title like '%$search_value_secend%' or  introduction like '%$search_value_secend%'  or  keywords	 like '%$search_value_secend%' or  message	 like '%$search_value_secend%')  order by id desc limit $pgLimit,$num_pages","*");
		$count=0;
		while($rs=$db->fetchAssoc($sql)){
			$topic_id=$rs["id"];
			$topictype=$rs["type"];
			$topicstatus=$rs["status"];
			$title=$rs["title"];
			$introduction=$rs["introduction"];
			$datetopic=$rs["date"];
			$up_folder=	str_replace('../','',$rs["up_folder"]);
			$urllink=$rs["urllink"];
		$count++;
			$certif_count++;
		}
		if($count<=0){
			echo'<main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="rtl">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_sorry_search.'</span></h2>
                     <p class="">
                            </p>
							<center><img class="col-lg-3" src="'.website_path.'assets/imgs/notfound.png" alt=""></center>
                    </div>
                </div>
				
              
                        
                
            </div>
        </main>';
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
								 											 										

                               
                            </div>
                         
                          

                        <div class="col-lg-10 col-md-12">
                           <div class="loop-list">

							  ';
		$sql=$db->select("articles where status='1' and ( title like '%$search_value_secend%' or  introduction like '%$search_value_secend%'  or  keywords	 like '%$search_value_secend%' or  message	 like '%$search_value_secend%')  order by id desc limit $pgLimit,$num_pages","*");
		$count=0;
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
						$code_color="#dae0e5;";

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
													<a href="'.$tmp->get_articles_url($topic_id).'"><img src="'.website_path.''.$up_folder.''.$urllink.'" class="img-hover-zoom--slowmo" onerror="this.onerror=null;this.src=\''.website_path.'assets/imgs/err.jpg\';"></a>
												</div>
                                            </div>
                                    </div>
                                </article>
			
			
			';
		$count++;
			$certif_count++;
		}
		if($count<=0){
			echo'<main class="position-relative">

            <!--main content-->
            <div class="main_content sidebar_right" dir="rtl">
			                <div class="page-header page-header-style-1 text-center">
                    <div class="container">
                        <h2><span class="color1">'.lang_sorry_cat.'</span></h2>
                     <p class="">'.lang_page_error_text.'
                            </p>
							<center><img class="col-lg-3" src="'.website_path.'assets/imgs/notfound.png" alt=""></center>
                    </div>
                </div>
				
              
                        
                
            </div>
        </main>';
		}
      
							 echo'
                               
                            </div>
                  
                       
                        </div>
                           
                         									<div class="col-4 " dir="rtl">

                    							'.$tmp->paging_home("articles  where status='1' and global_type ='".id."'  ","".$tmp->get_cat_url(id)."","id",$num_pages).'
					                        </div>

							
							
                            
                        </div>
                        <!--End sidebar-->
                    </div>
                </div>
            </div>';
$tmp->footer_arabic();
?>       
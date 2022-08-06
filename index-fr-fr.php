<?php
require("dash/globals.php");
	define('page_lang','fr');

define('this_current_page','homepage');
$tmp->homepage_ar();
$tmp->slide_home_fr();
// $tmp->editor_pic_ar();


echo'
            <!--  Recent Articles start -->
            <div class="recent-area pt-50 pb-50">
                <div class="container">
                    <div class="row">
                     
                        <div class="col-lg-8 col-md-12">
                           <div class="loop-list">
                               
							  ';
		$sql=$db->select("articles where status='1' and type !='5' and global_type > 8  order by id desc limit 5","*");
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
			
			         	   <article class="row mb-50">
                                    <div class="col-md-6">
                                        <div class="post-thumb position-relative thumb-overlay mr-20">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="border-left: 15px solid '.$code_color.'; background-image: url('.website_path.''.$up_folder.'m_'.$urllink.')">
                                                <a class="img-link" href="'.$tmp->get_articles_url($topic_id).'"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 align-center-vertical">
                                        <div class="post-content">
                                            <div class="entry-meta  mb-15">'.$typeofpost .'</div>
                                            <h4 class="post-title">
                                                <a href="'.$tmp->get_articles_url($topic_id).'">'.$title.'</a>
                                            </h4>
                                            <div class="entry-meta meta-1 font-small color-grey mt-15 mb-15">
                                                <span class="post-on">'.showdate($db->get("articles","date",$topic_id)).'</span>
                                            </div>
                                            <p class="font-medium">'.$introduction.'</p>
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
                    </div>
                </div>
            </div>
            <!--Recent Articles End -->';
$tmp->footer_arabic();
?>       
<?php
require("globals.php");

if(ulv>0){
	
	if(uid==1){

		ini_set('display_errors',1); 
 error_reporting(E_ALL);
 
 }
 
 
 if(type=="login"){
	 $tmp->gourlwithsec("0","?type=home");
	 }
 
	// echo uname;
// Level Start
$tmp->admin_head_all();
if(type=="home"){
	
$num_pages=15;
$pgLimit=$tmp->pgLimit($num_pages);
if(method=="show_user"){
	$add_to_sql = " and user_id = '".id."' ";
	$add_to_link = "method=show_user&id=".id."& ";
	$text_user_posts = ": ".lang_home_posts_show_user." ".$db->get("users","showname",id)." " ;
}
if(method=="draft"){
	$add_to_sql = " and status = '0' ";
	$add_to_link = "method=draft&";
	$text_user_posts = ": ".lang_home_all_posts_drafts." " ;
}
	if(method=="public"){
	$add_to_sql = " and status = '1' ";
	$add_to_link = "method=public&";
	$text_user_posts = ": ".lang_home_all_posts_publics." " ;
}
	if(method=="programmed"){
	$add_to_sql = " and status = '3' ";
	$add_to_link = "method=programmed&";
	$text_user_posts = ": ".lang_home_all_posts_programmed." " ;
}
	if(method=="hidden"){
	$add_to_sql = " and status = '2' ";
	$add_to_link = "method=hidden&";
	$text_user_posts = ": ".lang_home_all_posts_hidden." " ;
}		

echo' <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_home.'</h1>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                  <!-- Page Content -->
                <div class="content content-full">
                    <!-- Posts Statistics -->
                    <div class="row text-center">
                        <div class="col-6 col-xl-2">
                            <!-- All Posts -->
                            <a class="block block-rounded" href="?type=home">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="far fa-2x fa-file-alt opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                           '.$db->select_cn("articles where status !='4' ").'
                                        </p>
                                        <p class="text-muted mb-0">
                                            '.lang_home_all_posts.'
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END All Posts -->
                        </div>
                        <div class="col-6 col-xl-2">
                            <!-- Active Posts -->
                            <a class="block block-rounded" href="?type=home&method=public">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="fa fa-fw fa-globe-americas  far fa-2x fa-eye opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            '.$db->select_cn("articles where status ='1' ").'
                                        </p>
                                        <p class="text-muted mb-0">
                                            '.lang_home_all_posts_active.'
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END Active Posts -->
                        </div>
                        <div class="col-6 col-xl-2">
                            <!-- Draft Posts -->
                            <a class="block block-rounded" href="?type=home&method=draft">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="fa fa-2x fa-pencil-alt opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            '.$db->select_cn("articles where status ='0' ").'
                                        </p>
                                        <p class="text-muted mb-0">
                                            '.lang_home_all_posts_drafts.'
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END Draft Posts -->
                        </div>
                        <div class="col-6 col-xl-2">
                            <!-- Draft Posts -->
                            <a class="block block-rounded" href="?type=home&method=programmed">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="fa fa-2x fa-clock opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            '.$db->select_cn("articles where status ='3' ").'
                                        </p>
                                        <p class="text-muted mb-0">
                                            '.lang_home_all_posts_programmed.'
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END Draft Posts -->
                        </div>
                        <div class="col-6 col-xl-2">
                            <!-- Draft Posts -->
                            <a class="block block-rounded" href="?type=home&method=hidden">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="fa fa-2x fa-eye-slash opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            '.$db->select_cn("articles where status ='2' ").'
                                        </p>
                                        <p class="text-muted mb-0">
                                            '.lang_home_all_posts_hidden.'
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END Draft Posts -->
                        </div>
                        <div class="col-6 col-xl-2">
                            <!-- New Post -->
                            <a class="block block-rounded" href="?type=add_new_topic">
                                <div class="block-content block-content-full">
                                    <div class="py-md-2">
                                        <div class="py-2 d-none d-md-block">
                                            <i class="fa fa-2x fa-plus text-success-light"></i>
                                        </div>
                                        <p class="font-size-h4 font-w700 mb-0">
                                            <i class="fa fa-plus text-success-light mr-1 d-md-none"></i>'.lang_home_new_post.'
                                        </p>
                                        <p class="text-muted mb-0">
                                          &nbsp;
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END New Post -->
                        </div>
                    </div>
                    <!-- Post Statistics -->

                    <!-- Posts -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">'.lang_home_posts.'<b> '.$text_user_posts.'</b></h3>
                        </div>
                        <div class="block-content">
                            <!-- Search Posts -->
                            <form class="push" action="be_pages_blog_post_manage.html" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="'.lang_home_posts_search.'">
                                    <div class="input-group-append">
                                       	  <button type="button" class="btn btn-alt-secondary mr-1 mb-3">
                                            <i class="fa fa-fw fa-search opacity-50 mr-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search Posts -->
                            <!-- Posts Table -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 60px;">'.lang_home_posts_id.'</th>
                                        <th style="width: 33%;">'.lang_home_posts_title.'</th>
                                        <th class="d-none d-sm-table-cell">'.lang_home_posts_author.'</th>
                                        <th class="d-none d-xl-table-cell">'.lang_home_posts_created.'</th>
                                        <th class="d-none d-xl-table-cell">'.lang_home_posts_type.'</th>
                                        <th style="width: 140px;" class="text-center">'.lang_home_posts_actions.'</th>
                                    </tr>
                                </thead>
                                <tbody>';
								// status 0 = draft
								// status 1 =  published
								// status 2 =  disabled
								// status 3 =  programmed
								// status 4 =  deleted
		$sql=$db->select("articles where status!='4' $add_to_sql order by id desc limit $pgLimit,$num_pages","*");
		$count=0;
		$certif_count=1;
		while($rs=$db->fetchAssoc($sql)){
			$topic_id=$rs["id"];
			$topictype=$rs["type"];
			$topicstatus=$rs["status"];
			$user_id=$rs["user_id"];
			if($topicstatus==0){
				$bg_now ="bg-modern";
				$href_to_link ="?type=home_certif&id=".$rs['id']."";
				$icon_finder ="fa fa-eye text-danger mr-1";
				$sitation_status = lang_post_situation_draft;
				}
			else if($topicstatus==1){
				$bg_now ="bg-gray-dark";
				$href_to_link ="#";
				$icon_finder ="fa fa-eye text-success mr-1";
				$sitation_status = lang_post_situation_published;
			}
			else if($topicstatus==2){
				$bg_now ="bg-gray-dark";
				$href_to_link ="#";
				$icon_finder ="fa fa-eye text-danger mr-1";
				$sitation_status = lang_post_situation_hidden;
			}
			else if($topicstatus==3){
				$bg_now ="bg-gray-dark";
				$href_to_link ="#";
				$icon_finder ="fa fa-clock text-info mr-1";
				$sitation_status = lang_post_situation_programed;
				// $date_to_publish_artic = ';
			}	
			
			
			if($topictype==1){
				$typeofpost ='  <button type="button" class="btn btn-success mr-1 mb-3">
                    <i class="fa fa-check mr-1"></i> '.lang_post_true.'
                                        </button>';
			}else if($topictype==2){
						$typeofpost ='     <button type="button" class="btn btn-danger mr-1 mb-3">
                                            <i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
                                        </button>';
			}else if($topictype==3){
						$typeofpost ='     <button type="button" class="btn btn-warning mr-1 mb-3">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                        </button>';
			}else if($topictype==4){
						$typeofpost ='     <button type="button" class="btn btn-secondary mr-1 mb-3">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
                                        </button>';
			}else if($topictype==5){
						$typeofpost ='     <button type="button" class="btn btn-light mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_explicatif.'
                                        </button>

										
										';
			}
			
			echo'
			
                    
						
						    <tr>
                                        <td>
                                          '.$topic_id.'
                                        </td>
                                        <td>
                                            <i class="'.$icon_finder.'"  data-toggle="tooltip" data-placement="top" title="'.$sitation_status.'"></i>
                                            <a href="'.$tmp->get_articles_url($topic_id).'" target="_blank" class="text-gray-darker">
                                         '.$rs["title"].' 
                                            </a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="?type=home&method=show_user&id='.$rs["user_id"].'">'.$db->get("users","showname",$rs["user_id"]).'</a>
                                        </td>
                                        <td class="d-none d-xl-table-cell" dir="ltr">
                                           ' . showdate($rs["date"]);
										   if($topicstatus == 3){
										 echo'<br> <i class="fa fa-clock text-info"></i><span class="text-info"> '.showdate($rs["publishdate"]).' <span>';

										   }
										  
										  echo'
                                        </td>
										<td class="d-none d-xl-table-cell">
                                      '.$typeofpost.'
                                        </td>
                                        <td class="text-center">';
										
											if($user_id == uid or ulv > 3){ 
												echo'
                                            <a class="btn btn-sm btn-light" href="?type=editpost&id='.$topic_id.'" data-toggle="tooltip" data-placement="top" title="'.lang_edit_this_topic.'" >

												<i class="fa fa-fw fa-pencil-alt text-primarys"></i>
                                            </a>
											<a class="btn btn-sm btn-light" href="?type=topic_tools&method=del&id='.$topic_id.'" data-toggle="tooltip" data-placement="top" title="'.lang_delete_this_topic.'" onClick="return confirm(\''.lang_delete_this_topic_confirmation.'\')">

                                                <i class="fa fa-fw fa-trash text-danger" ></i>
                                            </a>';
											if($topicstatus != 1){
												echo'<a class="btn btn-sm btn-light" href="?type=topic_tools&method=publish&id='.$topic_id.'" data-toggle="tooltip" data-placement="top" title="'.lang_publish_this_topic.'" onClick="return confirm(\''.lang_publish_this_topic_confirmation.'\')">
												<i class="fa fa-fw fa-globe-americas text-success"></i>

                                            </a>';
											 }else {
											echo'
											<a class="btn btn-sm btn-light" href="?type=topic_tools&method=hide&id='.$topic_id.'" data-toggle="tooltip" data-placement="top" title="'.lang_hide_this_topic.'" onClick="return confirm(\''.lang_hide_this_topic_confirmation.'\')">
												<i class="fa fa-fw fa-eye-slash text-danger"></i>
                                            </a>';
											 }
											 
											 } // level & uid
											 
											 
											echo'
                                        </td>
                                    </tr>
                        <!-- END Course -->
			';
			
			$count++;
			$certif_count++;
		}
      
								
								echo'
                                
                                   
                                    
                           
                                </tbody>
                            </table>
                            <!-- END Posts Table -->

                            <!-- Posts Pagincation -->
                            <nav aria-label="Posts Navigation">
							'.$tmp->paging("articles where status!=\"4\" $add_to_sql  ","?type=home&$add_to_link","id",$num_pages).'
                         
                            </nav>
                            <!-- END Posts Pagincation -->
                        </div>
                    </div>
                    <!-- END Posts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
';
}
// end type == "home"


if(type=="editpost" and uid!=$db->get("articles","user_id",id) and ulv <4 ){
		$tmp->infomsg(1, lang_you_are_not_allowed);
}



if(type=="add_new_topic" or (type=="editpost" and uid==$db->get("articles","user_id",id)) or (type=="editpost" and ulv > 3)){
	
if(type=="editpost"){

$titre  = $db->get("articles","title",id);
$introduction  = $db->get("articles","introduction",id);
$keywords  = $db->get("articles","keywords",id);
$message  = $db->get("articles","message",id);
$type  = $db->get("articles","type",id);
$up_folder  = $db->get("articles","up_folder",id);
$urllink  = $db->get("articles","urllink",id);
$status  = $db->get("articles","status",id);
$posttype  = $db->get("articles","type",id);
$global_type  = $db->get("articles","global_type",id);
$submit_form_url  = "?type=send_topic&method=up_top";
$post_submit  = lang_home_posts_up_post;
	}
else if(type=="add_new_topic"){
$submit_form_url  = "?type=send_topic&method=ins_top";
$post_submit  = lang_home_posts_create_post;
}

	
echo'        <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
<script type="text/javascript">

var formSubmitting = false;
var setFormSubmitting = function() { formSubmitting = true; };

window.onload = function() {
    window.addEventListener("beforeunload", function (e) {
        if (formSubmitting) {
            return undefined;
        }

        var confirmationMessage = \''.lang_post_alert_one.' \'
                                + \''.lang_post_alert_two.'\';

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    });
};
</script>';

if(type=="add_new_topic"){
echo'
<script type="text/javascript">
function submitForm()
{
	
	if (topicform.posttitle.value.length == 0){
	confirm("'.lang_enter_your_title.'");
	return;
	}else if (topicform.description.value.length == 0){
	confirm("'.lang_enter_your_description.'");
	return;
	}else if (topicform.keywords.value.length == 0){
	confirm("'.lang_enter_your_keywords.'");
	return;
	}else if (topicform.file.value.length == 0){
	confirm("'.lang_enter_your_picture.'");
	return;
	}else if (topicform.body_text.value.length == 0){
	confirm("'.lang_enter_your_text.'");
	return;
	}else if (topicform.posttype.value.length == 0){
	confirm("'.lang_enter_the_type.'");
	return;
	}
    else  if(!confirm("'.lang_confirm_your_post.'")) {
    return false;
	}
	topicform.submit();
	setFormSubmitting();
}
</script>';

}else if(type=="editpost"){

echo'
<script type="text/javascript">
function submitForm()
{
	
	if (topicform.posttitle.value.length == 0){
	confirm("'.lang_enter_your_title.'");
	return;
	}else if (topicform.description.value.length == 0){
	confirm("'.lang_enter_your_description.'");
	return;
	}else if (topicform.keywords.value.length == 0){
	confirm("'.lang_enter_your_keywords.'");
	return;
	}else if (topicform.body_text.value.length == 0){
	confirm("'.lang_enter_your_text.'");
	return;
	}else if (topicform.posttype.value.length == 0){
	confirm("'.lang_enter_the_type.'");
	return;
	}
    else  if(!confirm("'.lang_confirm_your_post.'")) {
    return false;
	}
	topicform.submit();
	setFormSubmitting();
}
</script>';
}
echo'
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-full content-boxed">
                    <!-- New Post -->
                    <form action="'.$submit_form_url.'" method="post" enctype="multipart/form-data"  class="js-validation" name="topicform">
					<input type="hidden" value="'.get_sec.'" name="security">
					<input type="hidden" value="'.id.'" name="post_id">

                        <div class="block">
                            <div class="block-header block-header-default">
                                <a >
                                  
                                </a>
                                <div class="block-options">
                                    <div class="custom-control custom-switch custom-control-success">
                                        <input type="checkbox" class="custom-control-input" id="dm-post-add-active" name="post_situation" '.$tmp->choose($status,1,'c').' value="1">
                                        <label class="custom-control-label" for="dm-post-add-active">'.lang_post_add_public.'</label>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="dm-post-add-title">'.lang_home_posts_post_title.'</label>
                                            <input type="text" id="val-suggestions" class="form-control" id="dm-post-add-title" name="posttitle" placeholder="'.lang_home_posts_post_title.'.." value="'.$titre.'">
                                        </div>
                                        <div class="form-group">
                                            <label for="dm-post-add-excerpt">'.lang_home_posts_post_description.'</label>
                                            <textarea class="form-control" id="dm-post-add-excerpt" name="description" rows="3" placeholder="'.lang_home_posts_post_description.' ..">'.$introduction.'</textarea>
                                            <div class="form-text text-muted font-size-sm font-italic"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dm-post-add-keywords">'.lang_home_posts_post_keywords.'</label>
                                            <textarea class="form-control" id="dm-post-add-keywords" name="keywords" rows="3" placeholder="'.lang_home_posts_post_keywords.' ..">'.$keywords.'</textarea>
                                            <div class="form-text text-muted font-size-sm font-italic">'.lang_home_posts_post_keywords_details.'</div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-xl-6">
                                                <label for="dm-post-add-image">'.lang_home_posts_post_photo.'</label>
												<div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="dm-post-add-image" name="file" data-toggle="custom-file-input"  accept="image/png, image/jpeg">
                                                    <label class="custom-file-label" for="dm-post-add-image">Choose an image</label>
                                                </div>
                                            </div>
                                        </div>';
										if(type=="editpost"){
										echo'
										<div class="form-group">
                                                    <img src="'.website_path.''.$up_folder.''.$urllink.'" width="400">
                                        </div>';
										}
										if(type=="wasgood"){
										echo'
										<div class="form-group row">
                                            <div class="col-xl-6">
                                                <label for="example-flatpickr-datetime-24">'.lang_home_posts_post_programmed.'</label>
                                                <div class="custom-file" dir="ltr">
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-datetime-24" name="timetopublish" data-enable-time="true" data-time_24hr="true" data-min-Date="today" data-max-Date="'.maxtime().'"  data-min-Time="'.mintime().'">
                                                </div>
                                            </div>
                                        </div>';
										}
										echo'
										<div class="form-group row">
                                            <div class="col-xl-6">
                                                <label for="example-select">'.lang_home_posts_type_cat.'</label>
                                                <div class="custom-file" >
														  <select class="form-control" id="example-select" name="cat_website">';
													$sql=$db->select("cat where status='1' order by id asc","*");
													$count=0;
													$certif_count=1;
													while($rs=$db->fetchAssoc($sql)){
														$topic_id=$rs["id"];
														$title=$rs["title"];
														$website=$rs["website"];
														if($website==2){ $add_dir='dir="ltr"';}
														echo'
														<option value="'.$topic_id.'" '.$tmp->choose($topic_id,$global_type,'s').' '.$add_dir.'>'.$title.'</option>';
													$count++;
														$certif_count++;
													}
      		  
														  
														  echo'
                                            </select>

                                                </div>
                                            </div>
                                        </div>';
										
										echo'
					 
					
							<label for="dm-post-status" >'.lang_home_posts_type_status.'</label>
                            <div class="row push">
                                <div class="col-lg-12">
                                    <div class="form-group row items-push mb-0" id="dm-post-status">
										<div class="col-2">
                                            <div class="custom-control custom-block custom-control-primary mb-1 ">
                                                <input type="radio" class="custom-control-input" id="example-rd-custom-block1" name="posttype" value="1" '.$tmp->choose($posttype,1,'c').'>
                                                <label class="custom-control-label " for="example-rd-custom-block1">
                                                    <span class="d-block font-w400 text-center my-1">
                                                        <span  type="button" class="btn btn-success mr-1 mb-1">
														<i class="fa fa-check mr-1"></i> '.lang_post_true.'
														</span>
                                                    </span>
                                                </label>
                                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            </div>
                                        </div>  
										<div class="col-2">
                                            <div class="custom-control custom-block custom-control-primary mb-1">
                                                <input type="radio" class="custom-control-input" id="example-rd-custom-block2" name="posttype" value="2" '.$tmp->choose($posttype,2,'c').'>
                                                <label class="custom-control-label" for="example-rd-custom-block2">
                                                     <span class="d-block font-w400 text-center my-1">
                                                        <span type="button" class="btn btn-danger mr-1 mb-1">
														<i class="fa fa-fw fa-times mr-1"></i> '.lang_post_false.'
														</span>
                                                    </span>
                                                </label>
                                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            </div>
                                        </div>
										<div class="col-3">
                                            <div class="custom-control custom-block custom-control-primary mb-1">
                                                <input type="radio" class="custom-control-input" id="example-rd-custom-block3" name="posttype" value="3" '.$tmp->choose($posttype,3,'c').'>
                                                <label class="custom-control-label" for="example-rd-custom-block3">
                                                    <span class="d-block font-w400 text-center my-1">
                                                        <span  type="button" class="btn btn-warning mr-1 mb-1">
                                            <i class="fa  fa-exclamation-triangle mr-1"></i> '.lang_post_confused.'
                                                    </span>
                                                </label>
                                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            </div>
                                        </div>
										<div class="col-3">
                                            <div class="custom-control custom-block custom-control-primary mb-1">
                                                <input type="radio" class="custom-control-input" id="example-rd-custom-block4" name="posttype" value="4" '.$tmp->choose($posttype,4,'c').'>
                                                <label class="custom-control-label" for="example-rd-custom-block4">
                                                     <span class="d-block font-w400 text-center my-1">
                                                        <span type="button" class="btn btn-secondary mr-1 mb-1">
                                            <i class="fa fa-question-circle mr-1"></i> '.lang_post_not_exact.'
														</span>
                                                    </span>
                                                </label>
                                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            </div>
                                        </div>
										<div class="col-2">
                                            <div class="custom-control custom-block custom-control-primary mb-1">
                                                <input type="radio" class="custom-control-input" id="example-rd-custom-block5" name="posttype" value="5" '.$tmp->choose($posttype,5,'c').'>
                                                <label class="custom-control-label" for="example-rd-custom-block5">
                                                   <span class="d-block font-w400 text-center my-1">
                                                        <span type="button" class="btn btn-light mr-1 mb-1">
														 '.lang_post_explicatif.'
														</span>
                                                    </span>
                                                </label>
                                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Blocks -->
										
										
										
                                        <div class="form-group">
                                            <label for="dm-post-text">'.lang_home_posts_post_body.'</label>
                            <textarea class="js-summernote" name="body_text" id="dm-post-text">'.$message.'</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content bg-body-light">
                                <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-alt-primary" onclick="submitForm()"  >
                                            <i class="fa fa-fw fa-check mr-1"></i> '.$post_submit.'
											</button>
										                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END New Post -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

';
}

if(type=="fav_set"){
	echo'     
	  <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_menu_fav_seetings.'</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Layouts -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                        </div>
						<form class="form-inline mb-4" action="?type=upfav" method="POST">

                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_01.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_01" placeholder="ID" value="'.fav_01.'">
                                </div>
                            </div>
                            <!-- END Inline Layout -->
						</div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_02.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_02" placeholder="ID"  value="'.fav_02.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->  
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_03.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_03" placeholder="ID"  value="'.fav_03.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_04.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_04" placeholder="ID"  value="'.fav_04.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_05.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav05" name="fav_05" placeholder="ID"  value="'.fav_05.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->	
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_06.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav05" name="fav_06" placeholder="ID"  value="'.fav_06.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->
					   <div class="block-content bg-body-light">
                                <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-fw fa-check mr-1"></i> '.lang_fav_topic_up.'
											</button>
										                                    </div>
                                </div>
                            </div>
							
					</form>
                    </div>
                    <!-- END Layouts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

	';
}

if(type=="favfr_set"){
	echo'     
	  <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_menu_fav_seetings.' (FR)</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Layouts -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                        </div>
						<form class="form-inline mb-4" action="?type=upfavfr" method="POST">

                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_01.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_01" placeholder="ID" value="'.fr_fav_01.'">
                                </div>
                            </div>
                            <!-- END Inline Layout -->
						</div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_02.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_02" placeholder="ID"  value="'.fr_fav_02.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->  
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_03.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_03" placeholder="ID"  value="'.fr_fav_03.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_04.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="fav_04" placeholder="ID"  value="'.fr_fav_04.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_05.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav05" name="fav_05" placeholder="ID"  value="'.fr_fav_05.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->	
					<div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_fav_topic_06.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav05" name="fav_06" placeholder="ID"  value="'.fr_fav_06.'">
                                </div>
                            </div>
						</div>
					<!-- END Inline Layout -->
					   <div class="block-content bg-body-light">
                                <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-fw fa-check mr-1"></i> '.lang_fav_topic_up.'
											</button>
										                                    </div>
                                </div>
                            </div>
							
					</form>
                    </div>
                    <!-- END Layouts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

	';
}

if(type=="cats" and ulv==5){
	echo'     
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_menu_website_categories.'</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">


                    <!-- Striped Table -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                            <div class="block-options">
                                <div class="block-options-item">
                                 <button type="button" class="btn btn-alt-primary">
                                            <a class="fa fa-fw fa-plus mr-1" href="?type=add_new_cat"></a><a  href="?type=add_new_cat"> '.lang_cat_add.'</a>
											</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">'.lang_cat_name.'</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>';
										$sql=$db->select("cat where status=1 order by id desc ","*");
		$count=0;
		$certif_count=1;
		while($rs=$db->fetchAssoc($sql)){
			$topic_id=$rs["id"];
			$website=$rs["website"];
			$title=$rs["title"];
			echo'                   <tr>
                                        <th class="text-center" scope="row">'.$topic_id.'</th>
                                        <td class="font-w600">
                                            <a href="#">'.$title.'</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">';
										if($website==1){
										echo'  <span class="badge badge-success">'.lang_cat_ar.'</span>';
										}
										else if($website==2){
										echo'  <span class="badge badge-success">'.lang_cat_fr.'</span>';
												}
										echo'
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a type="button" class="btn btn-sm " data-toggle="tooltip" title="Edit" href="?type=edit_cat&id='.$topic_id.'">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <a type="button" class="btn btn-sm " data-toggle="tooltip" title="Delete" href="?type=send_cat&method=del&id='.$topic_id.'"  onClick="return confirm(\''.lang_cat_confirm_del.'\')">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>';
		$count++;
			$certif_count++;
			
		}
      
								echo'
                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Striped Table -->


                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
	';
}

if(type=="users_set" and ulv==5){
	echo'     
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_menu_website_users.'</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">


                    <!-- Striped Table -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                            <div class="block-options">
                                <div class="block-options-item">
                                 <button type="button" class="btn btn-alt-primary">
                                            <a class="fa fa-fw fa-plus mr-1" href="?type=add_new_cat"></a><a  href="?type=add_new_cat"> '.lang_cat_add.'</a>
											</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;"> </th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>';
								
								
								
								// INSERT INTO `db_users` (`status`, `name`, `showname`, `pass`, `level`, `date`, `photo`, `urluser`, `description_ar`, `description_fr`, `fb_link`, `twitter_link`, `instagram_link`) VALUES
// (1, 'daklilog', 'Yasmine  Dakli', 'da971607701490d2352708ed9acc372a', 3, 0, 'assets/imgs/boutheina.png', 'Yasminedakli', 'صحفية', 'Diplômée d\'un Master de recherche en médias et communication de l\'Institut de presse  et des sciences de l\'information.', '', '', '');

      
								echo'
                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Striped Table -->


                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
	';
}



if (type == "editpg" and ulv > 1){

$message = page_education;

    $submit_form_url = "?type=uppg&method=ins_top";

    echo '        <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
<script type="text/javascript">

var formSubmitting = false;
var setFormSubmitting = function() { formSubmitting = true; };

window.onload = function() {
    window.addEventListener("beforeunload", function (e) {
        if (formSubmitting) {
            return undefined;
        }

        var confirmationMessage = \'' . lang_post_alert_one . ' \'
                                + \'' . lang_post_alert_two . '\';

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    });
};
</script>';

    echo '
<script type="text/javascript">
function submitForm()
{
	
	if(!confirm("' . lang_confirm_your_post . '")) {
    return false;
	}
	topicform.submit();
	setFormSubmitting();
}
</script>';
echo '
<!-- END Hero -->
<!-- Page Content -->
<div class="content content-full content-boxed">
   <!-- New Post -->
   <form action="' . $submit_form_url . '" method="post"   class="js-validation" name="topicform">
      <div class="block">
         <div class="block-content">
            <div class="row justify-content-center push">
               <div class="col-md-10">
                  ';
                  echo '
                  <label for="dm-post-status" >' . lang_home_posts_type_status . '</label>
                  <!-- END Blocks -->
                  <div class="form-group">
                     <label for="dm-post-text">' . lang_home_posts_post_body . '</label>
                     <textarea class="js-summernote" name="body_text" id="dm-post-text">' . $message . '</textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="block-content bg-body-light">
            <div class="row justify-content-center push">
               <div class="col-md-10">
                  <button type="button" class="btn btn-alt-primary" onclick="submitForm()"  >
                  <i class="fa fa-fw fa-check mr-1"></i> ' . $post_submit . '
                  </button>
               </div>
            </div>
         </div>
      </div>
   </form>
   <!-- END New Post -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->

';
}


	
	
if(type=="up_gallery" and ulv>0){
echo'     
	  <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_menu_website_uploads.'</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Layouts -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                        </div>
						<form class="form-inline mb-4" action="?type=upgal" method="post"  enctype="multipart/form-data">
					<input type="hidden" value="'.get_sec.'" name="security">
					<input type="hidden" value="'.id.'" name="cat_id">
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                   
                                </div>
                                <div class="col-lg-8">
                                    <input type="file" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="file" placeholder="عنوان الفئة" value="'.$cat_name.'" required>
                                 <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-fw fa-check mr-1"></i> '.lang_cat_send.'
											</button>
								</div>
                            </div>
                            <!-- END Inline Layout -->
						</div>
                        <div class="block-content">
                             <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>URL</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>';
										$sql=$db->select("pics order by id desc limit 30 ","*");
		$count=0;
		$certif_count=1;
		while($rs=$db->fetchAssoc($sql)){
			$topic_id=$rs["id"];
						$up_folder=	str_replace('../','',$rs["urlphoto"]);

			$urltolink=website_path.$up_folder.$rs["filename"];
			$urltolinkpic=website_path.$up_folder."c_".$rs["filename"];
			// $title=$rs["title"];
			echo'                   <tr>
                                        <th class="text-center" scope="row">'.$topic_id.'</th>
                                        <td class="font-w600">
												<img src="'.$urltolinkpic.'">
                                        </td>
                                       
                                        <td class="text-center">
                                            <input size="60px;" dir="ltr" onClick="this.setSelectionRange(0, this.value.length)" value="'.$urltolink.'" readonly />

                                        </td>
                                    </tr>';
		$count++;
			$certif_count++;
			
		}
      
								echo'
                 
                                </tbody>
                            </table>
						</div>
			
					   <div class="block-content bg-body-light">
                                <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                       
										                                    </div>
                                </div>
                            </div>
							
					</form>
                    </div>
                    <!-- END Layouts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

	';

}

if((type=="add_new_cat" and ulv==5) or (type=="edit_cat" and ulv==5)){
	
 if(type=="add_new_cat"){
$submit_form_url  = "?type=send_cat&method=ins";
}

else if(type=="edit_cat"){
$submit_form_url  = "?type=send_cat&method=up";
$cat_name  = $db->get("cat","title",id);
$cat_website  = $db->get("cat","website",id);

}
	echo'     
	  <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">'.lang_menu_website_categories.'</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Layouts -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                        </div>
						<form class="form-inline mb-4" action="'.$submit_form_url.'" method="POST">
					<input type="hidden" value="'.get_sec.'" name="security">
					<input type="hidden" value="'.id.'" name="cat_id">
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_cat_name.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input  class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-fav01" name="cat_name" placeholder="عنوان الفئة" value="'.$cat_name.'" required>
                                </div>
                            </div>
                            <!-- END Inline Layout -->
						</div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        '.lang_cat_website.'
                                    </p>
                                </div>
                                <div class="col-lg-8">
										<div class="form-group">
                                            <select class="form-control" id="example-select" name="cat_website">
                                                <option value="1" '.$tmp->choose($cat_website,1,'s').'>'.lang_cat_ar.'</option>
                                                <option value="2" '.$tmp->choose($cat_website,2,'s').'>'.lang_cat_fr.'</option>
                                            </select>
                                        </div>                                
								</div>
                            </div>
						</div>
			
					   <div class="block-content bg-body-light">
                                <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-fw fa-check mr-1"></i> '.lang_cat_send.'
											</button>
										                                    </div>
                                </div>
                            </div>
							
					</form>
                    </div>
                    <!-- END Layouts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

	';
}


########################################################################################################################
# MYSQL PART START
# ONLY LEVEL > 3
#
#
#
########################################################################################################################

	
	
if(type=="upgal" and ulv > 1){
	/******* image *********/
if($_FILES["file"]["name"] !=""){
$available_types=array('image/png','image/jpeg','image/gif','image/pjpeg','image/x-png');  
$name= $_FILES["file"]["name"];
$name=str_replace(" ","_",$name);
$path = $_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$name=rand(0,999)."_".rand(1000,9999)."_".rand(10000,99999).".".$ext;
if(in_array($_FILES["file"]["type"],$available_types)){
 if ($_FILES["file"]["error"] > 0){
    $text="Return Code: " . $_FILES["file"]["error"] . "<br />";
		}else{
	 can_upload();
 if (file_exists("".file_to_upload."$name")){
      $text=" already exists. ";
      }else {
      move_uploaded_file($_FILES["file"]["tmp_name"],"".file_to_upload."$name");
	  
	  
	  // copy ("".file_to_upload."$name" , "".file_to_upload."m_$name");
	  // copy ("".file_to_upload."$name" , "".file_to_upload."s_$name");
	  // copy ("".file_to_upload."$name" , "".file_to_upload."r_$name");
	  copy ("".file_to_upload."$name" , "".file_to_upload."c_$name");
	  
	  
	// Resize_File("".file_to_upload."m_$name", "".file_to_upload."", 900, 630);
	// Resize_File("".file_to_upload."s_$name", "".file_to_upload."", 500, 500);
	// Resize_File("".file_to_upload."r_$name", "".file_to_upload."", 330, 220);
	Resize_File("".file_to_upload."c_$name", "".file_to_upload."", 55, 55);

	
	
	  
	  // $db->insert("photos (title,url) VALUES ('$name','$name')"); 
      $text="donepic";
      }
    }
  } else {
  $text="Invalid file";
  }

	$security=$_POST['security'];
// $security_check = $db->get_sql("pics","security","security",$security,__line__);
$filename = $name;
if($text=="donepic" ){
		  // $db->insert("pics (title,url) VALUES ('ss','$name')"); 

	$db->insert("pics (urlphoto,user_id,security,filename,extention) VALUES ('".file_to_upload."','".uid."','$security','$name','$ext')");

$tmp->infomsg(3,"Done");
$tmp->gourlwithsec("2","?type=up_gallery");
}
	
}else {
	$tmp->infomsg(3,"Something wrong");

}  
} // type up
	
if(type=="send_cat" and ulv == 5){
	$cat_id=(isset($_POST['cat_id'])?trim((int)$_POST['cat_id']):0);

	$security=$_POST['security'];
	$cat_website=$_POST['cat_website'];
	$cat_name=$_POST['cat_name'];
$security_check = $db->get_sql("cat","security","security",$security,__line__);


if(method=="ins"){
if($cat_name!=""  and $security_check =="none"){
$db->insert("cat (title,website,security,status) VALUES ('$cat_name','$cat_website','$security','1')");
$tmp->infomsg(3,lang_cat_operation_ins_ar);
$tmp->gourlwithsec("2",referer);
	
}else{
	$tmp->infomsg(2,"Something is wrong, please check again later");	
}


} // end ins


if(method=="up"){
if($cat_id!="" and $cat_id > 0){


$db->update("cat SET title = '$cat_name' , website = '$cat_website' WHERE id = '".$cat_id."' ");


$tmp->infomsg(3,lang_cat_operation_up_ar);
$tmp->gourlwithsec("2",referer);
	
}else{
	$tmp->infomsg(1, lang_you_are_not_allowed);
}

}


if(method=="del"){
	$db->update("cat SET status = '2' WHERE id = '".id."' ");
	$tmp->infomsg(3,lang_cat_operation_del);
$tmp->gourlwithsec("2",referer);
}	



}	
	
	if(type=="uppg"){
	$body_text=mysql_real_escape_string($_POST['body_text']);

$db->update("config SET value = '$body_text' WHERE variable = 'page_education' ");
$tmp->infomsg(3,"Page Was Updated");
$tmp->gourlwithsec("2",referer);
	}	
	
	
if(type=="upfav"){
$fav_01=(isset($_POST['fav_01'])?trim((int)$_POST['fav_01']):0);
$fav_02=(isset($_POST['fav_02'])?trim((int)$_POST['fav_02']):0);
$fav_03=(isset($_POST['fav_03'])?trim((int)$_POST['fav_03']):0);
$fav_04=(isset($_POST['fav_04'])?trim((int)$_POST['fav_04']):0);
$fav_05=(isset($_POST['fav_05'])?trim((int)$_POST['fav_05']):0);
$fav_06=(isset($_POST['fav_06'])?trim((int)$_POST['fav_06']):0);
$db->update("config SET value = '$fav_01' WHERE variable = 'fav_01' ");
$db->update("config SET value = '$fav_02' WHERE variable = 'fav_02' ");
$db->update("config SET value = '$fav_03' WHERE variable = 'fav_03' ");
$db->update("config SET value = '$fav_04' WHERE variable = 'fav_04' ");
$db->update("config SET value = '$fav_05' WHERE variable = 'fav_05' ");
$db->update("config SET value = '$fav_06' WHERE variable = 'fav_06' ");


$tmp->infomsg(3,lang_fav_topic_updated);
$tmp->gourlwithsec("2",referer);
}	
	
	if(type=="upfavfr"){
$fav_01=(isset($_POST['fav_01'])?trim((int)$_POST['fav_01']):0);
$fav_02=(isset($_POST['fav_02'])?trim((int)$_POST['fav_02']):0);
$fav_03=(isset($_POST['fav_03'])?trim((int)$_POST['fav_03']):0);
$fav_04=(isset($_POST['fav_04'])?trim((int)$_POST['fav_04']):0);
$fav_05=(isset($_POST['fav_05'])?trim((int)$_POST['fav_05']):0);
$fav_06=(isset($_POST['fav_06'])?trim((int)$_POST['fav_06']):0);
$db->update("config SET value = '$fav_01' WHERE variable = 'fr_fav_01' ");
$db->update("config SET value = '$fav_02' WHERE variable = 'fr_fav_02' ");
$db->update("config SET value = '$fav_03' WHERE variable = 'fr_fav_03' ");
$db->update("config SET value = '$fav_04' WHERE variable = 'fr_fav_04' ");
$db->update("config SET value = '$fav_05' WHERE variable = 'fr_fav_05' ");
$db->update("config SET value = '$fav_06' WHERE variable = 'fr_fav_06' ");


$tmp->infomsg(3,lang_fav_topic_updated);
$tmp->gourlwithsec("2",referer);
}	
	
	
if(type=="topic_tools"){
$check_id = $db->get("articles","user_id",id);
								// status 0 = draft
								// status 1 =  published
								// status 2 =  disabled
								// status 3 =  programmed
								// status 4 =  deleted

if(method=="hide"){
if(uid==$check_id or ulv > 3){
$db->update("articles SET status = '2' WHERE id = '".id."' ");
$tmp->infomsg(3,lang_success_operation_hide);
$tmp->gourlwithsec("2",referer);
}else{
	$tmp->infomsg(1, lang_you_are_not_allowed);
	$tmp->gourlwithsec("2",referer);
}
}

if(method=="publish"){
if(uid==$check_id or ulv > 3){
$db->update("articles SET status = '1' WHERE id = '".id."' ");
$tmp->infomsg(3,lang_success_operation_publish);
$tmp->gourlwithsec("2",referer);
}else{
	$tmp->infomsg(1, lang_you_are_not_allowed);
	$tmp->gourlwithsec("2",referer);

}
}


if(method=="del"){
if(uid==$check_id or ulv > 3){
$db->update("articles SET status = '4' WHERE id = '".id."' ");
$tmp->infomsg(3,lang_success_operation_delete);
$tmp->gourlwithsec("2",referer);
}else{
	$tmp->infomsg(1, lang_you_are_not_allowed);
	$tmp->gourlwithsec("2",referer);
}
}


} // type topic toolds 


if(type=="send_topic"){
	
$ar_id=(isset($_POST['post_id'])?trim((int)$_POST['post_id']):0);
$post_situation=(isset($_POST['post_situation'])?trim((int)$_POST['post_situation']):0);
$security=$_POST['security'];
$posttitle=mysql_real_escape_string($_POST['posttitle']);
$description=mysql_real_escape_string($_POST['description']);
$keywords=mysql_real_escape_string($_POST['keywords']);
$posttype=$_POST['posttype'];
$timetowatch=$_POST['timetowatch'];
$body_text=mysql_real_escape_string($_POST['body_text']);
$cat_website=$_POST['cat_website'];
$cat_id=0;

if($_POST['timetopublish']!=""){
$timetopublish= strtotime($_POST['timetopublish']);
}else{
$timetopublish = time();
}

$titre_check = $db->get_sql("articles","security","security",$security,__line__);

// $tmp->infomsg(3, "a : $ar_id");



/******* image *********/
if($_FILES["file"]["name"] !=""){
$available_types=array('image/png','image/jpeg','image/gif','image/pjpeg','image/x-png');  
$name= $_FILES["file"]["name"];
$name=str_replace(" ","_",$name);
$path = $_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$name=rand(0,999)."_".rand(1000,9999)."_".rand(10000,99999).".".$ext;
if(in_array($_FILES["file"]["type"],$available_types)){
 if ($_FILES["file"]["error"] > 0){
    $text="Return Code: " . $_FILES["file"]["error"] . "<br />";
		}else{
	 can_upload();
 if (file_exists("".file_to_upload."$name")){
      $text=" already exists. ";
      }else {
      move_uploaded_file($_FILES["file"]["tmp_name"],"".file_to_upload."$name");
	  
	  
	  copy ("".file_to_upload."$name" , "".file_to_upload."m_$name");
	  copy ("".file_to_upload."$name" , "".file_to_upload."s_$name");
	  copy ("".file_to_upload."$name" , "".file_to_upload."r_$name");
	  copy ("".file_to_upload."$name" , "".file_to_upload."c_$name");
	  
	  
	Resize_File("".file_to_upload."m_$name", "".file_to_upload."", 900, 630);
	Resize_File("".file_to_upload."s_$name", "".file_to_upload."", 500, 500);
	Resize_File("".file_to_upload."r_$name", "".file_to_upload."", 330, 220);
	Resize_File("".file_to_upload."c_$name", "".file_to_upload."", 55, 55);

	
	
	  
	  // $db->insert("photos (title,url) VALUES ('$name','$name')"); 
      $text="La photo a été ajouteé avec succès";
      }
    }
  } else {
  $text="Invalid file";
  }
  
  $sql_update = " , urllink ='$name' ,up_folder ='".file_to_upload."' ";
  
} // end if pic empty

  // echo $text;

/******* image *********/
if(method=="ins_top"){
if($posttitle!=""  and $titre_check =="none"){
$db->insert("articles (title,status,security,urllink,up_folder,type,introduction,user_id,publishdate,hits,message,cat_id,keywords,date,global_type) VALUES ('$posttitle','$post_situation','$security','$name','".file_to_upload."','$posttype','$description','".uid."','$timetopublish','1','$body_text','27','$keywords','".time()."','$cat_website')");
$tmp->infomsg(3,lang_success_operation_ins_ar);
$tmp->gourlwithsec("2","?type=home");
	
}else{
	$tmp->infomsg(2,"Something is wrong, please check again later");	
}

}


if(method=="up_top"){
if($ar_id!="" and $ar_id > 0){


$db->update("articles SET title = '$posttitle' ,
status = '$post_situation' ,
type = '$posttype' ,
introduction = '$description' ,
publishdate = '$timetopublish' ,
message = '$body_text' ,
cat_id = '$cat_id' ,
global_type = '$cat_website' ,
keywords = '$keywords' 

$sql_update

WHERE id = '".$ar_id."' ");


$tmp->infomsg(3,lang_success_operation_edit_ar);
// $tmp->infomsg(3,$post_situation);
$tmp->gourlwithsec("2","?type=home");
	
}else{
	$tmp->infomsg(1, lang_you_are_not_allowed);
}

}


}


// Level End ;) 
$tmp->footer_admin_dash();

}else{
require("log.php");
}
?>

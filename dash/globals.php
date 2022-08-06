<?php
session_start();
define('#Th!s@S3cui*ty|Log','allow');
/**********************************************************
EduCM V 1.0
Powred By Hidoussi Med Ayoub 
Copyright © 2017 Hidoussi. All Rights Reserved
----------------------------------------------------------------------------------
File Name : globals.php
Description : Global Functions File
----------------------------------------------------------------------------------
If you want any support
E-mail : hmatest@gmail.com/
***********************************************************/

/* Security Part */
define('folder_includes','_webek_inc_/');
define('folder_lang','_lang_inc_/');
define('folder_assets','assets/');

define('get_sec',md5(rand().time()),6);
define('host',$_SERVER['HTTP_HOST']);
define('referer',$_SERVER['HTTP_REFERER']);

define('SystemName','Picca');
define('SystemVersion','1.0 - Beta ');


/* include files */
require_once(folder_includes.'config.php');
require_once(folder_includes.'class_templates.php');
require_once(folder_includes.'class_database.php');
require_once(folder_includes.'function.php');
require_once(folder_lang.'lang_inc_ar.php');
define('x_c','?w=14012011'.time());


if(host=="localhost"){
define('img_path','http://localhost/tunifactfinal/dash/assets/images/');
define('website_path','http://localhost/tunifactfinal/');
define('path_assets_files','http://localhost/tunifactfinal/dash/assets');  // General
define('path_img_admin_files','http://localhost/tunifactfinal/dash/assets/media/');  // General
}else{
define('img_path','https://tunifact.org/dash/assets/images/');
define('website_path','https://tunifact.org/');
define('path_assets_files','https://tunifact.org/dash/assets');  // General
define('path_img_admin_files','https://tunifact.org/dash/assets/media/');  // General
}

/* classes */

$db=new db($config);
$tmp=new tmp();
// $as->tmp=$tmp;
$db->connect_db();

define('upload_g_moyen','uploads/M/');  // 630, 430
define('upload_g_small','uploads/S/');  // 80, 64
define('upload_g_article','uploads/R/');  // 200, 120
define('upload_g_carre','uploads/C/');  // 55, 55

define('upload_g_album','uploads/albums/');  // 160, 115
define('upload_g_photos_m','uploads/photos_moyen/');  // 630, 430
define('upload_g_photos_thumb','uploads/photos_thumb/');  // 630, 430


define('url_albums','uploads/albums/');  // 160, 115
define('photos_thumb','uploads/photos_thumb/');  // 160, 115
define('photos_moyen','uploads/photos_moyen/');  // 630, 430


define('url_l','uploads/L/');  // General
define('url_moyen','uploads/M/');  // 630, 430
define('url_small','uploads/S/');  // 80, 64
define('url_article','uploads/R/');  // 200, 120
define('url_carre','uploads/C/');  // 55, 55


// define('upload_g_l','uploads/L/');  // General




// define('admin_file','cpadminpanel.php');

define('admin_file','cpadmin.php');


/* define */
define('time',time());
define('method',$tmp->cleanQuery($_GET['method']));
define('type',$tmp->cleanQuery($_GET['type']));
define('step',$tmp->cleanQuery($_GET['step']));
define('id',isset($_GET['id'])?trim((int)$_GET['id']):0);
define('cat',isset($_GET['cat'])?trim((int)$_GET['cat']):0);
define('lesson',isset($_GET['lesson'])?trim((int)$_GET['lesson']):0);
define('mid',isset($_GET['mid'])?trim((int)$_GET['mid']):0);
define('pg',isset($_GET['pg'])?trim((int)$_GET['pg']):1);
define('page',isset($_GET['page'])?trim((int)$_GET['page']):1);
define('video',isset($_GET['video'])?trim((int)$_GET['video']):0);
define('ip',ip());
define('get_sec',md5(rand().time()),6);
define('x_x_x','?x='.rand(0,999999).'');

	if(type=="login"){
		 $loginUserName=trim($_POST['loginUserNames']);
		$loginUserPass=$_POST['loginUserPasss'];
		$tmp->setSession('username',$loginUserName);
		$tmp->setSession('userpass',md5($loginUserPass));
		}
		
	if(type=="logout"){
		$tmp->setSession('username','');
		$tmp->setSession('userpass','');
		}

		$userName=$tmp->getSession('username');
		$userPass=$tmp->getSession('userpass');
		$sql=$db->select("users where name= '$userName' and pass='$userPass' and status='1' ","*");
		while($rs=$db->fetchAssoc($sql)){
		define('ulv',$rs['level']);
		define('uid',$rs['id']);
		define('username',$rs['name']);
		define('user_year_id',$rs['year_id']);
		define('showname',$rs['showname']);
		define('userphoto',$rs['photo']);
		define('showtitle',$rs['showtitle']);
		define('current_certif',$rs['current_certif']);
		}
		if(uid=="uid"){
		define('ulv',0);
		define('uid',0);
		define('username',0);
		define('showname',0);
		define('user_year_id',0);
		define('current_certif',0);
		}
		

$sql=$db->select("config","variable,value");
while($rs=$db->fetchAssoc($sql)){
	define($rs['variable'].($rs['variable']=='forum_title' ? '1' : ''),$rs['value']);
}		

// error_reporting(E_ALL & ~E_NOTICE);


	$y_f =date('Y',time());
	$m_f =date('m',time());
	$d_f =date('d',time());
	
define("file_to_upload","../upload/$y_f/$m_f/$d_f/");

define("upload_g_l","../upload/$y_f/$m_f/$d_f/L/");  // General

?>
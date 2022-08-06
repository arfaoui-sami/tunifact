<?php
/**********************************************************
SoumaCar V 1.0
Powred By Hidoussi Med Ayoub 
Copyright � 2017 Hidoussi. All Rights Reserved
----------------------------------------------------------------------------------
File Date : 28-03-2017 - 21:45
File Name : function.php
Description : Functions File
----------------------------------------------------------------------------------
If you want any support
E-mail : hmatest@gmail.com/
***********************************************************/
date_default_timezone_set("Africa/Lagos");

function config_get($var,$val="value"){
	global $db;
	$db->line(__line__);
	$db->select("config WHERE variable = '$var' ",$val);
	if($db->num_rows()>0){
		$rs=$db->fetch_array();
		$value=$rs[$val];
	}else{
	$value = 'null';
	}
	return $value;
}


function class_get($val,$class){
	if($val == $class){
	$value="StyleGet1";
	}else{
	$value = "StyleGet2";
	}
	return $value;
}





function Resize_File($file, $directory, $max_width = 0, $max_height = 0 , $extention = "jpg") { 
global $config; 
$full_file = $file; 

if (eregi("\.png$", $full_file)) { 
$img = imagecreatefrompng($full_file); 
} 
if (eregi("\.(jpg|jpeg)$", $full_file)) { 
$img = imagecreatefromjpeg($full_file); 
} 
if (eregi("\.gif$", $full_file)) { 
$img = imagecreatefromgif($full_file); 
} 

$FullImage_width = imagesx($img); 
$FullImage_height = imagesy($img); 

if (isset($max_width) && isset($max_height) && $max_width != 0 && $max_height != 0) { 
$new_width = $max_width; 
$new_height = $max_height; 
} 
elseif (isset($max_width) && $max_width != 0) { 
$new_width = $max_width; 
$new_height = ((int)($new_width * $FullImage_height) / $FullImage_width); 
} 
elseif (isset($max_height) && $max_height != 0) { 
$new_height = $max_height; 
$new_width = ((int)($new_height * $FullImage_width) / $FullImage_height); 
} 
else { 
$new_height = $FullImage_height; 
$new_width = $FullImage_width; 
} 

$full_id = imagecreatetruecolor($new_width, $new_height); 
imagecopyresampled($full_id, $img, 0, 0, 0, 0, $new_width, $new_height, $FullImage_width, $FullImage_height); 


if (eregi("\.(jpg|jpeg)$", $full_file)) 
{ 
$full = imagejpeg($full_id, $full_file, 100); 
} 

if (eregi("\.png$", $full_file)) 
{ 
$full = imagepng($full_id, $full_file); 
} 

if (eregi("\.gif$", $full_file)) 
{ 
$full = imagegif($full_id, $full_file); 
} 

imagedestroy($full_id); 
unset($max_width); 
unset($max_height); 
}	






function cleaninsert($message) {
$badKey =  Array('<?','?>','<?php','location','document','window','onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload','cookies','cookie','java','javascript', 'vbscript', 'expression', 'applet', 'xml', 'blink', 'link', 'script', 'sembed', 'objects', 'iframe','frame', 'frameset', 'ilayer', 'bgsound','base');
foreach($badKey AS $value){
$message = str_replace($value,"-*-",$message);
$message = str_replace(strtoupper($value),"-*-",$message);
}	
return($message);
}


function chek_our_site(){
// global $HTTP_SERVER_VARS;
// $host = $HTTP_SERVER_VARS[HTTP_HOST];
if (host == "localhost" or host == "www.alamsport.net" or host == "alamsport.net"){
$value = 1;
}else{
$value = 0;
}
return($value);
}


	function ip(){
		global $_SERVER;
		$adder='REMOTE_ADDR';
		$for='HTTP_X_FORWARDED_FOR';
		$client='HTTP_CLIENT_IP';
		if(isset($_SERVER)){
			if(isset($_SERVER["{$adder}"])){
				$ip=$_SERVER["{$adder}"];
			}
			elseif(isset($_SERVER["{$for}"])){
				$ip=$_SERVER["{$for}"];
			}
			elseif(isset($_SERVER["{$client}"])){
				$ip=$_SERVER["{$client}"];
			}
		}
		else{
			if(getenv($for)){
				$ip=getenv($for);
			}
			elseif(getenv($client)){
				$ip=getenv($client);
			}
			else{
				$ip=getenv($adder);
			}
		}
		return $ip;
	}
	
function title_url($title){
$title = str_replace("Troph%E9es","Trophees",$title);
$title = str_replace("%28","-",$title);
$title = str_replace("%E9","�",$title);
$title = str_replace(" ","-",$title);
$title = str_replace(":","-",$title);
return($title);
}
	
function title_url_none($title){
// $title = str_replace("Troph%E9es","Trophees",$title);
// $title = str_replace("%28","-",$title);
// $title = str_replace("%E9","�",$title);
// $title = str_replace(" ","-",$title);
// $title = str_replace(":","-",$title);
// return($title);
}


function history($date,$sec=""){
	$date = ($date+60*60*3);
	$time = (time()+60*60*3);
	
	$y = gmdate("Y", $date);
	$m = gmdate("m", $date);
	$d = gmdate("d", $date);
	$h = gmdate("H", $date);
	$i = gmdate("i", $date);
	$s = gmdate("s", $date);
	
	$ny = gmdate("Y", $time);
	$nm = gmdate("m", $time);
	$nd = gmdate("d", $time);
	$nh = gmdate("H", $time);
	$ni = gmdate("i", $time);
	$ns = gmdate("s", $time);
	
	// $year = ($y == $ny ? "" : $y.'/');
	$year = $y.'/';
	$month = $m.'/';
	$day = $d;
	$houre = $h.':';
	$minute = $i;
	$second = ($sec == "s" ? ':'.$s : "");
	
	if ($d == $nd && $m == $nm && $y == $ny){
		$the_date = $year.$month.$day." - �����";
	}
	else if ($d == ($nd-1) && $m == $nm && $y == $ny){
		$the_date = $year.$month.$day." - ���";
	}
	else{
		$the_date = $year.$month.$day;
	}
	
	$the_time = $houre.$minute.$second;
	$history = $the_time.' - '.$the_date;
	
	return $history;
}


function file_extension($filename){
 return substr(strrchr($filename, '.'), 1);
}
 
 function rand_characters(){
 $characters = array(
"a","b","c","d","e","f","g","h","j","k","l","m",
"n","p","q","r","s","t","u","v","w","x","y","z",
"1","2","3","4","5","6","7","8","9");

//make an "empty container" or array for our keys
$keys = array();

//first count of $keys is empty so "1", remaining count is 1-6 = total 7 times
while(count($keys) < 7) {
    //"0" because we use this to FIND ARRAY KEYS which has a 0 value
    //"-1" because were only concerned of number of keys which is 32 not 33
    //count($characters) = 33
    $x = mt_rand(0, count($characters)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}

foreach($keys as $key){
   $random_chars .= $characters[$key];
}

	return $random_chars;
}
	function send_mail($to,$from,$subject,$msg,$name){
    /*
    function name : send_mail
    author        : vbsq.net
    email         : youmail @ hotmail . com
    site          : www.vbsq.net
    date          : 29.01.2010 14:38:29
    */
    $headers ="MIME-Version: 1.0 \r\n";
    $headers.="from: $from  $subject  \r\n";
    $headers.="Content-type: text/html;charset=utf-8 \r\n";
    $headers.="X-Priority: 3\r\n";
    $headers.="X-Mailer: smail-PHP ".phpversion()."\r\n";
    $msg    ='
    <div style="text-align:left">
    <h2>'.$subject.'</h2>
    <font size="2">IP : '.IP.'</font><br>
    <h2>Un message de :'.$name.'</h2>
	<br>
    '.$msg.'
    </div>
    ';
 
    if( mail($to,$subject,$msg,$headers) ){
        return true;
    }else{
        return false;
    }
}

function ThiscurPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

 
 function can_upload(){
	$y =date('Y',time());
	$m =date('m',time());
	$d =date('d',time());
	
	$name_file ="index.html";	
	$somecontent ="Good";
	
	$mounth = "../upload/$y/$m/";
	$today = "../upload/$y/$m/$d/";
	$year = "../upload/$y/";

	If(!file_exists($year)){
	mkdir($year,0777); //part B
	copy("assets/index.html", $year."index.html");
	}

	If(!file_exists($mounth)){
	mkdir($mounth,0777); //part B
	copy("assets/index.html", $mounth."index.html");
	}

	If(!file_exists($today)){
	mkdir($today,0777); //part B
	copy("assets/index.html", $today."index.html");

	}
}



function showdate($date){
$thisdate= date("Y-m-d H:i", $date);
return $thisdate;
}

function mintime(){
$thisdate= date("H:i", (time()+(60*30)));
return $thisdate;
}

function maxtime(){
$thisdate= date("Y-m-d", (time()+(60*60*24*21)));
return $thisdate;
}


function date_show_fr(){
$jour = array("الأحد","الإثنان","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت"); 

$mois = array("","جانفي","فيفري","مارس","أفريل","ماي","جوان","جويلية","أوت","سبتمبر","أكتوبر","نوفمبر","ديمسبر"); 

$datefr = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".date("Y"); 

return $datefr;
}

function date_show_ar(){
$jour = array("الأحد","الإثنان","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت"); 

$mois = array("","جانفي","فيفري","مارس","أفريل","ماي","جوان","جويلية","أوت","سبتمبر","أكتوبر","نوفمبر","ديمسبر"); 

$datefr =  date("d")." ".$mois[date("n")]." ".date("Y"); 

return $datefr;
}





?>
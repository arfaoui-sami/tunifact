<?php
//The following code returns the Number of likes for any facebook page.

//Page Id of TechRecite.com. Replace it with your page.
$page_id = "138564926335348"; 
$likes = 0; //Initialize the count

//Construct a Facebook URL
$json_url ='https://graph.facebook.com/'.$page_id.'';
$json = file_get_contents($json_url);
$json_output = json_decode($json);

//Extract the likes count from the JSON object
if($json_output->likes){
    $likes = $json_output->likes;
}
//Printing the count
echo 'TechRecite.com has '.$likes.' Facebook Fans';
?>
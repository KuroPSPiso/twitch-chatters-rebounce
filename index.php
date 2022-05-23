<?php

$channel = $_GET["channel"];

if(!isset($channel)){ 

 echo "{}";

} else {

 $url = 'http://tmi.twitch.tv/group/user/'.$channel.'/chatters';

 $json = file_get_contents($url);

 echo $json;

}

?>


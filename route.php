<?php

$get_url = $_SERVER['QUERY_STRING'];


$url = explode("/", $get_url);

$url2 = explode("&", $get_url);


if(!empty($url2[1])){
    
    str_replace($url2[1], "", $get_url);
    
    require_once($url2[0].".php");
    
    }elseif(file_exists($url[0].".php")){

        require_once($url[0].".php");

    }elseif($url[0] == ""){

        require_once("home.php");

    }else{

        require_once("404.php");
}
	
?>

<?php
include_once "system/libs/Controller.php";
include_once "system/libs/View.php";


$url = isset($_GET['url']) ? $_GET['url'] : NULL;
$url = rtrim($url, '/');
$url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
// echo "<pre>";
// print_r($url);
// echo "</pre>";

if($url[0]) {
    include "app/controllers/".$url[0].".php";
    $controller = new $url[0]();
    if(isset($url[2])){
        $string = str_replace("", " ", $url[1]);
        $controller->$string($url[2]);
    } else {
        if(isset($url[1])){
            $string = str_replace("", " ", $url[1]);
            $controller->$string();
        }
    }
} else {
    include "app/controllers/IndexController.php";
    $index = new IndexController();
    $index->page();
}






?> 
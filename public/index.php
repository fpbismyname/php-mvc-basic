<?php
//Use App
include "../app/init.php";

//Get Controller
$controller = new User();

//Get Url
$url = isset($_GET["url"]) ? $_GET["url"] : "";

//Routing
switch ($url) {
    case "home":
        $controller->index();
        break;
    case "about":
        $controller->about();
        break;
    case "":
        $controller->index();   
}

//Routing to error
if ($url != ""){
    if ($url != "home" && $url != "about"){
        $controller->notFoundPage();
    }
}
<?php

include "config.php";

if(empty($_GET['manufacturer']) || empty($_GET['seria']) || empty($_GET['model'])){
    
    header("Location: /");
    
    exit;
    
}

if(!empty($_GET['manufacturer']) && !empty($_GET['seria']) && !empty($_GET['model'])){
    
    $result = mysqli_query($link, "select * from `model` where `id`='".trim($_GET['model'])."'");
    $itm = mysqli_fetch_array($result);
    
    header("Location: /eva-kovriki/models/".str_replace(' ', '_', $itm['title']));
    
    exit;
    
}
<?php
session_start();
include 'guards/session.php';
include 'model/productModel.php';
include_once "layouts/header.php";



check_login();
    if($_SESSION['type']=='client'){
            echo '<div class="alert alert-danger"> you are not authrized</div>';
            
    }

if($_SERVER['REQUEST_METHOD']=='POST'){
        delete($_GET['id']);
        $_SESSION['deleted']='product deleted successfully';
        header('location:product.php');
        
}

include_once "layouts/header.php";

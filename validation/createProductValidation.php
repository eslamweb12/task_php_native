<?php

$name='';
$description='';
$price='';
if(empty($_POST['name'])){
    $name='name should not be empty';

}
if($_POST['name']<=5){
    $name='name should be greater than 5';


}
if(empty($_POST['description'])){
    $name='description should not be empty';

}
if($_POST['description']<=10){
    $name='description should be greater than 10';


}
if(empty($_POST['price'])){
    $name='price should not be empty';

}
if($_POST['price']<=5){
    $name='price should be greater than 5';


}
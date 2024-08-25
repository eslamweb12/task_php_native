<?php

$email='';
$password='';

if(empty($_POST['email'])){
    $email='email should not be empty';
}
if(strlen($_POST['email'])<4){
    $email='email should be greater than 4';

}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email='this not avalid email';


}
if(empty($_POST['password'])){
    $password='password should not be empty';
}
if(strlen($_POST['password'])<4){
    $password='password should be greater than 4';

}


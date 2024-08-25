<?php
function connection(){
    $info="mysql:host=localhost;dbname=task_backend_depi";
  $username="root";
 $password="";
 $con=new PDO($info,$username,$password);
 $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 return $con;
}

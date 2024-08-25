





<?php  
session_start();
include_once 'model/userModel.php';
$title="login";



if($_SERVER['REQUEST_METHOD']=='POST'){



    include_once 'validation/validationLogin.php';



if(empty($email)&&empty($password)){
    $data=login($_POST['email'],$_POST['password']);
    if(is_array($data)){
        $_SESSION['id']=$data['id'];
        $_SESSION['email']=$data['email'];
        $_SESSION['password']=$data['password'];
        $_SESSION['type']=$data['type'];
        $_SESSION['welcom']='welcom to the site ';
 
       header('location: index.php');
      

        
    }

}

  
}



include_once "layouts/header.php";
?>




<div class="container">
    <style>
     
    </style>
<form action="" method="post" style="max-width:500px; margin:auto">
    <h1 class="text-center" >login</h1>
    <?php if(isset($data)){
        if($data==false){
        ?>
        <div class="alert alert-danger" > email or password is not correct</div>

        <?php } } ?>
   
    <div class="mb-2" >
       <label for="">email</label>
        <input type="text" class="form-control" name="email" id="">
        <?php if(!empty($email)){?>
            <div class="alert alert-danger" > <?php echo $email?></div>
            <?php }?>
    </div>
    <div class="mb-2" >
       <label for="">password</label>
        <input type="text" class="form-control" name="password" id="">
        <?php if(!empty($password)){?>
            <div class="alert alert-danger" > <?php echo $password?></div>
            <?php }?>
    </div>
    <input type="submit" value="login" class="btn btn-success">
    <a href="register.php" class="btn btn-primary"> register</a>

    
    
</form>

</div>





































<?php  
include_once "layouts/footer.php";?>
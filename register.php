<?php  
session_start();

include_once 'model/userModel.php';
include_once 'connection/connectTODB.php';

$title = "Register";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'validation/validationRegister.php';

    if (empty($usernameError) && empty($emailError) && empty($passwordError)) {
        $user_id = register($_POST['username'], $_POST['email'], $_POST['password']);
        
        if ($user_id) {
            $_SESSION['id'] = $user_id;
            $_SESSION['type'] = 'client'; // Set type for new users
            $_SESSION['welcom'] = 'Welcome';
        
            header('Location: index.php');
            exit();
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}

include_once "layouts/header.php";
?>





<div class="container">
    <style>
     
    </style>
<form  method="post" style="max-width:500px; margin:auto">
    <h1 class="text-center" >register</h1>
    <div class="mb-2" >
       <label for="">username</label>
        <input type="text" class="form-control" name="username" id="">
        <?php if(!empty($usernameError)){?>
        

            <div class="alert alert-danger" ><?php echo $usernameError?></div>


            <?php }?>
    </div> 
    <div class="mb-2" >
       <label for="">email</label>
        <input type="email" class="form-control" name="email" id="">
        <?php if(!empty($emailError)){?>
        

        <div class="alert alert-danger" ><?php echo $emailError?></div>


        <?php }?>
    </div>
    <div class="mb-2" >
       <label for="">password</label>
        <input type="password" class="form-control" name="password" id="">
        <?php if(!empty($passwordError)){?>
        

        <div class="alert alert-danger" ><?php echo $passwordError?></div>


        <?php }?>
    </div>
    <input type="submit" value="register" class="btn btn-success">
    
</form>

</div>
<?php  
include_once "layouts/footer.php";?>









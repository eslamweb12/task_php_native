



<?php
session_start();


include_once 'model/productModel.php';
include_once 'guards/session.php';


include_once "layouts/header.php";
check_login();
if($_SESSION['type']=='client'){
  echo '<div class="alert alert-danger"> you are not authrized</div>';
  exit();
}


if($_SERVER['REQUEST_METHOD']=='POST'){


    include_once 'validation/createProductValidation.php';
    if(empty($name)&&empty($description)&&empty($price)){
        creatNewProduct($_POST['name'],$_POST['description'],$_POST['price']);
        $_SESSION['create_product']='product created successfully';
        header('location:product.php');

    }
    else{
        echo 'you have aproblems in the validation';
    }


    
}



















?>

<form method="post" style="max-width:600px;margin:auto;">
    <h2 style="position:relative;left:100px">create new product</h2>

<div class="mb-2">
    <label for="">name</label>
    <input type="text" class="form-control" name="name">
    <?php if(isset($name)){?>
    <div class="alert alert-danger"><?php echo $name?></div>
   <?php } ?>
</div>
<div class="mb-2">
    <label for="">description</label>
   <textarea rows="4" name="description" id="" class="form-control" ></textarea>
   <?php if(isset($description)){?>
    <div class="alert alert-danger"><?php echo $description?></div>
   <?php } ?>
</div>
<div class="mb-2">
    <label for="">price</label>
    <input type="text" class="form-control" name="price">
    <?php if(isset($price)){?>
    <div class="alert alert-danger"><?php echo $price?></div>
   <?php } ?>
</div>

<input type="submit" class="btn btn-primary" value="create">



</form>




































<?php include_once "layouts/footer.php";?>?>
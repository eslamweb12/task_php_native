<?php
session_start();
include 'guards/session.php';

check_login(); 

$title = 'Index';
if (isset($_SESSION['welcom'])) {
    $wel = $_SESSION['welcom'];
    unset($_SESSION['welcom']);
}
?>

<?php include 'layouts/header.php'; ?>
<?php if (isset($wel)) { ?>
        <div class="alert alert-success"><?php echo $wel; ?></div>
    <?php } ?>

<?php if ($_SESSION['type'] == 'client'){?>
    <div class="text-center"> 
        <h4>Hello, you can buy any product. Add it to your cart!</h4>
        <i class="fas fa-shopping-cart" style="font-size:20px; color:blue;margin-right:20px"></i>
        <a href="logout.php" style="position:relative;left:600px;bottom:30px" class="btn btn-primary">Logout</a>
        <a href="product.php" class="btn btn-primary">Show All Products</a>
    </div>
<?php }elseif ($_SESSION['type'] == 'admin'){ ?>
    <a href="allorders.php" style="position:relative;left:250px;" class="btn btn-primary">Show All Orders</a>
    <a href="createProduct.php" class="btn btn-info" style="position:relative; left:400px;">Create New Product</a>
    <a href="product.php" class="btn btn-info" style="position:relative; left:700px;">edit on the products</a>
<?php }; ?>

<?php include 'layouts/footer.php'; ?>

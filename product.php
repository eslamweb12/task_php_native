<?php
session_start();
include 'guards/session.php';
include 'model/productModel.php';
include 'model/cartModel.php';

check_login();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
    delete($_GET['id']);
    $_SESSION['deleted'] = 'Product deleted successfully';
    header('location:product.php');
    exit();
}

$products = get_all_products();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    // Insert into cart using the current user's id and the product id from the form
    insert_into_cart($_SESSION['id'], $_POST['product_id']);
    $_SESSION['buying'] = 'This product has been added to your cart';
    header('location:mycart.php');
    exit();
}

if (isset($_SESSION['create_product'])) {
    $created = $_SESSION['create_product'];
    unset($_SESSION['create_product']);
}

if (isset($_SESSION['updated_product'])) {
    $updated = $_SESSION['updated_product'];
    unset($_SESSION['updated_product']);
}

if (isset($_SESSION['deleted'])) {
    $deleted = $_SESSION['deleted'];
    unset($_SESSION['deleted']);
}
?>

<?php include 'layouts/header.php'; ?>

<div class="container mt-5">
    <h1 class="mb-4">Products</h1>
    <a href="logout.php" style="position:relative;left:1000px;bottom:100px" class="btn btn-primary">Logout</a>
    <?php if($_SESSION['type']=='client'){?>
    <a href="mycart.php" style="position:relative;left:1000px;bottom:100px" class="btn btn-primary">show your cart</a>
<?php }?>
    <?php if (isset($created)) { ?>
        <div class="alert alert-success"><?php echo $created; ?></div>
    <?php } ?>
    <?php if (isset($updated)) { ?>
        <div class="alert alert-success"><?php echo $updated; ?></div>
    <?php } ?>
    <?php if (isset($deleted)) { ?>
        <div class="alert alert-success"><?php echo $deleted; ?></div>
    <?php } ?>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <?php if (is_array($product) && isset($product['name'], $product['description'], $product['price'])): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text">Description: <?php echo htmlspecialchars($product['description']); ?></p>
                            <p class="card-text">Price: $<?php echo htmlspecialchars($product['price']); ?></p>

                            
                            <form method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <?php if ($_SESSION['type'] == 'client') { ?>
                                    <button type="submit" class="btn btn-success">Buy</button>
                                <?php } else if ($_SESSION['type'] == 'admin') { ?>
                                    <button type="submit" class="btn btn-success">Buy</button>
                                    <a href="update.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Update</a>
                                <?php } ?>
                            </form>

                            <?php if ($_SESSION['type'] == 'admin'): ?>
                               
                                <form method="POST" action="delete.php?id=<?php echo $product['id']; ?>">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Invalid product data</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>

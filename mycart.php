<?php
session_start();
include_once 'model/cartModel.php';
include_once 'guards/session.php';

check_login();

$products = show_all_products_for_specific_user($_SESSION['id']);

if (isset($_SESSION['buying'])) {
    $buy = $_SESSION['buying'];
    unset($_SESSION['buying']);
}

include 'layouts/header.php';
?>

<div class="container">
<a href="logout.php" style="position:relative;left:1000px;bottom:0px;margin-bottom:20px;margin-top:10px" class="btn btn-primary">logout</a>
<a href="product.php" style="position:relative;left:1000px;bottom:0px;margin-bottom:20px;margin-top:10px" class="btn btn-primary">show products</a>

    <?php if (isset($buy)) { ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($buy); ?></div>
    <?php } ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Username</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as  $product) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['id']); ?></td>
                    <td><?php echo htmlspecialchars($product['user_id']); ?></td>
                    <td><?php echo htmlspecialchars($product['product_id']); ?></td>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo htmlspecialchars($product['username']); ?></td>
                    <td><?php echo htmlspecialchars($product['description']); ?></td>
                    <td>$<?php echo htmlspecialchars($product['price']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'layouts/footer.php'; ?>

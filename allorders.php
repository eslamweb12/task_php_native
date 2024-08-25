<?php
session_start();
include 'connection/connectTODB.php';
include 'model/cartModel.php';



$orders=show_all_orders();


include 'layouts/header.php';?>


<table class="table table-striped " >
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
  
   <?php foreach ($orders as  $order) { ?>
    <tr>
        <td><?php echo htmlspecialchars($order['id']); ?></td>
        <td><?php echo htmlspecialchars($order['user_id']); ?></td>
        <td><?php echo htmlspecialchars($order['product_id']); ?></td>
        <td><?php echo htmlspecialchars($order['name']); ?></td>
        <td><?php echo htmlspecialchars($order['username']); ?></td>
        <td><?php echo htmlspecialchars($order['description']); ?></td>
        <td>$<?php echo htmlspecialchars($order['price']); ?></td>
    </tr>
<?php } ?>

    </tbody>


</table>


<?php include 'layouts/footer.php';?>































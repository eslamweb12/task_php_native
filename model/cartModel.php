<?php

include_once 'connection/connectTODB.php';
    function insert_into_cart($user_id, $product_id) {
        $con = connection();
        $stmt = $con->prepare('INSERT INTO cart (user_id, product_id) VALUES (:user_id, :product_id)');
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
    }


function show_all_products_for_specific_user($user_id) {
    $con = connection();
    $stmt = $con->prepare('
        SELECT cart.id, cart.user_id, cart.product_id, products.name, products.description, products.price, users.username
        FROM cart
        INNER JOIN products ON cart.product_id = products.id
        INNER JOIN users ON cart.user_id = users.id
        WHERE cart.user_id = :user_id
    ');
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array
}


function show_all_orders() {
    $con = connection();
    $stmt = $con->prepare('
        SELECT cart.id, cart.user_id, cart.product_id, products.name, products.description, products.price, users.username
        FROM cart
        INNER JOIN products ON cart.product_id = products.id
        INNER JOIN users ON cart.user_id = users.id
    ');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}


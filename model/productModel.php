<?php
include_once 'connection/connectTODB.php';

function get_all_products(){
    $con=connection();
  $data=$con->query('SELECT * FROM products');
  return $data->fetchAll();


}
function creatNewProduct($name,$description,$price){
$con= connection();
$stmt=$con->prepare('INSERT INTO products (name,description,price) VALUES(:name,:description,:price)');
$stmt->bindParam(':name',$name);
$stmt->bindParam(':description',$description);
$stmt->bindParam(':price',$price);

$stmt->execute();

}

function One_product($id) {
  $con = connection();
  $stmt = $con->prepare("SELECT * FROM products WHERE id = :id");
  $stmt->bindParam(":id", $id, PDO::PARAM_INT);
  $stmt->execute(); // This is necessary to actually run the query
  return $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the product data as an associative array
}
function update_product($name, $description, $price, $id) {
  $con = connection();
  $stmt = $con->prepare("UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':id', $id); // Missing parameter binding
  $stmt->execute();
}

function delete($id){
  $con=connection();
  $stmt=$con->prepare('DELETE  FROM products where id=:id');
  $stmt->bindParam(':id',$id);
  $stmt->execute();

}

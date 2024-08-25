<?php
include_once "connection/connectTODB.php";


// userModel.php
function register($username, $email, $password) {
    $con = connection();
    $stmt = $con->prepare("INSERT INTO users (username, email, type, password) VALUES (:username, :email, 'client', :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    try {
        if ($stmt->execute()) {
            return $con->lastInsertId(); // Return the ID of the newly inserted user
        } else {
            return null; // Insert failed
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null; // Error during insertion
    }
}


function login($email,$password){
    $con=connection();
    $data=$con->query('SELECT * FROM  users where email="'.$email.'" and password="'.$password.'"');


    return $data->fetch();

}


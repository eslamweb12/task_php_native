<?php
$usernameError = '';
$emailError = '';
$passwordError = '';

if (empty($_POST['username'])) {
    $usernameError = 'Username should not be empty';
} elseif (strlen($_POST['username']) < 4) {
    $usernameError = 'Username should be greater than 4 characters';
}

if (empty($_POST['email'])) {
    $emailError = 'Email should not be empty';
} elseif (strlen($_POST['email']) < 4) {
    $emailError = 'Email should be greater than 4 characters';
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $emailError = 'This is not a valid email';
}

if (empty($_POST['password'])) {
    $passwordError = 'Password should not be empty';
} elseif (strlen($_POST['password']) < 4) {
    $passwordError = 'Password should be greater than 4 characters';
}

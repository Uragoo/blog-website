<?php

include(ROOT_PATH . "/app/database/database.php");
include(ROOT_PATH . "/app/database/formValidation.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConfirmation = '';

if (isset($_POST['register-button'])) {
    $errors = registerValidation($_POST);    

    if (count($errors) === 0) {
        unset($_POST['password-confirmation'], $_POST['register-button']); //Unset unwanted keys to create the user
        $_POST['admin'] = 0; //Add a default admin key to false
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); //Encrypting the password

        $user_id = createRow('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password-confirmation'];
    }
    
}
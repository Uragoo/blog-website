<?php

include(ROOT_PATH . "/app/database/database.php");
include(ROOT_PATH . "/app/database/formValidation.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConfirmation = '';
$table = 'users';

function userLogin($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['type'] = 'success';

    //Redirect admin users to the admin dashboard, to the main page if not
    if ($user['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

//Check for register errors and create the user in the database if there is none
if (isset($_POST['register-button'])) {
    $errors = registerValidation($_POST);    

    if (count($errors) === 0) {
        unset($_POST['password-confirmation'], $_POST['register-button']); //Unset unwanted keys to create the user
        $_POST['admin'] = 0; //Add a default admin key to false
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); //Encrypting the password

        $user_id = createRow($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        //Log in the user
        //Save the user informations in the session and redirect him to the main page
        $_SESSION['message'] = 'Registration successful! You are now logged in.';
        userLogin($user);
        
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password-confirmation'];
    }
    
}

//Check for login errors and log in the user if none
if (isset($_POST['login-button'])) {
    $errors = loginValidation($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['email' => $_POST['email']]); //Search for a user with the email entered by the user

        //If the user exists and the password matches the one in the database
        if ($user && password_verify($_POST['password'], $user['password'])) {
            //Log in the user
            //Save the user informations in the session and redirect him to the main page
            $_SESSION['message'] = 'You are successfully logged in!';
            userLogin($user);
        } else {
            array_push($errors, 'Wrong email or password');
        }
    }

    // If there are errors, save the values to get them back in the form for the user to change it
    // This way the user don't have to write all the informations again
    $email = $_POST['email'];
    $password = $_POST['password'];
}
<?php

include(ROOT_PATH . "/app/database/database.php");
include(ROOT_PATH . "/app/database/formValidation.php");

$table = 'users';
$errors = array();
$id = '';
$username = '';
$email = '';
$password = '';
$passwordConfirmation = '';
$admin = '';
$users = selectAll($table);

function userLogin($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['type'] = 'success';

    //Redirect admin users to the admin dashboard, to the main page if not
    if ($user['admin']) {
        header('location: ' . BASE_URL . '/admin/posts/index.php');
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

//Check for register errors and create the user in the database if there is none
//Also used for the user creation in the admin dashboard
if (isset($_POST['register-button'])) {
    //Check for errors in the form
    
    $errors = registerValidation($_POST);  

    if (count($errors) === 0) {
        unset($_POST['password-confirmation']); //Unset unwanted keys to create the user
        unset($_POST['register-button']); //Unset unwanted keys to create the user
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); //Encrypting the password
        $_POST['admin'] = 0;

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

//If the create form is sent, create a new topic in the database
if (isset($_POST['create-user'])) {
    $errors = registerValidation($_POST);

    if (count($errors) === 0) {
        unset($_POST['create-user'], $_POST['password-confirmation']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); //Encrypting the password
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
        } else {
            $_POST['admin'] = 0;
        }
        displayValue($_POST);
        $user_id = createRow($table, $_POST);
        $_SESSION['message'] = "User successfully created";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/users/index.php");
        exit(); 
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password-confirmation'];
        if (isset($_POST['admin'])) {
            $admin = 1;
        } else {
            $admin = 0;
        }
    }
}

//Delete the user from the database when there is a GET delete_id attribute
if (isset($_GET['delete_id'])) {
    $count = deleteRow($table, $_GET['delete_id']);
    $_SESSION['message'] = "User successfully deleted";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/users/index.php");
    exit(); 
}

//Update the selected post in the database when there is a GET id attribute
if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    
    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];
    $admin = $user['admin'];
}

//If the edit form is sent, update the post in the database
if (isset($_POST['update-user'])) {
    $errors = registerValidation($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['id'], $_POST['password-confirmation']); //Unset unwanted keys to create the post
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); //Encrypting the password
        //If the user checked the publish checkbox set published to true, else false
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
        } else {
            $_POST['admin'] = 0;
        }

        $user = updateRow($table, $id, $_POST);
        $_SESSION['message'] = "User successfully updated !";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/users/index.php");
        exit();    
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password-confirmation'];
        if (isset($_POST['admin'])) {
            $admin = 1;
        } else {
            $admin = 0;
        }
    }
}
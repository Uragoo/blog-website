<?php

//Restrict fonctionnalities to logged in users
function usersOnly($redirect = '/index.php') {
    //If the user is not logged in, redirect him with an error message
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = "Logged in users only";
        $_SESSION['type'] = "error";
        // header("location: " . BASE_URL . $redirect);
        exit();
    }

}

//Restrict fonctionnalities to admin
function adminOnly($redirect = '/index.php') {
    //If the user is not an admin, redirect him with an error message
    if (empty($_SESSION['admin'])) {
        $_SESSION['message'] = "You are not allowed to do that !";
        $_SESSION['type'] = "error";
        header("location: " . BASE_URL . $redirect);
        exit();
    }
}

//Restrict fonctionnalities to guests
function guestsOnly($redirect = '/index.php') {
    //If the user is not logged in, redirect them
    if (isset($_SESSION['id'])) {
        header("location: " . BASE_URL . $redirect);
        exit();
    }
}
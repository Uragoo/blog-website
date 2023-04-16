<?php
include("path.php");

session_start(); //Start the session
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy(); //Destroy the session

header('location: ' . BASE_URL . '/index.php');
exit();
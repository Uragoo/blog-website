<?php
include(ROOT_PATH . "/app/database/database.php");
include(ROOT_PATH . "/app/database/formValidation.php");


$table = 'posts';
$errors = array();

$topics = selectAll('topics'); //Fetch all topics from the database to use in our post forms
$posts = selectAll($table); //Fetch all posts from the database

$title = "";
// $image = "";
$body = "";
$topic_id = "";
$published = "";

if (isset($_POST['create-post'])) {
    $errors = postValidation($_POST);

    //Check if the user uploaded an image
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name']; //add the current time to the image name to make it unique
        $destination = ROOT_PATH . "/assets/img/" . $image_name;

        $success = move_uploaded_file($_FILES['image']['tmp_name'], $destination); //Move the file from the temporary file to our image folder

        //Check if the upload was a success
        if ($success) {
            $_POST['image'] = $image_name; //Set the image name to the new name with the current time to upload it in the database
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        //Unset unwanted keys to create the post
        unset($_POST['create-post']);
        $_POST['user_id'] = 1;
        //If the user checked the publish checkbox set published to true, else false
        if (isset($_POST['published'])) {
            $_POST['published'] = 1;
        } else {
            $_POST['published'] = 0;
        }
        $_POST['body'] = SecurizeString_ForSQL($_POST['body']);

        $post = createRow($table, $_POST);
        $_SESSION['message'] = "Post successfully created !";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php");
        exit();    
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $title = $_POST['title'];
        // $image = $_POST['image'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        if (isset($_POST['published'])) {
            $published = 1;
        } else {
            $published = 0;
        }
    }
    
}
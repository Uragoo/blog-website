<?php
include(ROOT_PATH . "/app/database/database.php");
include(ROOT_PATH . "/app/database/formValidation.php");
include(ROOT_PATH . "/app/database/middleware.php");


$table = 'posts';
$errors = array();

$topics = selectAll('topics'); //Fetch all topics from the database to use in our post forms
$posts = selectAll($table); //Fetch all posts from the database

$id = '';
$title = "";
// $image = "";
$body = "";
$topic_id = "";
$published = "";

//If the create form is sent, create a new post in the database
if (isset($_POST['create-post'])) {
    adminOnly(); //Redirect any user who is not an admin
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
        $_POST['user_id'] = $_SESSION['id']; //Set the author of the post to the user currently connected
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

////Update the selected post in the database when there is a GET id attribute
if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]); //Fetch the post corresponding to the post id
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}

//If the edit form is sent, update the post in the database
if (isset($_POST['update-post'])) {
    adminOnly(); //Redirect any user who is not an admin
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
        $id = $_POST['id'];
        //Unset unwanted keys to create the post
        unset($_POST['update-post']);
        unset($_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        //If the user checked the publish checkbox set published to true, else false
        if (isset($_POST['published'])) {
            $_POST['published'] = 1;
        } else {
            $_POST['published'] = 0;
        }
        $_POST['body'] = SecurizeString_ForSQL($_POST['body']);

        $post = updateRow($table, $id, $_POST);
        $_SESSION['message'] = "Post successfully updated !";
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

////Delete the selected post from the database when there is a GET delete_id attribute
if (isset($_GET['delete_id'])) {
    adminOnly(); //Redirect any user who is not an admin
    $count = deleteRow($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post successfully deleted !";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php");
    exit();   
}

////Publish or unpublish the selected post when there is a GET published and post_id attribute
if (isset($_GET['published']) && isset($_GET['post_id'])) {
    adminOnly(); //Redirect any user who is not an admin
    $published = $_GET['published'];
    $post_id = $_GET['post_id'];

    $post = updateRow($table, $post_id, ['published' => $published]);
    if ($published) {
        $_SESSION['message'] = "Post published !";
    } else {
        $_SESSION['message'] = "Post unpublished !";
    } 
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php");
    exit(); 
}
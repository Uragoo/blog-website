<?php
include(ROOT_PATH . "/app/database/database.php");
include(ROOT_PATH . "/app/database/formValidation.php");
include(ROOT_PATH . "/app/database/middleware.php");

$table = 'topics';
$errors = array();
$id = '';
$name = '';
$description = '';
$topics = selectAll($table);

//If the create form is sent, create a new topic in the database
if (isset($_POST['create-topic'])) {
    adminOnly(); //Redirect any user who is not an admin
    $errors = topicValidation($_POST); //Check for errors in the form

    if (count($errors) === 0) {
        unset($_POST['create-topic']); //Unset unwanted keys to create the user
        $_POST["description"] = SecurizeString_ForSQL($_POST["description"]);
        $id = createRow('topics', $_POST);
        $_SESSION['message'] = "Topic successfully created !";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . "/admin/topics/index.php");
        exit();
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

//Fetch a particular topic when there is a GET id attribute
//Fill the Edit page with the topic informations
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

//If the edit form is sent, update the topic in the database
if (isset($_POST['update-topic'])) {
    adminOnly(); //Redirect any user who is not an admin
    $errors = topicValidation($_POST); //Check for errors in the form

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['id']);
        unset($_POST['update-topic']); //Unset unwanted keys to create the user
        $_POST["description"] = SecurizeString_ForSQL($_POST["description"]);
        $id = updateRow($table, $id, $_POST);
        $_SESSION['message'] = "Topic successfully updated !";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . "/admin/topics/index.php");
        exit();
    } else {
        // If there are errors, save the values to get them back in the form for the user to change it
        // This way the user don't have to write all the informations again
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


//Delete the topic from the database when there is a GET delete_id attribute
if (isset($_GET['delete_id'])) {
    adminOnly(); //Redirect any user who is not an admin
    $id = $_GET['delete_id'];
    $count = deleteRow($table, $id);
    $_SESSION['message'] = "Topic successfully deleted !";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . "/admin/topics/index.php");
    exit();
}
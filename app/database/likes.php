<?php

$table = "likes";

//Like a post
if (isset($_POST['liked'])) {
    usersOnly(); //Restrict access to loged in users
    $like = createRow($table, ['post_id' => $_POST['post_id'], 'user_id' => $_SESSION['id']]); //Create the like in the database
    $post = selectOne("posts", ['id' => $_POST['post_id']]); //Select the post
    $n = $post['likes'] + 1; //Get the previous like number
    $like = updateRow("posts", $post['id'], ['likes' => $n]); //Update the like number
}

//Unlike a post
if (isset($_POST['unliked'])) {
    usersOnly(); //Restrict access to loged in users
    $like = selectOne("likes", ['post_id' => $_POST['post_id'], 'user_id' => $_SESSION['id']]); //Get the like from the database
    $post = selectOne("posts", ['id' => $_POST['post_id']]); //Select the post
    $n = $post['likes'] - 1; //Get the like number
    $post = updateRow("posts", $post['id'], ['likes' => $n]); //Update the like number
    $count = deleteRow($table, $like['id']); //Delete the like
}

//Determine whether or not a user has already liked a post
function alreadyLiked($post, $user) {
    
    $like = selectOne("likes", ['post_id' => $post, 'user_id' => $user]);
    return count($like);
}
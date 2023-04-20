<?php

//Return errors in the register form
function registerValidation($fields) {
    $errors = array();

    //Check if the fields are empty
    if (empty($fields['username'])) {
        array_push($errors, 'Username required');
    }
    if (empty($fields['email'])) {
        array_push($errors, 'Email required');
    } else {
        //Check if the email is already used
        $exists = selectOne('users', ['email' => $fields['email']]);
        if ($exists && $fields['id'] != $fields['id']) {
            array_push($errors, 'This email is already used');
        }
    }
    if (empty($fields['password'])) {
        array_push($errors, 'Password required');
    }
    if ($fields['password'] !== $fields['password-confirmation']) {
        array_push($errors, 'Passwords does not match');
    }

    return $errors;
}

//Return errors in the login form
function loginValidation($fields){
    $errors = array();

    //Check if the fields are empty
    if (empty($fields['email'])) {
        array_push($errors, 'Email required');
    }
    if (empty($fields['password'])) {
        array_push($errors, 'Password required');
    }
    return $errors;
}

//Return errors in the topic forms
function topicValidation($topic) {
    $errors = array();

    //Check if the fields are empty
    if (empty($topic['name'])) {
        array_push($errors, 'Topic name required');
    }
    
    //Check if the topic already exists
    $exists = selectOne('topics', ['name' => $topic['name']]);
    if ($exists && $topic['id'] != $topic['id']) {
        array_push($errors, 'This topic already exists !');
    }

    return $errors;
}

//Return errors in the post forms
function postValidation($post) {
    $errors = array();

    //Check if the topic already exists
    if (empty($post['title'])) {
        array_push($errors, 'Post title required');
    } else {
        //Check if a post already use the title
        $exists = selectOne('posts', ['title' => $post['title']]);
        if ($exists && $post['id'] != $exists['id']) {
            array_push($errors, 'The title is already used !');
        }
    }
    if (empty($post['body'])) {
        array_push($errors, 'Post content required');
    }
    if (empty($post['topic_id'])) {
        array_push($errors, 'Post topic required');
    }

    return $errors;
}
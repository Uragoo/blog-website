<?php

function registerValidation($fields) {
    $errors = array();

    if (empty($fields['username'])) {
        array_push($errors, 'Username required');
    }
    if (empty($fields['email'])) {
        array_push($errors, 'Email required');
    } else {
        $exists = selectOne('users', ['email' => $fields['email']]);
        if ($exists) {
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

function loginValidation($fields){
    $errors = array();

    if (empty($fields['email'])) {
        array_push($errors, 'Email required');
    }
    if (empty($fields['password'])) {
        array_push($errors, 'Password required');
    }
    return $errors;
}

function topicValidation($topic, $query) {
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Topic name required');
    }
    
    if ($query == 'create') {
        $exists = selectOne('topics', ['name' => $topic['name']]);
        if ($exists) {
            array_push($errors, 'This topic already exists !');
        }
    }

    return $errors;
}
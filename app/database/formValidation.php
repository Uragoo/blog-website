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
        if (isset($exists)) {
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
<?php

require('connect.php');

function displayValue($value) {
    echo "<pre>", print_r($value, true), "</pre>";
}

// Select all rows of the specified table fitting certain conditions or not 
function selectAll($table, $conditions = []) {
    global $connection;
    $sql = "SELECT * FROM $table"; //Base sql query
    if (empty($conditions)) {
        $query = $connection->prepare($sql); //Preparation of the query
        $query->execute(); //Execution of the query
        $results = $query->get_result()->fetch_all(MYSQL_ASSOC); // Fetching all the results of the query
        return $results;
    } else {
        $i = 0;
        //We add the values separatly from this part to help prevent SQL injection
        foreach ($conditions as $column => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $column=? "; 
            } else {
                $sql = $sql . " AND $column=? ";
            }
            $i++;
        }
        $query = $connection->prepare($sql); //Preparation of the query
        $values = array_values($conditions); //Fetching the conditions 
        $types = str_repeat('s', count($values)); //Creating value types (all str here because sql is smart and will replace it)
        //Binding condition values into the query (prevent SQL injection)
        $query->bind_param($types, ...$values); //...$values --> spread all values like : $admin, $username, ...
        $query->execute(); //Execution of the query
        $results = $query->get_result()->fetch_all(MYSQL_ASSOC); // Fetching all the results of the query
        return $results;
    }
    
}

$conditions = [
    'username' => 'Théo',
    'admin' => 0
];

$users = selectAll('users', $conditions);



// displayValue($users);
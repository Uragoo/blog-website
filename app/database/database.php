<?php

require('connect.php');

function displayValue($value) {
    echo "<pre>", print_r($value, true), "</pre>";
}

// Select all rows of the specified table fitting certain conditions or not 
function selectAll($table, $conditions = []) {
    global $connection;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $query = $connection->prepare($sql);
        $query->execute();
        $results = $query->get_result()->fetch_all(MYSQL_ASSOC);
        return $results;
    } else {
        $i = 0;
        foreach ($conditions as $column => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $column = $value";
            } else {
                $sql = $sql . " AND $column = $value";
            }
            $i++;
        }
        displayValue($sql);
    }
    
}

$conditions = [
    'name' => 'Théo',
    'admin' => 0
];

$users = selectAll('users', $conditions);



// displayValue($users);
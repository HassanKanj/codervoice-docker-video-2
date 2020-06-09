<?php
function dbConnect($host, $user, $password) {
    $connection = new mysqli($host, $user, $password);

    if ($connection->connect_errno) {
        echo "mysqli error occured\n";
        echo $connection->connect_error."\n";
        exit;
    }

    return $connection;
}

function dbQuery($query, $connection) {
    if(!$result = $connection->query($query)) {
        echo "Query error: " . $connection->error . "\n";
        exit;
    }
    echo " - [<b>executed successfully</b>] {$query}<br />";
    return $result;
}

// Note: make sure to change these values if needed
$connection = dbConnect('172.17.0.4', 'root', 'rtvEZMR3xmG8w4UB');
?>
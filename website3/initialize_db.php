<?php require_once('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin:20px">
    <?php
    dbQuery('DROP DATABASE IF EXISTS test_database', $connection);

    $createDatabase = "CREATE DATABASE test_database";
    dbQuery($createDatabase, $connection);

    $connection->select_db('test_database');

    $createTable = "CREATE TABLE `random_numbers_tbl` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `random_number` int(11) DEFAULT NULL,
        PRIMARY KEY (`id`))";

    dbQuery($createTable, $connection);

    // fill in the table with random numbers
    for($i = 0; $i < 100; $i++) {
        $randomNumber = rand();
        $insertRandomNumber = "INSERT INTO random_numbers_tbl (random_number) VALUES ('$randomNumber');";
        dbQuery($insertRandomNumber, $connection);
    }
    ?>
</body>
</html>
<?php


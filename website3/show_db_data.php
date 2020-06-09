<?php require_once('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $query  = "SELECT * FROM test_database.random_numbers_tbl ORDER BY id ASC";
    $result = dbQuery($query, $connection);

    echo "<table class='table' style='width:400px; margin-top:30px; margin-left:30px;'> <thead class='thead-dark'><tr><th>ID</th><th>random_number</th></thead><tbody>";
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>{$row['id']}</td><td>{$row['random_number']}</td>";
    }
    echo "</tbody></table>";
    ?>
</body>
</html>
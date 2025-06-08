<?php

$pdo = require "connect.php";
$sql = "INSERT INTO authors (first_name, middle_name, last_name) VALUES (?,?,?)";

$statement = $pdo->prepare($sql);

$statement->execute(["Jagdish", "Prasad", "Jatav"]);
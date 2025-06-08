<?php
$pdo = require "connect.php";

$sql = "INSERT INTO authors (first_name, last_name) VALUES (?,?)";

$stmt = $pdo->prepare($sql);
// $stmt->bindValue(1, "Varun");
// $stmt->bindValue(2, "Jatav");

$firstName = "Vivek";
$lastName = "Obroe";

$stmt->bindParam(1, $firstName);
$stmt->bindParam(2, $lastName);

$stmt->execute();
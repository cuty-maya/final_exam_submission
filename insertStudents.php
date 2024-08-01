<?php 
require_once "./submit.php";

$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);

$stmt = "INSERT INTO students (`name`, `email`)
VALUES(?,?)";

$query = $dbb->prepare($stmt);
$query->bind_param("ss",$name,$email);
$query->execute();

echo "Insert Successful";

echo "<a href='index.html'>Home</a>";

$query->close();
$dbb->close();
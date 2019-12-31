<?php
$dbHost = "localhost";
$dbUser = "root";
$dbpassword = " ";
$dbName = "student";

try {
 $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
 $pdo = new PDO($dsn, $dbUser, $dbPassword);
 echo "Connection successful";
} catch(PDOException $e){
 echo "DB Connection failed : " .$e->getMessage();
}

$id = $_POST['ID'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$email = $_POST['email'];
$preferred_language = $_POST['preferred_language'];
$avatar = $_POST['avatar'];
$video = $_POST['video'];
$quote = $_POST['quote'];
$quote_author = $_POST['quote_author'];
$created_at = $_POST['created_at'];


<?php

require_once('index.php');

//require_once('validator/Validation.class.php');

$avatar = $_POST['avatar'];
$id = $_POST['ID'];
$username = $_POST['username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$linkedin = $_POST['linkedin'];
$github = $_POST['github'];

$preferred_language = $_POST['preferred_language'];
$video = $_POST['video'];
$quote = $_POST['quote'];
$quote_author = $_POST['quote_author'];
$created_at = $_POST['created_at'];

if (!empty($id) || !empty($username) || !empty($first_name) || !empty($last_name) || !empty($gender) || !empty($email) || !empty($gender) || !empty($preferred_language)) {

} else {
  echo "All field are required";
  die();
}
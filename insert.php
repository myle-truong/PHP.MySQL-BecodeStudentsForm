<?php

require_once('index.php');



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

if (!empty($id) || !empty($username) || !empty($first_name) || !empty($last_name) || !empty($gender) || !empty($email) || !empty($gender) || !empty($linkedin) || !empty($github) || !empty($preferred_language)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName ="becode";
    
    // create connection
    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_error()){
       die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
       $SELECT = "SELECT email From student Where email = ? Limit 1";
       $INSERT = "INSERT student (avata, id, username, first_name, last_name, email, gender, linkedin, github, preferred_language, video, quote, qoute_author, created_at) value (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       
       //Prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $email);
       $stmt->excute();
       $stmt->bind_result($email);
       $stmt->store_result();
       $rnum = $stmt->num_rows;

       if($rnum==0){
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_para("sisssssssssss", $avatar,$id, $username, $first_name, $last_name, $email, $gender, $linkedin, $github, $preferred_language, $video, $quote, $quote_author,$created_at);
        $stmt->execute();
        echo "new record inserted successfully";
       }else{
        echo "Email already taken";
       }
       $stmt->close();
       $conn->close();
    }
} else {
  echo "All field are required";
  die();
}
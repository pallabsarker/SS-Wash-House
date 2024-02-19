<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, 'whms');

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query=" INSERT INTO comments (full_name, email, mobile, comment) 
VALUES ('$full_name','$email','$mobile','$comment') ";

mysqli_query($con, $query);

header('location:index.php');

?>
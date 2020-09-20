<?php

$con =mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con ,'doniee');

$user = $_POST['user'];
$email = $_POST['email'];
$contact  = $_POST['contact'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];
 
$query=" insert into userinfodata('user','email','contact','amount','comment')
values ('$user','$email','$contact','$amount','$comment')";

echo"$query"; 

mysqli_query($con, $query);

header('location:index.html');

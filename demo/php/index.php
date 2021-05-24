<?php
$result1 = $_COOKIE["answer1"]; //get cookies from browser 
$result2 = $_COOKIE["answer2"];
$result3 = $_COOKIE["answer3"];



$servername = "localhost";
$username = "root";                   //database conections
$password = "";
$dbname = "school";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error){
    die("connection failed: ".$conn->connect_error);
}
$s = "INSERT INTO data(q1,q2,q3) VALUES ('$result1','$result2','$result3')"; //insert query
if($conn->query($s) === TRUE) {
    echo "New record added successfully";
}else{
    echo "Error: " .$s . "<br>" . $conn->error;
}
$conn->close();
?>
<?php

if(isset($_POST['book'])){

$server = "localhost";
$username = "root";
$password = "";
$dbname = "library management";
$con = mysqli_connect( $server, $username, $password ,$dbname);
if(!$con){
    die("connection failed due to".mysqli_connection_error());
}
$book = $_POST['book'];
$author = $_POST['author'];

 $sql = "INSERT INTO `library management`.`return book` (`book`, `author`) VALUES ('$book', '$author');";

echo $sql; 
if($con->query($sql) == true){
    echo "  your book has been returned";
}
else
echo " ERROR: $sql <br> $con->error";
}
$con->close();



?>
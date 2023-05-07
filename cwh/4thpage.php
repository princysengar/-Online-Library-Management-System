<?php
if(isset($_POST['id'])){

$server = "localhost";
$username = "root";
$password = "";
$dbname = "library management";
$con = mysqli_connect( $server, $username, $password ,$dbname);
if(!$con){
    die("connection failed due to".mysqli_connection_error());
}
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$cost = $_POST['cost'];
$quantity = $_POST['quantity'];


 $sql = "INSERT INTO `library management`.`admin add book` (`id`, `title`, `author`, `cost`, `quantity`) VALUES ('$id', '$title', '$author', '$cost', '$quantity');";

echo $sql; 
if($con->query($sql) == true){
    echo " your book has been successfully added";
}
else
echo " ERROR: $sql <br> $con->error";
}
$con->close();

?> 



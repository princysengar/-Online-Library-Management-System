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
$studentid = $_POST['studentid'];
$studentname = $_POST['studentname'];
$issue = $_POST['issue'];
$expire = $_POST['expire'];


 $sql = "INSERT INTO `library management`.`student place order` (`book`, `author`, `studentid`, `studentname`, `issue`, `expire`) VALUES ('$book', '$author', '$studentid', '$studentname', current_timestamp(), '');";

echo $sql; 
if($con->query($sql) == true){
    echo "  your order has been placed";
}
else
echo " ERROR: $sql <br> $con->error";
}
$con->close();



?>

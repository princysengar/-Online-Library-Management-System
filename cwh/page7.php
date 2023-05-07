<?php

if(isset($_POST['bookname'])){

$server = "localhost";
$username = "root";
$password = "";
$dbname = "library management";
$con = mysqli_connect( $server, $username, $password ,$dbname);
if(!$con){
    die("connection failed due to".mysqli_connection_error());
}
$bookname = $_POST['bookname'];
$authorname = $_POST['authorname'];

 $sql = "INSERT INTO `library management`.`admin view order` (`bookname`, `authorname`, `date`) VALUES ('$bookname', '$authorname', current_timestamp());";
echo $sql; 
if($con->query($sql) == true){
    echo "order viewed";
}
else
echo " ERROR: $sql <br> $con->error";
}
$con->close();



?>

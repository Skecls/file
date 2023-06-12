<?php
$username = "localhost";
$servername ="root";
$password = "";
$database= "my_database";
$conn = mysqli_connect($username,$servername,$password,$database);
if($conn){
    print "connection established";
}
// $query = 'CREATE TABLE `my_database`.`sherya` (`akshat` VARCHAR(10) NOT NULL , `sherya` VARCHAR(10) NOT NULL )';
// $result = mysqli_query($conn,$query);

$sql = 'INSERT INTO `sherya` (`akshat`, `sherya`) VALUES ("ak", "sh")';
if($conn->query($sql)===TRUE)
{
    echo "Data inserted into the table";
}
else{
    echo("query failed");
}
?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wptest";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
       var_dump($row);
       }

 ?>
<?php


$servername='localhost';
$user='root';
$password=''; 

$conn = mysqli_connect($servername,$user,$password);
if ($conn){
  echo "Connection created";
}
else{
  die("Connection not created due to :".mysqli_connect_error());
}
mysqli_select_db($conn,'sample');

?>
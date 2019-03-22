<?php
session_start();
$username="localhost";
$password="root";
$database="testdb";
extract($_POST);
//echo file_get_contents("index.php");

$email=$_POST['email'];
$psw=$_POST['psw'];

$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
  die('connection failed!');
}
mysqli_select_db($conn,"testdb");

$query="SELECT * FROM users WHERE email like '$email';";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
if($row["email"]==$email && $row["password"]==$psw)
{
  echo"valid user";
  $_SESSION['user']=$email; 
  echo "<script> window.location.assign('index.php');</script>";
 
}
else{
  echo"<script>alert('Invalid Credentials')</script>";
  //echo file_get_contents("index.php");
  echo "<script> window.location.assign('index.php');</script>";
}
mysqli_close($conn);

?>
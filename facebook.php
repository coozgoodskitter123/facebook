<?php
$email=$_POST["email"];
$password=$_POST["password"];
$cnx=mysqli_connect("localhost","root","","facebook");
$req="INSERT into login values('$email','$password')";
$res=mysqli_query($cnx,$req);
?>
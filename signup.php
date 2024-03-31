<?php 
 
$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password']
$servername = "localhost";
$username = "root";
$password = "password";
$conn = new mysqli($servername,$username,$password);
if(!$conn)
{
 die('erro in connection'.mysql_error());
}

if(mysql_querry("CREATE DATABASE signup",$conn))
{
print "DATAbase created"
}
else{
 print "database not created"
}
mysql_select-db("signup",$conn);
$querry=CREATE TABLE page(username varchar(20),email varchar(20),password varchar(20))
$querry_1=INSERT INTO page(username,email,password) VALUES($uname,$email,$pass)
mysql_querry($querry,$conn);
mysql_querry($querry_1,$conn);
mysql_close($conn);
?>
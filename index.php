<?php
$host="localhost";
$user="root";
$pass="";
$database="db1";
$connection= mysqli_connect($host,$user,$pass,$database);
if($connection)
{
    echo "succesfull";
}else{
    die (" notsuccesfull");
}
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phonenumber"];
$sql="INSERT INTO contact(name,email,phonenumber) VALUES('$name','$email','$phone')";
if(mysqli_query($connection,$sql)){
    echo"succesfull";
}else{
    echo"not successfull";
}mysqli_close($connection);
?>
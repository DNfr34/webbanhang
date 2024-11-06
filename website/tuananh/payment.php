<?php

//runs localy
$host="localhost";
$user="root";
$password="";
$dbname="tuananh3";

//new var for connection
$connect=mysqli_connect($host,$user,$password,$dbname);

$fname=$_POST['fname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$cardnumber=$_POST['cardnumber'];
$cardname=$_POST['cardname'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];






$sql="INSERT INTO Orders(fname,email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,cvv) VALUES('$fname','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";

$connect->query($sql);

header("Location: index.php#form");
?>
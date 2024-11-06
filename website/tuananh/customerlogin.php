<?php
session_start();

if(isset($_POST['login'])) {
    //runs locally
    $host="localhost";
    $user="root";
    $password="";
    $dbname="tuananh3";

    //new var for connection
    $connect=mysqli_connect($host,$user,$password,$dbname);
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM customers WHERE username='$email' AND password='$password'";
    $results=$connect->query($sql);
    $final=$results->fetch_assoc();
    
    if($results->num_rows > 0) {
        // Username and password match
        $_SESSION['email']=$final['username'];
        $_SESSION['password']=$final['password'];
        header('Location: cart.php');
    } else {
        // Username or password is incorrect
        echo "<script> alert('Credentials are wrong!');
        window.location.href='user.php';
        </script>";
    }
}

// Display the username if logged in
if(isset($_SESSION['email'])) {
    //runs locally
    $host="localhost";
    $user="root";
    $password="";
    $dbname="tuananh3";

    //new var for connection
    $connect=mysqli_connect($host,$user,$password,$dbname);
    
    // Escape the username to prevent SQL injection
    $email=mysqli_real_escape_string($connect,$_SESSION['email']);
    
    $sql="SELECT username FROM customers WHERE username='$email'";
    $result=$connect->query($sql);

    if($result->num_rows > 0) {
        // Username exists in the database
        $row=$result->fetch_assoc();
        $username=$row['username'];
        echo $username;
    } else {
        // Username not found
        echo "Username not found";
    }
}
?>

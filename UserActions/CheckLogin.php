<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

$connection =mysqli_connect("localhost","root","","Cripto");

$query = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($connection,$query);

$rows= mysqli_num_rows($result);

if($rows > 0){
    $row = $result ->fetch_assoc();
    $_SESSION['FullName'] = $row['FullName'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['id'] = $row['id'];
}

if($_SESSION['email'] == $email && $_SESSION['password'] == $password){
    header("Location:../index.php");
    exit();
}else{
    echo '
        <script>
            alert("No user found");
            window.location = "../login/signin.php";
        </script>
    ';
    exit();
}
msqli_free_result($result);
mysqli_close($connection);
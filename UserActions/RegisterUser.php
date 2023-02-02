<?php
    include 'db.php';
    $connection =mysqli_connect("localhost","root","","Cripto");

    $FullName = $_POST['FullName'];
    $Email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (FullName, email, password) VALUES ('$FullName', '$Email', '$password')";

    //check if email already exists
    $checkEmail = mysqli_query($connection,"SELECT * FROM login WHERE email = '$Email'");

    if (mysqli_num_rows($checkEmail) > 0){
        echo '
            <script>
                alert("This email is already registered");
                window.location = "login.php";
            </script>
        ';
        exit();
    }

    $execute = mysqli_query($connection,$query);

    if($execute){
        echo '
            <script>
                alert("User registered successfully");
                window.location = "../login/signin.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Try again, user not stored");
                window.location = "../login/signin.php";
            </script>
        ';
    }
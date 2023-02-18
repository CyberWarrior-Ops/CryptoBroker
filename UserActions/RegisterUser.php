<?php
    include 'db.php';
    $connection =mysqli_connect("localhost","root","","Cripto");

    $FullName = $_POST['FullName'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $ID= rand(1,1000000000);
    $query = "INSERT INTO login (ID,FullName, email, password) VALUES ($ID,'$FullName', '$Email', '$password')";

    //check if email already exists
    $checkEmail = mysqli_query($connection,"SELECT * FROM login WHERE email = '$Email'");

    //Bitcoin
    $BTC = "INSERT INTO BitcoinWallet(ID,ammount) VALUES ($ID,0)";
    $queryBtc = mysqli_query($connection,$BTC);

    //Etherium
    $ETH = "INSERT INTO EtheriumWallet(ID,ammount) VALUES ($ID,0)";
    $queryEth = mysqli_query($connection,$ETH);

    //Litecoin
    $LiteCoinWallet = "INSERT INTO LitecoinWallet(ID,ammount) VALUES ($ID,0)";
    $queryLite = mysqli_query($connection,$LiteCoinWallet);

    //UserInfo
    $UserInfo = "INSERT INTO UserInfo(ID,Name,mail) VALUES ($ID,'$FullName','$Email')";
    $queryUserInfo = mysqli_query($connection,$UserInfo);

    $execute = mysqli_query($connection,$query);

    if ($execute && $queryBtc && $queryEth && $queryLite && $queryLite && $queryUserInfo == false){
        echo '
            <script>
                alert("Try again, user not stored");
                window.location = "../login/signin.php";
            </script>
        ';
    }else{
        echo'
        <script>
        alert("User registered successfully");
        window.location = "../login/signin.php";
        </script>';
    }
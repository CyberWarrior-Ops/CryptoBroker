<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</html>
<?php
$connection = mysqli_connect("localhost", "root", "", "Cripto");

$FullName = $_POST['FullName'];
$Email = $_POST['email'];
$password = $_POST['password'];
$ID= rand(1,1000000000);

$query = "INSERT INTO login (ID,FullName, email, password) VALUES ($ID,'$FullName', '$Email', '$password')";
$execute = mysqli_query($connection,$query);
if (!$execute) {
    echo 'Login erroe: ' . mysqli_error($connection);
}

// check if email already exists
$checkEmail = mysqli_query($connection,"SELECT * FROM login WHERE email = '$Email'");
if (!$checkEmail) {
    echo 'Error checking Login Table: ' . mysqli_error($connection);
}

// Bitcoin
$BTC = "INSERT INTO BitcoinWallet(ID,ammount,Address) VALUES ($ID,0,'NaN')";
$queryBtc = mysqli_query($connection,$BTC);
if (!$queryBtc) {
    echo 'BitCoin Wallet seems to not respond: ' . mysqli_error($connection);
}

// Etherium
$ETH = "INSERT INTO EtheriumWallet(ID,ammount,Address) VALUES ($ID,0,'NaN')";
$queryEth = mysqli_query($connection,$ETH);
if (!$queryEth) {
    echo 'EthWallet seems to not respond: ' . mysqli_error($connection);
}

// Litecoin
$LiteCoinWallet = "INSERT INTO LitecoinWallet(ID,ammount,Adress) VALUES ($ID,0,'NaN')";
$queryLite = mysqli_query($connection,$LiteCoinWallet);
if (!$queryLite) {
    echo 'LTCWallet seems to not respond: ' . mysqli_error($connection);
}

// UserInfo
$UserInfo = "INSERT INTO UserInfo(ID,Name) VALUES ($ID,'$FullName')";
$queryUserInfo = mysqli_query($connection,$UserInfo);
if (!$queryUserInfo) {
    echo 'User info not working: ' . mysqli_error($connection);
}

//logs
$actualDate = date('Y-m-d');
$LogsMessage = ('User Created-'.$Email.' - '.$password);
$hash = password_hash($LogsMessage,PASSWORD_DEFAULT);
$Logs = "INSERT INTO logsUser(ID, date, text, type) VALUES ('$ID', '$actualDate', '$hash', 'Creation')";
$QueryLogs = mysqli_query($connection, $Logs);
if (!$QueryLogs) {
    echo 'Logs system not working: ' . mysqli_error($connection);
}


if (!$execute || !$queryBtc || !$queryEth || !$queryLite || !$queryUserInfo || !$QueryLogs) {
    echo '
       <script>
        swal.fire({
            title: "Oh Snap!",
            text: "User not Created",
            icon: "error",
        }).then(function() {
            window.location = "../login/signin.php";
        });
    </script>
    ';
} else {
    echo '
    <script>
        swal.fire({
            title: "Welcome!",
            text: "User Created",
            icon: "success",
            type: "Success"
        }).then(function() {
            window.location = "../login/signin.php";
        });
    </script>
';
    }
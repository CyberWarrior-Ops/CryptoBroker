<?php
session_start();

$connection = mysqli_connect("localhost","root","","Cripto");
if(!isset($_SESSION['email'])){
    echo '
        <script>
            alert("You must login first");
            window.location = "../login/signin.php";
        </script>
    ';
    session_destroy();
    die();
}

$getID= 'SELECT ID FROM users WHERE email = "'.$_SESSION['email'].'"';
$getIDResult = mysqli_query($connection,$getID);
if (mysqli_num_rows($getIDResult) > 0) {
    while($row = mysqli_fetch_assoc($getIDResult)) {
        $_SESSION['id'] = $row["ID"];
    }
} else {
    echo "0 results";
}


$ID = $_SESSION['id'];
//Bitcoin get last value

$lastRecord = "SELECT * FROM Bitcoin ORDER BY ID DESC LIMIT 1";
$resultbtc = mysqli_query($connection, $lastRecord);
if (mysqli_num_rows($resultbtc) > 0) {
    while($row = mysqli_fetch_assoc($resultbtc)) {
        $lastValue = $row["value"];
    }
} else {
    echo "0 results";
}



function Buy(){
    global $connection;
    global $ID;
    global $lastValue;
    $ID = $_SESSION['id'];
    $buy = $_POST['buy'];

    $buy = floatval($buy);
    $lastValue = floatval($lastValue);

    if (!is_numeric($buy) || !is_numeric($lastValue)) {
        throw new Exception("Invalid input");
    }

    $resultValue = $buy / $lastValue;
    $messaje = "Buy ".$buy." BTC, for ".$resultValue." USD, ".$_SESSION['email']."";
    $address = base64_encode($messaje);

    $insert = "UPDATE BitcoinWallet SET ammount='$resultValue',
                     Address='$address'
                     where ID = 1";
    $result = mysqli_query($connection,$insert);

    if($result){
        echo '
            <script>
                alert("Buy Succesfull");
                window.location = "./trade.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Buy Failed ");
                window.location = "./trade.php";
            </script>
        ';
    }
}


if (isset($_POST['BuyCripto'])) {
    try{
        Buy();
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

?>
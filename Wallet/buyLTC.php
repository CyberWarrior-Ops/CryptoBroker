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
global $sell;
$sell = $_POST['sellval'];


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
//Eth get last value

$lastRecord = "SELECT * FROM Litecoin ORDER BY ID DESC LIMIT 1";
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

    $select = "SELECT ammount FROM LiteCoinWallet WHERE ID = $ID";
    $selectResult = mysqli_query($connection, $select);
    $currentAmmount = mysqli_fetch_assoc($selectResult)["ammount"];
    $newAmmount = $currentAmmount + $resultValue;

    $update = "UPDATE LiteCoinWallet SET ammount='$newAmmount' where ID = '$ID'";
    $result = mysqli_query($connection,$update);

    if($result){
        echo '
            <script>
                alert("Buy Succesful");
                window.location = "tradeLTC.php";
            </script>
        ';

    }else{
        echo '
            <script>
                alert("Buy Failed ");
                window.location = "tradeLTC.php";
            </script>
        ';
    }
}


function SellCt(){
    global $connection;
    global $ID;
    $ID = $_SESSION['id'];
    global $criptoWallet;
    $sell = $_POST['sellval'];
    global $newAmmount;

    $newAmmount = floatval($criptoWallet) - floatval($sell);
    $CheckWallet = "SELECT ammount FROM EtheriumWallet WHERE ID = '$ID'";
    $result = mysqli_query($connection,$CheckWallet);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $criptoWallet = $row["ammount"];
        }
    } else {
        echo "0 results";
    }

    if($criptoWallet - $sell<0){
        echo '
            <script>
                alert("You dont have enough Criptos to sell");
                window.location = "tradeetc.php";
            </script>
        ';
    }else{
        $newAmmount = floatval($criptoWallet) - floatval($sell);
        $newAmmount = number_format($newAmmount, 8, '.', '');
        $insert = "UPDATE EtheriumWallet SET ammount='$newAmmount' where ID = '$ID'";
        $result = mysqli_query($connection,$insert);
        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        }


        if(true){
            echo '
            <script>
                var variablePHP = '. json_encode($newAmmount) .';
                alert("Sell Succesfull. Valor de la variable: " + variablePHP);
                window.location = "tradeetc.php";
            </script>
        ';
        }else{
            echo '
            <script>
                alert("Sell Failed ");
                window.location = "tradeetc.php";
            </script>
        ';
        }
    }
}


if (isset($_POST['BuyCripto'])) {
    try{
        Buy();
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

if (isset($_POST['SellCripto'])) {
    if (isset($_POST['sellval'])) {
        try{
            SellCt();
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    } else {
        echo '<script>alert("No value sent");</script>';
    }
}


?>
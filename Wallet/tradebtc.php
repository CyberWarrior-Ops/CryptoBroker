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

$getID= 'SELECT ID FROM login WHERE email = "'.$_SESSION['email'].'"';
$getIDResult = mysqli_query($connection,$getID);
if (mysqli_num_rows($getIDResult) > 0) {
    while($row = mysqli_fetch_assoc($getIDResult)) {
        $_SESSION['id'] = $row["ID"];
    }
} else {
    echo "0 results";
}

$ID = $_SESSION['id'];
global $lastValue;
global $criptoWallet;
//Bitcoin get last value
$btc = "SELECT * FROM Bitcoin ORDER BY ID DESC LIMIT 1";
$resultbtc = mysqli_query($connection, $btc);
if (mysqli_num_rows($resultbtc) > 0) {
    while($row = mysqli_fetch_assoc($resultbtc)) {
        $lastValue = $row["value"];
    }
} else {
    echo "0 results";
}

//Criptos on wallet
$cripto = "SELECT * FROM BitcoinWallet WHERE ID = '$ID'";
$resultwallet = mysqli_query($connection, $cripto);
if (mysqli_num_rows($resultwallet) > 0) {
    while($row = mysqli_fetch_assoc($resultwallet)) {
        $criptoWallet = $row["ammount"];
    }
} else {
    echo "0 results";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CryptoBroker</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body class="dashboard">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="header bg-light">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxl-12">
              <div class="header-content">
                <div class="header-left">
                  <!-- <div class="brand-logo">
                            <a href="index.php">
                                <img src="./images/logo.png" alt="">
                            </a>
                        </div> -->
                    <div class="search">
                        <form action="Operations/search.php" method="GET">
                            <div class="input-group">
                                <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search Here"
                                />
                                <button class="input-group-text" type="submit"
                                ><i class="icofont-search"></i
                                    ></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="header-right">
                  <div class="dark-light-toggle" onclick="themeToggle()">
                    <span class="dark"><i class="bi bi-moon"></i></span>
                    <span class="light"
                      ><i class="bi bi-brightness-high"></i
                    ></span>
                  </div>
                  <div class="notification dropdown">
                    <div class="notify-bell" data-toggle="dropdown">
                      <span><i class="bi bi-bell"></i></span>
                    </div>
                    <div
                      class="
                        dropdown-menu dropdown-menu-right
                        notification-list
                      "
                    >
                      <h4>Announcements</h4>
                        <div class="lists">
                            <?php
                            // Conectarse a la base de datos
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "Cripto";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Error de conexión: " . $conn->connect_error);
                            }

                            // Obtener los tres registros más recientes de la tabla "logsUser"
                            $sql = "SELECT type, date FROM logsUser ORDER BY date DESC LIMIT 3";
                            $result = $conn->query($sql);

                            // Mostrar los registros en el formato deseado
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<a href="#" class="">
                              <div class="d-flex align-items-center">
                                <span class="me-3 icon success"><i class="bi bi-check"></i></span>
                                <div>
                                  <p>'.$row["type"].'</p>
                                  <span>'.$row["date"].'</span>
                                </div>
                              </div>
                            </a>';
                                }
                            } else {
                                echo "No se encontraron registros.";
                            }
                            $conn->close();
                            ?>


                            <a href="../settings-activity.html"
                            >More <i class="icofont-simple-right"></i
                                ></a>
                        </div>
                    </div>
                  </div>

                  <div class="profile_log dropdown">
                    <div class="user" data-toggle="dropdown">
                      <span class="thumb"
                        ><img src="../images/profile/2.png" alt=""
                      /></span>
                      <span class="arrow"
                        ><i class="icofont-angle-down"></i
                      ></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="user-email">
                        <div class="user">
                        </div>
                      </div>

                      <div class="user-balance">
                        <div class="available">
                          <p>Available</p>
                          <span><?php
                              echo $criptoWallet;
                              ?> BTC</span>
                        </div>
                        <div class="total">
                          <p>Total</p>
                          <span><?php
                              echo number_format(floatval($criptoWallet) * floatval($lastValue),2);
                              ?> USD</span>
                        </div>
                      </div>
                      <a href="wallet.php" class="dropdown-item">
                        <i class="bi bi-wallet"></i>Wallet
                      </a>
                      <a href="../User/settings-profile.php" class="dropdown-item">
                        <i class="bi bi-gear"></i> Setting
                      </a>
                      <a href="../login/signin.php" class="dropdown-item logout">
                        <i class="bi bi-power"></i> Logout
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="brand-logo">
          <a href="../index.php"
            ><img src="../images/logow.png" alt="" width="30" />
          </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a
                href="../User/dashboard.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Home"
              >
                <span><i class="bi bi-house"></i></span>
              </a>
            </li>
            <li>
              <a
                href="tradebtc.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="bi bi-cash-stack"></i></span>
              </a>
            </li>
            <li>
              <a
                href="wallet.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Wallet"
              >
                <span><i class="bi bi-wallet2"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../User/settings-profile.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Settings"
                id="settings"
              >
                <span><i class="bi bi-gear"></i></span>
              </a>
            </li>
            <li class="logout">
              <a
                href="../login/signin.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Signout"
              >
                <span><i class="bi bi-power"></i></span>
              </a>
            </li>
          </ul>

          <p class="copyright">&#169; <a href="#">Qkit</a></p>
        </div>
      </div>

      <div class="content-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Buy</h4>
                </div>
                <div class="card-body">
                    <form
                            name="myform"
                            class="currency_validate trade-form row g-3"
                            action="buybtc.php"
                            method="post"
                    >
                        <div class="col-12">
                            <label class="form-label">Buy</label>
                            <div class="input-group">
                                <select class="form-control" name="buy_currency">
                                    <option value="USD">USD</option>
                                </select>
                                <input
                                        type="number"
                                        class="form-control"
                                        placeholder="$ 10"
                                        name="buy"
                                />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="BuyCripto">Buy Now</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Sell</h4>
                </div>
                <div class="card-body">
                    <form
                            name="myform"
                            class="currency_validate trade-form row g-3"
                            action="buybtc.php"
                            method="post"
                    >
                        <div class="col-12">
                            <label class="form-label">Pay</label>
                            <div class="input-group">
                                <select class="form-control" name="method">
                                    <option value="bank">BTC</option>
                                </select>
                                <input
                                        type="number"
                                        name="sellval"
                                        class="form-control"
                                        placeholder="0.0214 BTC"
                                />
                            </div>
                        </div>

                        <p class="mb-0">
                            1 BTC ~ <?php
                            echo number_format($lastValue,2);?> USD
                            <a href="#">Expected rate <br />No extra fees</a>
                        </p>

                        <button type="submit" class="btn btn-primary btn-block" name="SellCripto">Sell Now</button>

                    </form>
                </div>
              </div>
            </div>

              <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="wallet-widget card">
                      <h5>Available Balance</h5>
                      <h2><span class="text-success"><?php
                              echo $criptoWallet;
                              ?></span> <sub>BTC</sub></h2>
                      <p>= <?php
                          echo number_format(floatval($criptoWallet) * floatval($lastValue),2);
                          ?><sub>USD</sub></p>
                  </div>
              </div>



    <!-- Buy Modal -->


    <!-- Buy Modal -->


    <!-- Transfer Modal -->


    <!-- Convert Modal -->


    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="../js/plugins/basic-table-init.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>

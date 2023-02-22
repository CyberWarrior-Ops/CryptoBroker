<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</html>
<?php

session_start();

$connection = mysqli_connect("localhost","root","","Cripto");

if(!isset($_SESSION['email'])){
    echo '
         <script>
        swal.fire({
            title: "Error!",
            text: "First Log In!",
            icon: "error",
        }).then(function() {
               window.location = "../login/signin.php";
        });
    </script> 
    ';
    session_destroy();
    die();
}
$mail = $_SESSION['email'];
$GetCriptos = "SELECT EW.ammount Etherium, bw.ammount Bitcoin, lt.ammount LiteCoin
from EtheriumWallet EW
join BitcoinWallet bw on EW.ID = bw.ID
join LiteCoinWallet lt on lt.ID = bw.ID
join login l on l.ID =lt.ID
WHERE l.email = '$mail'";

$result = mysqli_query($connection,$GetCriptos);

if($result){
    $row = mysqli_fetch_assoc($result);
    $EtW =10;
    $BTW =0;
    $LTW=0;
    $EtW = number_format($row['Etherium'], 6, '.', '');
    $BTW = number_format($row['Bitcoin'], 6, '.', '');
    $LTW = number_format($row['LiteCoin'], 6, '.', '');
}

$GetActualValue= "select value from Bitcoin order by ID desc limit 1";

$resultBtc = mysqli_query($connection,$GetActualValue);
if ($resultBtc) {
    $row = mysqli_fetch_assoc($resultBtc);
    $BTC = number_format($row['value'], 6, '.', '');
}

$resultEtc = mysqli_query($connection,"select value from Etherium order by ID desc limit 1");
if ($resultEtc) {
    $row = mysqli_fetch_assoc($resultEtc);
    $ETC = number_format($row['value'], 6, '.', '');
}

$resultLtc = mysqli_query($connection,"select value from LiteCoin order by ID desc limit 1");
if ($resultLtc) {
    $row = mysqli_fetch_assoc($resultLtc);
    $LTC = number_format($row['value'], 6, '.', '');
}

$Total = number_format(($BTW * $BTC) + ($LTW * $LTC) + ($EtW * $ETC),2,'.','');

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CriptoBroker</title>
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
                          <span class="thumb"
                            ><img src="../images/profile/2.png" alt=""
                          /></span>
                          <div class="user-info">
                            <h5>Jannatul Maowa</h5>
                            <span>Tendex.inc@gmail.com</span>
                          </div>
                        </div>
                      </div>

                      <div class="user-balance">
                        <div class="available">
                          <p>Available</p>
                          <span>0.00 BTC</span>
                        </div>
                        <div class="total">
                          <p>Total</p>
                          <span>0.00 USD</span>
                        </div>
                      </div>
                      <a href="../profile.html" class="dropdown-item">
                        <i class="bi bi-person"></i>Profile
                      </a>
                      <a href="../Wallet/wallet.php" class="dropdown-item">
                        <i class="bi bi-wallet"></i>Wallet
                      </a>
                      <a href="../User/settings-profile.php" class="dropdown-item">
                        <i class="bi bi-gear"></i> Setting
                      </a>
                      <a href="../settings-activity.html" class="dropdown-item">
                        <i class="bi bi-clock-history"></i> Activity
                      </a>
                      <a href="../reset/lock.html" class="dropdown-item">
                        <i class="bi bi-lock"></i>Lock
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
                href="#"
                data-toggle="tooltip"
                data-placement="right"
                title="Home"
              >
                <span><i class="bi bi-house"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../Wallet/Cyptos.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="bi bi-cash-stack"></i></span>
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
            <div class="col-xl-12">
              <div class="page-title-content">
                <p>
                  Welcome Back,
                  <strong> <?php
                    echo $_SESSION['FullName'];
                  ?>!</strong>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3">
              <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-6">
                  <div class="card welcome-profile">
                    <div class="card-body">
                      <img src="../images/profile/2.png" alt="" />
                      <h4>Hi, <?php
                        echo $_SESSION['FullName'];
                      ?>!</h4>
                      <p>
                        Welcome to your CryptoBroker Dashboard!
                      </p>

                      <ul>
                        <!--<li>
                          <a href="#">
                            <span class="verified"
                              ><i class="icofont-check"></i
                            ></span>
                            Verify account
                          </a>
                        </li>
                        <li>-->
                         <!-- <a href="#">
                            <span class="not-verified"
                              ><i class="icofont-close-line"></i
                            ></span>
                            Two-factor authentication (2FA)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="not-verified"
                              ><i class="icofont-close-line"></i
                            ></span>
                            Deposit money
                          </a>-->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xxl-8">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Balance</h4>
                      </div>
                      <div class="card-body">
                          <div class="row align-items-center">
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                  <div class="balance-chart">
                                      <div id="balance-chart"></div>
                                      <h4>Total Balance = $ <?php echo $Total?></h4>
                                  </div>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                  <ul class="balance-widget mt-4">
                                      <li>
                                          <div class="icon-title">
                                              <i class="cc BTC"></i>
                                              <span>Bitcoin</span>
                                          </div>
                                          <div class="text-end">
                                              <h5><?php echo $BTW?> BTC</h5>
                                              <span>Price on Market: <?php echo number_format($BTC,2,'.',',')?> USD</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="icon-title">
                                              <i class="cc ETH"></i>
                                              <span>Ethereum</span>
                                          </div>
                                          <div class="text-end">
                                              <h5><?php echo $EtW?> ETH</h5>
                                              <span>Price on Market: <?php echo number_format($ETC,2,'.',',')?> USD</span>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="icon-title">
                                              <i class="cc LTC"></i>
                                              <span>LiteCoin</span>
                                          </div>
                                          <div class="text-end">
                                              <h5><?php echo $LTW?> LTC</h5>
                                              <span>Price on Market: <?php echo number_format($LTC,2,'.',',')?> USD</span>
                                          </div>
                                      </li>
                                      <li>
                                          <!--<div class="icon-title">
                                              <i class="cc XMR"></i>
                                              <span>Monero</span>
                                          </div>
                                          <div class="text-end">
                                              <h5>0.000242 XMR</h5>
                                              <span>0.125 USD</span>
                                          </div>-->
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>



                    <!-- <div class="col-xxl-6 col-xl-4 col-lg-6">
                                    <div class="price-widget">
                                        <a href="price-details.html">
                                            <div class="price-content">
                                                <div class="icon-title">
                                                    <i class="cc USDT"></i>
                                                    <span>Tether</span>
                                                </div>
                                                <h5>$ 11,785.10</h5>
                                            </div>
                                            <div id="chart4"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-4 col-lg-6">
                                    <div class="price-widget">
                                        <a href="price-details.html">
                                            <div class="price-content">
                                                <div class="icon-title">
                                                    <i class="cc USDT"></i>
                                                    <span>Tether</span>
                                                </div>
                                                <h5>$ 11,785.10</h5>
                                            </div>
                                            <div id="chart5"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-4 col-lg-6">
                                    <div class="price-widget">
                                        <a href="price-details.html">
                                            <div class="price-content">
                                                <div class="icon-title">
                                                    <i class="cc USDT"></i>
                                                    <span>Tether</span>
                                                </div>
                                                <h5>$ 11,785.10</h5>
                                            </div>
                                            <div id="chart6"></div>
                                        </a>
                                    </div>
                                </div> -->
                  </div>
                </div>



    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../vendor/apexchart/apexcharts.min.js"></script>
    <script src="../js/plugins/apex-price.js"></script>

    <script src="../vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="../js/plugins/basic-table-init.js"></script>

    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../js/plugins/perfect-scrollbar-init.js"></script>

    <script src="../js/dashboard.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>



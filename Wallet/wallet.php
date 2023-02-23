<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tendex</title>
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
      </div>

      <div class="sidebar">
        <div class="brand-logo">
          <a href="../index.php"
            ><img src="../images/logoi.png" alt="" width="30" />
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
                <span><i class="bi bi-globe2"></i></span>
              </a>
            </li>
            <li>
              <a
                href="wallet.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Wallet"
              >
                <span><i class="bi bi-wallet2"></i></span>
              </a>
            </li>
            <li>
              <a
                href="settings-profile.html"
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
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Estimated Balance</h5>
                <h2><span class="text-primary">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Available Balance</h5>
                <h2><span class="text-success">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Pending Balance</h5>
                <h2><span class="text-warning">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Locked Balance</h5>
                <h2><span class="text-danger">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Wallet Addresses</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Coin Name</th>
                          <th>Address</th>
                          <th>QR</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="../images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="../images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="../images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="../images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Balance</h4>
                </div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                      <div class="balance-chart">
                        <div id="balance-chart"></div>
                        <h4>Total Balance = $ 5360</h4>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                      <ul class="balance-widget">
                        <li>
                          <div class="icon-title">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </div>
                          <div class="text-right">
                            <h5>0.000242 BTC</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Tether</span>
                          </div>
                          <div class="text-right">
                            <h5>0.000242 USDT</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XTZ"></i>
                            <span>Tezos</span>
                          </div>
                          <div class="text-right">
                            <h5>0.000242 XTZ</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XMR"></i>
                            <span>Monero</span>
                          </div>
                          <div class="text-right">
                            <h5>0.000242 XMR</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XMR"></i>
                            <span>Monero</span>
                          </div>
                          <div class="text-right">
                            <h5>0.000242 XMR</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Balance</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Asset</th>
                          <th>Balance</th>
                          <th>Available</th>
                          <th>Locked</th>
                          <th>% Gain</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="bi bi-arrow-up-short ms-2"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="bi bi-arrow-up-short ms-2"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="bi bi-arrow-up-short ms-2"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="bi bi-arrow-up-short ms-2"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Deposit</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Date</th>
                          <th>Hash</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Withdrawals</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Fee</th>
                          <th>Date</th>
                          <th>Hash</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>0.02%</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>0.02%</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>0.02%</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../vendor/apexchart/apexcharts.min.js"></script>
    <script src="../js/plugins/apex-price.js"></script>

    <script src="../vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="../js/plugins/basic-table-init.js"></script>

    <script src="../js/dashboard.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>

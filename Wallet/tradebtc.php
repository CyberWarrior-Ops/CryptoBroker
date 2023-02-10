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

$BitcoinActualData = "Select value from Bitcoin Order by ID desc limit 1";

$BitcoinActualDataResult = mysqli_query($connection,$BitcoinActualData);
if (mysqli_num_rows($BitcoinActualDataResult) > 0) {
    while($row = mysqli_fetch_assoc($BitcoinActualDataResult)) {
        $BitcoinActualDataValue = $row["value"];
    }
} else {
    echo "0 results";
}

function Buy(){
    global $BitcoinActualDataValue;
    global $connection;
    global $ID;

    $ID = $_SESSION['id'];
    $buy = $_POST['buy'];

    $value = $buy / $BitcoinActualDataValue;

    $insert = "UPDATE BitcoinWallet SET ammount='$value' where ID = $ID";
    $result = mysqli_query($connection,$insert);

    if($result){
        echo '
            <script>
                alert("Buy Succesfull");
                window.location = "tradebtc.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Buy Failed");
                window.location = "tradebtc.php";
            </script>
        ';
    }
}

if (isset($_POST['BuyCripto'])) {
    Buy();
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
                    <form action="#">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search Here"
                        />
                        <span class="input-group-text"
                          ><i class="icofont-search"></i
                        ></span>
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
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="bi bi-check"></i
                            ></span>
                            <div>
                              <p>Account created successfully</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon fail"
                              ><i class="bi bi-x"></i
                            ></span>
                            <div>
                              <p>2FA verification failed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="bi bi-check"></i
                            ></span>
                            <div>
                              <p>Device confirmation completed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon pending"
                              ><i class="bi bi-exclamation-triangle"></i
                            ></span>
                            <div>
                              <p>Phone verification pending</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>

                        <a href="./settings-activity.html"
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
                      <a href="profile.html" class="dropdown-item">
                        <i class="bi bi-person"></i>Profile
                      </a>
                      <a href="wallet.php" class="dropdown-item">
                        <i class="bi bi-wallet"></i>Wallet
                      </a>
                      <a href="settings-profile.html" class="dropdown-item">
                        <i class="bi bi-gear"></i> Setting
                      </a>
                      <a href="settings-activity.html" class="dropdown-item">
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
                href="trade.html"
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
                                    <option value="Euro">Euro</option>
                                </select>
                                <input
                                        type="number"
                                        class="form-control"
                                        placeholder="0.0214 BTC"
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
                  >
                    <div class="col-12">
                      <label class="form-label">Pay</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">USD</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                          name="buy"
                        />
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Receive</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="BTC">BTC</option>
                          <option value="ETH">ETH</option>
                            <option value="LTC">LiteCoin</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <p class="mb-0">
                      1 USD ~ 0.000088 BTC
                      <a href="#">Expected rate <br />No extra fees</a>
                    </p>

                    <button
                      type="button"
                      class="btn btn-primary btn-block"
                      data-toggle="modal"
                      data-target="#SellModal"
                    >
                      Sell Now
                    </button>
                  </form>
                </div>
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

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
$GetCriptos = "SELECT EW.ammount Etherium, bw.ammount Bitcoin, lt.ammount LiteCoin
from EtheriumWallet EW
join BitcoinWallet bw on EW.ID = bw.ID
join LiteCoinWallet lt on lt.ID = bw.ID
join login l on l.ID =lt.ID
WHERE l.email = 'admin@gmail.com'";

$result = mysqli_query($connection,$GetCriptos);

if($result){
    $row = mysqli_fetch_assoc($result);
    $EtW =10;
    $BTW =0;
    $LTW=0;
    $EtW = $row['Etherium'];
    $BTW = $row['Bitcoin'];
    $LTW = $row['LiteCoin'];
}
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
                      <a href="../Wallet/wallet.html" class="dropdown-item">
                        <i class="bi bi-wallet"></i>Wallet
                      </a>
                      <a href="../settings-profile.html" class="dropdown-item">
                        <i class="bi bi-gear"></i> Setting
                      </a>
                      <a href="../settings-activity.html" class="dropdown-item">
                        <i class="bi bi-clock-history"></i> Activity
                      </a>
                      <a href="../lock.html" class="dropdown-item">
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
                href="dashboard.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Home"
              >
                <span><i class="bi bi-house"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../Wallet/trade.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="bi bi-globe2"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../Wallet/wallet.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Wallet"
              >
                <span><i class="bi bi-wallet2"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../settings-profile.html"
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
                        Looks like you are not verified yet. Verify yourself to
                        use the full potential of CriptoBroker.
                      </p>

                      <ul>
                        <li>
                          <a href="#">
                            <span class="verified"
                              ><i class="icofont-check"></i
                            ></span>
                            Verify account
                          </a>
                        </li>
                        <li>
                          <a href="#">
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
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-12 col-xl-12 col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Quick Trade</h4>
                    </div>
                    <div class="card-body">
                      <form
                        name="myform"
                        class="currency_validate trade-form row g-3"
                      >
                        <div class="col-12">
                          <label class="form-label">You Send</label>
                          <div class="input-group">
                            <select class="form-select" name="method">
                              <option value="bank">USD</option>
                              <option value="master">Euro</option>
                            </select>
                            <input
                              type="text"
                              name="currency_amount"
                              class="form-control"
                              placeholder="0.0214 BTC"
                            />
                          </div>
                        </div>

                        <div class="col-12">
                          <label class="form-label">You get</label>
                          <div class="input-group">
                            <select class="form-select" name="method">
                              <option value="bank">BTC</option>
                              <option value="master">ETH</option>
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
                          type="submit"
                          name="submit"
                          class="btn btn-primary btn-block"
                        >
                          Exchange Now
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-12 col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Position Valuation</h4>
                    </div>
                    <div class="card-body">
                      <ul class="balance-widget position-value">
                        <li>
                          <h5>Opening Cost</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span>Original cost of all open positions.</span>
                          </div>
                        </li>
                        <li>
                          <h5>Current Valuation</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span>Paper valuation of all open positions.</span>
                          </div>
                        </li>
                        <li>
                          <h5>Profit</h5>
                          <div class="text-end">
                            <h5>$0.0000 (0,00%)</h5>
                            <span>Paper profit of all open positions..</span>
                          </div>
                        </li>
                        <li>
                          <h5>Loss</h5>
                          <div class="text-end">
                            <h5>$0.0000 (0,00%)</h5>
                            <span>Paper loss of all open positions.</span>
                          </div>
                        </li>
                        <li>
                          <h5>Fees</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span>Current Fee</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-12 col-xl-12 col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="invite-content">
                        <h4>Invite a friend and get $30</h4>
                        <p>
                          You will receive up to $30 when they： 1.Buy Crypto 2.
                          Deposit 3. Finish Trading Tasks <br /><a href="#"
                            >Learn more</a
                          >
                        </p>

                        <div class="copy-link">
                          <form action="#">
                            <div class="input-group">
                              <input
                                type="text"
                                class="form-control"
                                id="myInput"
                                value="https://www.Tendex.io/join/12345"
                              />
                              <span
                                onclick="copy()"
                                class="input-group-text c-pointer"
                                >Copy</span
                              >
                            </div>
                          </form>
                        </div>

                        <!-- <div class="social-share-link">
                                        <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                        <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                        <a href="#"><span><i class="icofont-whatsapp"></i></span></a>
                                        <a href="#"><span><i class="icofont-telegram"></i></span></a>
                                    </div> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-xxl-12 col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="invite-content">
                                        <h4>Get free BTC every day</h4>
                                        <p>Earn free bitcoins in rewards by completing a learning mission daily or
                                            inviting
                                            friends to Tendex. <a href="#">Learn more</a>

                                        </p>

                                        <a href="#" class="btn btn-primary">Invite friends to join</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
              </div>
            </div>

            <div class="col-xl-9">
              <div class="row">
                <div class="col-xxl-8 col-xl-8">
                  <div class="card home-chart">
                    <div class="card-header">
                      <h4 class="card-title home-chart">Analytics</h4>
                      <select
                        class="form-select d-none"
                        name="report-type"
                        id="report-select"
                      >
                        <option value="1">Bitcoin</option>
                        <option value="2">Litecoin</option>
                      </select>
                    </div>
                    <div class="card-body">
                      <div class="home-chart-height">
                        <div class="row">
                          <div
                            class="
                              col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6
                            "
                          >
                            <div class="chart-price-value">
                              <span>24hr Volume</span>
                              <h5>$236,368.00</h5>
                            </div>
                          </div>
                          <div
                            class="
                              col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6
                            "
                          >
                            <div class="chart-price-value">
                              <span>Marketcap</span>
                              <h5>$236.025B USD</h5>
                            </div>
                          </div>
                          <div
                            class="
                              col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6
                            "
                          >
                            <div class="chart-price-value">
                              <span>24hr Volume</span>
                              <h5>56.3 BTC</h5>
                            </div>
                          </div>
                          <div
                            class="
                              col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6
                            "
                          >
                            <div class="chart-price-value">
                              <span>All Time High</span>
                              <h5>$236,368.00</h5>
                            </div>
                          </div>
                        </div>
                        <div id="chartx"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-4 col-xl-4">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Trade Balances</h4>
                    </div>
                    <div class="card-body">
                      <ul class="balance-widget trade-balance">
                        <li>
                          <h5>Trade Balance</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span>Total margin currency balance.</span>
                          </div>
                        </li>
                        <li>
                          <h5>Equity</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span
                              >Trade balance combined with unrealized
                              profit/loss</span>
                          </div>
                        </li>
                        <li>
                          <h5>Used Margin</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span
                              >Total margin amount used in open positions.</span>
                          </div>
                        </li>
                        <li>
                          <h5>Free Margin</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span
                              >Usable margin balance. Equal to equity
                              minus.</span>
                          </div>
                        </li>
                        <li>
                          <h5>Margin Level</h5>
                          <div class="text-end">
                            <h5>$0.0000</h5>
                            <span
                              >Percentage ratio of equity to used margin.</span>
                          </div>
                        </li>
                      </ul>
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
                            <h4>Total Balance = $ 5360</h4>
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
                                <h5>0.000242 BTC</h5>
                                <span>0.125 USD</span>
                              </div>
                            </li>
                            <li>
                              <div class="icon-title">
                                <i class="cc USDT"></i>
                                <span>Tether</span>
                              </div>
                              <div class="text-end">
                                <h5>0.000242 USDT</h5>
                                <span>0.125 USD</span>
                              </div>
                            </li>
                            <li>
                              <div class="icon-title">
                                <i class="cc XTZ"></i>
                                <span>Tezos</span>
                              </div>
                              <div class="text-end">
                                <h5>0.000242 XTZ</h5>
                                <span>0.125 USD</span>
                              </div>
                            </li>
                            <li>
                              <div class="icon-title">
                                <i class="cc XMR"></i>
                                <span>Monero</span>
                              </div>
                              <div class="text-end">
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
                <div class="col-xxl-4 col-xl-12">
                  <div class="row">
                    <div class="col-xxl-12 col-xl-4 col-lg-6">
                      <div class="price-widget">
                        <a href="../price-details.html">
                          <div class="price-content">
                            <div class="icon-title">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                            <h5>$ <?php
                                echo $BTW;?></h5>
                          </div>
                          <div id="chart"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-xl-4 col-lg-6">
                      <div class="price-widget">
                        <a href="../price-details.html">
                          <div class="price-content">
                            <div class="icon-title">
                              <i class="cc ETH"></i>
                              <span>Ethereum</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                          </div>
                          <div id="chart2"></div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-xl-4 col-lg-6">
                      <div class="price-widget">
                        <a href="../price-details.html">
                          <div class="price-content">
                            <div class="icon-title">
                              <i class="cc USDT"></i>
                              <span>Tether</span>
                            </div>
                            <h5>$ 11,785.10</h5>
                          </div>
                          <div id="chart3"></div>
                        </a>
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

                <div class="col-xxl-12 col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Transaction</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive transaction-table">
                        <table class="table table-striped responsive-table">
                          <thead>
                            <tr>
                              <th>Ledger ID</th>
                              <th>Date</th>
                              <th>Type</th>
                              <th>Currency</th>
                              <th>Amount</th>
                              <th>Fee</th>
                              <th>Balance</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>523640</td>
                              <td>January 15</td>
                              <td>
                                <span class="danger-arrow"
                                  ><i class="icofont-arrow-down"></i> Sell</span
                                >
                              </td>
                              <td class="coin-name">
                                <i class="cc BTC"></i> Bitcoin
                              </td>
                              <td class="text-danger">-0.000242 BTC</td>
                              <td>0.02%</td>
                              <td><strong>0.25484 BTC</strong></td>
                            </tr>
                            <tr>
                              <td>523640</td>
                              <td>January 15</td>
                              <td>
                                <span class="success-arrow"
                                  ><i class="icofont-arrow-up"></i>Buy</span
                                >
                              </td>
                              <td class="coin-name">
                                <i class="cc LTC"></i> Litecoin
                              </td>
                              <td class="text-success">-0.000242 BTC</td>
                              <td>0.02%</td>
                              <td><strong> 0.25484 LTC</strong></td>
                            </tr>
                            <tr>
                              <td>523640</td>
                              <td>January 15</td>
                              <td>
                                <span class="success-arrow"
                                  ><i class="icofont-arrow-up"></i>Buy</span
                                >
                              </td>
                              <td class="coin-name">
                                <i class="cc XRP"></i> Ripple
                              </td>
                              <td class="text-success">-0.000242 BTC</td>
                              <td>0.02%</td>
                              <td><strong> 0.25484 LTC</strong></td>
                            </tr>
                            <tr>
                              <td>523640</td>
                              <td>January 15</td>
                              <td>
                                <span class="success-arrow"
                                  ><i class="icofont-arrow-up"></i>Buy</span
                                >
                              </td>
                              <td class="coin-name">
                                <i class="cc DASH"></i> Dash
                              </td>
                              <td class="text-success">-0.000242 BTC</td>
                              <td>0.02%</td>
                              <td><strong> 0.25484 LTC</strong></td>
                            </tr>
                            <tr>
                              <td>523640</td>
                              <td>January 15</td>
                              <td>
                                <span class="success-arrow"
                                  ><i class="icofont-arrow-up"></i>Buy</span
                                >
                              </td>
                              <td class="coin-name">
                                <i class="cc DASH"></i> Dash
                              </td>
                              <td class="text-success">-0.000242 BTC</td>
                              <td>0.02%</td>
                              <td><strong> 0.25484 LTC</strong></td>
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



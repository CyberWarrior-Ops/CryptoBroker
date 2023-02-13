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
                                    <a href="wallet.html" class="dropdown-item">
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

    <style>
        .crypto-box {
            width: 200px;
            height: 150px;
            border: 1px solid lightgray;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            text-align: center;
            transition: transform 0.2s ease-in-out;
        }

        .crypto-box:hover {
            transform: translateY(-5px);
        }

        .icon {
            font-size: 40px;
            margin-top: 20px;
            color: lightgray;
        }

        .bitcoin .icon {
            color: goldenrod;
        }

        .litecoin .icon {
            color: gray;
        }

        h3 {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: gray;
        }

        h2 {
            font-size: 28px;
            font-weight: bold;
            color: gray;
            margin-bottom: 40px;
        }


    </style>

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <h2>Which Crypto Currency do you wish to buy?</h2>
        <div style="display: flex; justify-content: center;">
            <div class="crypto-box bitcoin" style="background: #F7931A">
                <i class=""></i>
                <h3 style="color: white">Bitcoin</h3>
            </div>
            <div class="crypto-box litecoin" style="background: black">
                <i class="water"></i>
                <h3 style="color: white">Etherium</h3>
            </div>
            <div class="crypto-box litecoin" style="background: #00aeff">
                <i class=""></i>
                <h3 style="color: white">Litecoin</h3>
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

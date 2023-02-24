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
                        href="Cyptos.php"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Trade"
                    >
                        <span><i class="bi bi-cash"></i></span>
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
            <button class="crypto-box bitcoin" style="background: #F7931A; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 16px;" onclick="window.location.href='tradebtc.php'">
                <i class=""></i>
                <h3 style="color: white">Bitcoin</h3>
                <img src="../images/btc.png" width="70px" height="auto">
            </button>


            <button class="crypto-box etherium" style="background: black; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 16px;" onclick="window.location.href='tradeetc.php'">
                <i class="water"></i>
                <h3 style="color: white">Etherium</h3>
                <img src="../images/eth.png" width="70px" height="auto">
            </button>

            <button class="crypto-box litecoin" style="background: #00aeff; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 16px;" onclick="window.location.href='tradeltc.php'">
                <i class=""></i>
                <h3 style="color: white">Litecoin</h3>
                <img src="../images/liteCoin.png" width="70px" height="auto">
            </button>

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

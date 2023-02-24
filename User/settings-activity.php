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

                        <a href="settings-activity.php"
                          >More <i class="icofont-simple-right"></i
                        ></a>
                      </div>
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
                href="dashboard.php"
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
                <span><i class="bi bi-cash"></i></span>
              </a>
            </li>
            <li>
              <a
                href="settings-profile.php"
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
        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="page-title">
                <h4>Activity</h4>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-activity.html">Activity</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Third-Party Applications</h4>
                        </div>
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon-circle bg-warning text-white"
                              ><i class="icofont-question-square"></i
                            ></span>
                            <div>
                              <h5 class="mb-0">
                                You haven't authorized any applications yet.
                              </h5>
                              <p>
                                After connecting an application with your
                                account, you can manage or revoke its access
                                here.
                              </p>
                              <a class="btn btn-primary">Authorize now</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <!--<div class="card-header px-0">
                          <h4 class="card-title">Web Sessions</h4>

                          <small
                            >These sessions are currently signed in to your
                            account. Sign out all other sessions</small
                          >
                        </div>
                        <div class="card-body px-0">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Signed In</th>
                                  <th>Browser</th>
                                  <th>IP Address</th>
                                  <th>Near</th>
                                  <th>Current</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1 day ago</td>
                                  <td>Chrome (Windows)</td>
                                  <td>250.364.239.254</td>
                                  <td>Bangladesh, Dhaka</td>
                                  <td>
                                    <span
                                      ><i class="icofont-check-alt"></i
                                    ></span>
                                    <span
                                      ><i class="icofont-close-line"></i
                                    ></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>1 day ago</td>
                                  <td>Chrome (Windows)</td>
                                  <td>250.364.239.254</td>
                                  <td>Bangladesh, Dhaka</td>
                                  <td>
                                    <span
                                      ><i class="icofont-check-alt"></i
                                    ></span>
                                    <span
                                      ><i class="icofont-close-line"></i
                                    ></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>1 day ago</td>
                                  <td>Chrome (Windows)</td>
                                  <td>250.364.239.254</td>
                                  <td>Bangladesh, Dhaka</td>
                                  <td>
                                    <span
                                      ><i class="icofont-check-alt"></i
                                    ></span>
                                    <span
                                      ><i class="icofont-close-line"></i
                                    ></span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Confirmed Devices</h4>

                          <small
                            >These devices are currently allowed to access your
                            account. Remove all other devices</small
                          >
                        </div>
                        <div class="card-body px-0">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Confirmed</th>
                                <th>Browser</th>
                                <th>IP Address</th>
                                <th>Near</th>
                                <th>Current</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1 day ago</td>
                                <td>Chrome (Windows)</td>
                                <td>250.364.239.254</td>
                                <td>Bangladesh, Dhaka</td>
                                <td>
                                  <span><i class="icofont-check-alt"></i></span>
                                  <span
                                    ><i class="icofont-close-line"></i
                                  ></span>
                                </td>
                              </tr>
                              <tr>
                                <td>8 days ago</td>
                                <td>Chrome (Windows)</td>
                                <td>250.364.239.254</td>
                                <td>Bangladesh, Dhaka</td>

                                <td>
                                  <span><i class="icofont-check-alt"></i></span>
                                  <span
                                    ><i class="icofont-close-line"></i
                                  ></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15 days ago</td>
                                <td>Chrome (Windows)</td>
                                <td>250.364.239.254</td>
                                <td>Bangladesh, Dhaka</td>

                                <td>
                                  <span><i class="icofont-check-alt"></i></span>
                                  <span
                                    ><i class="icofont-close-line"></i
                                  ></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
-->
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Account Activity</h4>

                          <small>Recent activity on your account.</small>
                        </div>
                        <div class="card-body px-0">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Action</th>
                                <th>IP Address</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
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
                              $sql = "SELECT ID,text,type, date FROM logsUser";
                              $result = $conn->query($sql);

                              // Mostrar los registros en el formato deseado
                              if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                                      echo '<tr>
                                <td>'.$row["type"].'</td>
                                <td>157.119.239.254</td>
                                <td>'.$row['date'].'</td>
                              </tr>';
                                  }
                              } else {
                                  echo "No se encontraron registros.";
                              }
                              $conn->close();
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Close Account</h4>
                        </div>
                        <div class="card-body px-0">
                          <p>
                            Withdraw funds and close your Tendex account -
                            <span class="text-danger"
                              >this cannot be undone</span
                            >
                          </p>
                          <a href="#" class="btn btn-danger">Close Account</a>
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
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>

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
                <h4>Privacy</h4>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-activity.php">Activity</a>
                    <a href="settings-privacy.html">Privacy</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Privacy options</h4>
                        </div>
                        <div class="card-body px-0">
                          <h5>Instant sends</h5>
                          <p class="mb-1">
                            Allow other users to see that you use Tendex and
                            send you crypto instantly
                          </p>
                          <div class="form-check form-switch mt-3">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="s8"
                              checked
                            />
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Your Tendex account</h4>
                        </div>
                        <div class="card-body px-0">
                          <p>
                            You have a number of rights over your personal data.
                            For more detailed information on these choices,
                            please read our full
                            <a href="#">Privacy Policy</a> and our
                            <a href="#">Cookie Policy</a>.
                          </p>

                          <hr class="dropdown-divider my-4" />

                          <div class="privacy-content">
                            <h5>Request Data</h5>
                            <p>
                              Request a copy of my personal data held by Tendex.
                            </p>
                            <a href="#" class="btn btn-outline-primary"
                              >Request data</a
                            >
                          </div>

                          <hr class="dropdown-divider my-4" />

                          <div class="privacy-content">
                            <h5>Request Deletion</h5>
                            <p>Request deletion of some or all of my data</p>
                            <a href="#" class="btn btn-outline-primary"
                              >Request deletion</a
                            >
                          </div>

                          <hr class="dropdown-divider my-4" />

                          <div class="privacy-content">
                            <h5>Request export</h5>
                            <p>
                              Request export of my data in a machine-readable
                              form.
                            </p>
                            <a href="#" class="btn btn-outline-primary"
                              >Request data export</a
                            >
                          </div>

                          <hr class="dropdown-divider my-4" />

                          <div class="privacy-content">
                            <h5>Request Correction</h5>
                            <p>
                              Request to correct, modify, or complete my data.
                            </p>
                            <a href="#" class="btn btn-outline-primary"
                              >Request correction</a
                            >
                          </div>

                          <hr class="dropdown-divider my-4" />

                          <div class="privacy-content">
                            <h5>
                              Request Restriction of Processing (EU and Japan
                              Residents only)
                            </h5>
                            <p>
                              Request that Tendex stops processing my personal
                              data.
                            </p>
                            <a href="#" class="btn btn-outline-primary"
                              >Request restriction</a
                            >
                          </div>

                          <hr class="dropdown-divider my-4" />

                          <div class="privacy-content">
                            <h5>Manage Cookies</h5>
                            <p>Manage your cookie preferences.</p>
                            <a href="#" class="btn btn-outline-primary"
                              >Request cookies</a
                            >
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
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>

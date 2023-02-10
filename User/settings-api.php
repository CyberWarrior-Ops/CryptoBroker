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

                        <a href="settings-activity.php"
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
                      <a href="profile.uknow" class="dropdown-item">
                        <i class="bi bi-person"></i>Profile
                      </a>
                      <a href="../Wallet/wallet.php" class="dropdown-item">
                        <i class="bi bi-wallet"></i>Wallet
                      </a>
                      <a href="settings-profile.php" class="dropdown-item">
                        <i class="bi bi-gear"></i> Setting
                      </a>
                      <a href="settings-activity.php" class="dropdown-item">
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
                href="../Wallet/tradebtc.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="bi bi-globe2"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../Wallet/wallet.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Wallet"
              >
                <span><i class="bi bi-wallet2"></i></span>
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
                <h4>API</h4>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-application.php">Application</a>
                    <a href="settings-security.php">Security</a>
                    <a href="settings-activity.php">Activity</a>
                    <a href="settings-privacy.php">Privacy</a>
                    <a href="settings-payment-method.php">Payment Method</a>
                    <a href="settings-api.html">API</a>
                    <a href="settings-fees.html">Fees</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Create API Key</h4>
                        </div>
                        <div class="card-body px-0">
                          <form action="#">
                            <div class="row g-3">
                              <div class="col-xl-6 col-md-6">
                                <label class="form-label"
                                  >Generate New Key</label
                                >
                                <input
                                  type="text"
                                  name="usd_amount"
                                  class="form-control"
                                  placeholder="Enter Passphrase"
                                />
                              </div>
                              <div class="col-xl-6 col-md-6">
                                <label class="form-label"
                                  >Confirm Passphrase</label
                                >
                                <input
                                  type="text"
                                  name="usd_amount"
                                  class="form-control"
                                  placeholder="Re-enter passphrase"
                                />
                              </div>
                              <div class="col-auto">
                                <button class="btn btn-primary">
                                  Create API Keys
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Your API Keys</h4>
                        </div>
                        <div class="card-body px-0">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Key</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        checked
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
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
      </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>

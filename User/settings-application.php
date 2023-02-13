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
                href="../Wallet/tradebtc.php"
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
                <h4>Application</h4>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-application.html">Application</a>
                    <a href="settings-security.php">Security</a>
                    <a href="settings-activity.php">Activity</a>
                    <a href="settings-privacy.php">Privacy</a>
                    <a href="settings-payment-method.php">Payment Method</a>
                    <a href="settings-api.php">API</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Preperences</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <label class="form-label"
                                  >Language Default</label
                                >
                                <select class="form-select">
                                  <option value="">English</option>
                                  <option value="">Bangla</option>
                                  <option value="">Hindi</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label"
                                  >Currency Default</label
                                >
                                <select class="form-select">
                                  <option value="">USD</option>
                                  <option value="">CAD</option>
                                  <option value="">Euro</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label">Theme Default</label>
                                <select class="form-select">
                                  <option value="">Light</option>
                                  <option value="">Dark</option>
                                  <option value="">Blue</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label">Time Zone</label>
                                <select class="form-select">
                                  <option>
                                    (GMT-12:00) International Date Line West
                                  </option>
                                  <option>
                                    (GMT-11:00) Midway Island, Samoa
                                  </option>
                                  <option>(GMT-10:00) Hawaii</option>
                                  <option>(GMT-09:00) Alaska</option>
                                  <option>
                                    (GMT-08:00) Pacific Time (US & Canada)
                                  </option>
                                  <option>
                                    (GMT-08:00) Tijuana, Baja California
                                  </option>
                                  <option>GMT-07:00) Arizona</option>
                                  <option>
                                    (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                  </option>
                                  <option>
                                    (GMT-07:00) Mountain Time (US & Canada)
                                  </option>
                                  <option>GMT-06:00) Central America</option>
                                  <option>
                                    (GMT-06:00) Central Time (US & Canada)
                                  </option>
                                  <option>
                                    (GMT-06:00) Guadalajara, Mexico City,
                                    Monterrey
                                  </option>
                                  <option>GMT-06:00) Saskatchewan</option>
                                  <option>
                                    GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                  </option>
                                  <option>
                                    (GMT-05:00) Eastern Time (US & Canada)
                                  </option>
                                  <option>(GMT-05:00) Indiana (East)</option>
                                  <option>
                                    (GMT-04:00) Atlantic Time (Canada)
                                  </option>
                                  <option>GMT-04:00) Caracas, La Paz</option>
                                  <option>GMT-04:00) Manaus</option>
                                  <option>(GMT-04:00) Santiago</option>
                                  <option>">(GMT-03:30) Newfoundland</option>
                                  <option>(GMT-03:00) Brasilia</option>
                                  <option>
                                    GMT-03:00) Buenos Aires, Georgetown
                                  </option>
                                  <option>(GMT-03:00) Greenland</option>
                                  <option>(GMT-03:00) Montevideo</option>
                                  <option>(GMT-02:00) Mid-Atlantic</option>
                                  <option>GMT-01:00) Cape Verde Is.</option>
                                  <option>(GMT-01:00) Azores</option>
                                  <option>
                                    MT+00:00) Casablanca, Monrovia, Reykjavik
                                  </option>
                                  <option>
                                    GMT+00:00) Greenwich Mean Time : Dublin,
                                    Edinburgh, Lisbon, London
                                  </option>
                                  <option>
                                    GMT+01:00) Amsterdam, Berlin, Bern, Rome,
                                    Stockholm, Vienna
                                  </option>
                                  <option>
                                    GMT+01:00) Belgrade, Bratislava, Budapest,
                                    Ljubljana, Prague
                                  </option>
                                  <option>
                                    GMT+01:00) Brussels, Copenhagen, Madrid,
                                    Paris
                                  </option>
                                  <option>
                                    GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                                  </option>
                                  <option>
                                    GMT+01:00) West Central Africa
                                  </option>
                                  <option>GMT+02:00) Amman</option>
                                  <option>
                                    GMT+02:00) Athens, Bucharest, Istanbul
                                  </option>
                                  <option>GMT+02:00) Beirut</option>
                                  <option>GMT+02:00) Cairo</option>
                                  <option>MT+02:00) Harare, Pretoria</option>
                                  <option>
                                    GMT+02:00) Helsinki, Kyiv, Riga, Sofia,
                                    Tallinn, Vilnius
                                  </option>
                                  <option>GMT+02:00) Jerusalem</option>
                                  <option>GMT+02:00) Minsk</option>
                                  <option>GMT+02:00) Windhoek</option>
                                  <option>
                                    MT+03:00) Kuwait, Riyadh, Baghdad
                                  </option>
                                  <option>
                                    GMT+03:00) Moscow, St. Petersburg, Volgograd
                                  </option>
                                  <option>MT+03:00) Nairobi</option>
                                  <option>MT+03:00) Tbilisi</option>
                                  <option>>(GMT+03:30) Tehran</option>
                                  <option>MT+04:00) Abu Dhabi, Muscat</option>
                                  <option>GMT+04:00) Baku</option>
                                  <option>GMT+04:00) Yerevan</option>
                                  <option>(GMT+04:30) Kabul</option>
                                  <option>GMT+05:00) Yekaterinburg</option>
                                  <option>
                                    MT+05:00) Islamabad, Karachi, Tashkent
                                  </option>
                                  <option>
                                    (GMT+05:30) Sri Jayawardenapura
                                  </option>
                                  <option>
                                    (GMT+05:30) Chennai, Kolkata, Mumbai, New
                                    Delhi
                                  </option>
                                  <option>>(GMT+05:45) Kathmandu</option>
                                  <option>
                                    GMT+06:00) Almaty, Novosibirsk
                                  </option>
                                  <option>MT+06:00) Astana, Dhaka</option>
                                  <option>(GMT+06:30) Yangon (Rangoon)</option>
                                  <option>
                                    MT+07:00) Bangkok, Hanoi, Jakarta
                                  </option>
                                  <option>GMT+07:00) Krasnoyarsk</option>
                                  <option>
                                    MT+08:00) Beijing, Chongqing, Hong Kong,
                                    Urumqi
                                  </option>
                                  <option>
                                    MT+08:00) Kuala Lumpur, Singapore
                                  </option>
                                  <option>
                                    MT+08:00) Irkutsk, Ulaan Bataar
                                  </option>
                                  <option>MT+08:00) Perth</option>
                                  <option>MT+08:00) Taipei</option>
                                  <option>
                                    MT+09:00) Osaka, Sapporo, Tokyo
                                  </option>
                                  <option>MT+09:00) Seoul</option>
                                  <option>GMT+09:00) Yakutsk</option>
                                  <option>(GMT+09:30) Adelaide</option>
                                  <option>(GMT+09:30) Darwin</option>
                                  <option>GMT+10:00) Brisbane</option>
                                  <option>
                                    (GMT+10:00) Canberra, Melbourne, Sydney
                                  </option>
                                  <option>(GMT+10:00) Hobart</option>
                                  <option>GMT+10:00) Guam, Port Moresby</option>
                                  <option>(GMT+10:00) Vladivostok</option>
                                  <option>
                                    (GMT+11:00) Magadan, Solomon Is., New
                                    Caledonia
                                  </option>
                                  <option>
                                    (GMT+12:00) Auckland, Wellington
                                  </option>
                                  <option>
                                    GMT+12:00) Fiji, Kamchatka, Marshall Is.
                                  </option>
                                  <option>GMT+13:00) Nuku'alofa</option>
                                </select>
                              </div>

                              <div class="col-12">
                                <button
                                  class="btn btn-success pl-5 pr-5 waves-effect"
                                >
                                  Save
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Notifications</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="col-lg-6">
                              <div class="form-check form-switch mb-3">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="s1"
                                  checked
                                />
                                <label class="form-check-label" for="s1"
                                  >I send or receive digital currency</label
                                >
                              </div>
                              <div class="form-check form-switch mb-3">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="s2"
                                  checked
                                />
                                <label class="form-check-label" for="s2"
                                  >I receive merchant order</label
                                >
                              </div>
                              <div class="form-check form-switch mb-3">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="s3"
                                  checked
                                />
                                <label class="form-check-label" for="s3"
                                  >There are recommendation for my
                                  sccount</label
                                >
                              </div>
                            </div>

                            <div class="col-12">
                              <button class="btn btn-success waves-effect">
                                Save
                              </button>
                            </div>
                          </form>
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

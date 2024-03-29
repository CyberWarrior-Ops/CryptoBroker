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
                <h4>Security</h4>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-activity.php">Activity</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">2-step verification</h4>
                        </div>
                        <div class="card-body px-0">
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span
                                class="me-3 icon-circle bg-primary text-white"
                                ><i class="icofont-ui-touch-phone"></i
                              ></span>
                              <div class="primary-number">
                                <p class="mb-0">
                                  <strong>+xxx xxxxxxxx60</strong>
                                </p>
                                <small
                                  >Keep your primary phone number
                                  up-to-date</small
                                >
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary">
                              Manage
                            </button>
                          </div>
                          <hr class="dropdown-divider my-4" />
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span
                                class="me-3 icon-circle bg-primary text-white"
                                ><i class="icofont-email"></i
                              ></span>
                              <div class="primary-number">
                                <p class="mb-0">
                                  <strong>hello@example.com</strong>
                                </p>
                                <small
                                  >Keep your primary email up-to-date</small
                                >
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary">
                              Manage
                            </button>
                          </div>
                          <hr class="dropdown-divider my-4" />
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span
                                class="me-3 icon-circle bg-primary text-white"
                                ><i class="icofont-lock"></i
                              ></span>
                              <div class="primary-number">
                                <p class="mb-0">
                                  <strong>*************</strong>
                                </p>
                                <small>You can change your password</small>
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary">
                              Manage
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">Identity verification</h4>
                        </div>
                        <div class="card-body px-0">
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span
                                class="me-3 icon-circle bg-primary text-white"
                                ><i class="icofont-id"></i
                              ></span>
                              <div class="primary-number">
                                <p class="mb-0">xxx xxxxx xxx40</p>
                                <small>Social Security Number</small>
                                <br />
                                <span class="text-success">Verified</span>
                              </div>
                            </div>
                            <button
                              class="btn btn-outline-primary"
                              data-toggle="modal"
                              data-target="#idCardModal"
                            >
                              Manage
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header px-0">
                          <h4 class="card-title">
                            Use 2-step verification to secure your transactions
                          </h4>
                        </div>
                        <div class="card-body px-0">
                          <form action="#">
                            <div class="col-12">
                              <div class="form-check form-switch mb-3">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="s1"
                                  checked
                                />
                                <label class="form-check-label" for="s1"
                                  >Any amount of cryptocurrency
                                  <b class="text-success">Most secure</b></label
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
                                  >Over 1.2000 BTC per day</label
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
                                  >Never
                                  <b class="text-danger">Least secure</b></label
                                >
                              </div>
                            </div>

                            <div class="col-12">
                              <button class="btn btn-success">Save</button>
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

    <!-- Modal -->
    <div
      class="modal fade"
      id="idCardModal"
      tabindex="-1"
      aria-labelledby="idCardModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="idCardModalLabel">
              Upload your ID card
            </h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="verify-step-3.html" class="identity-upload">
              <div class="identity-content">
                <span>(Driving License or Government ID card)</span>

                <p>
                  Uploading your ID helps as ensure the safety and security of
                  your founds
                </p>
              </div>

              <div class="form-group">
                <label class="me-sm-2">Upload Front ID </label>
                <span class="float-right">Maximum file size is 2mb</span>
                <div class="file-upload-wrapper" data-text="front.jpg">
                  <input
                    name="file-upload-field"
                    type="file"
                    class="file-upload-field"
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="me-sm-2">Upload Back ID </label>
                <span class="float-right">Maximum file size is 2mb</span>
                <div class="file-upload-wrapper" data-text="back.jpg">
                  <input
                    name="file-upload-field"
                    type="file"
                    class="file-upload-field"
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-success"
              data-dismiss="modal"
              data-toggle="modal"
              data-target="#successIdCardModal"
            >
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="successIdCardModal"
      tabindex="-1"
      aria-labelledby="successIdCardModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="successIdCardModalLabel">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <div class="card-body">
                <form action="verify-step-2.html" class="identity-upload">
                  <div class="identity-content">
                    <span class="icon"><i class="icofont-email"></i></span>
                    <h5>Identity Verified</h5>
                    <p>
                      Congrats! your identity has been successfully verified and
                      your investment limit has been increased.
                    </p>
                  </div>
                </form>
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

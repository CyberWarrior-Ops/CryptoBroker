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

  <body class="@@dashboard">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="header landing bg-dark light">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="navigation">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="brand-logo">
                    <a href="index.html">
                      <img
                              src="../images/logo.png"
                              alt=""
                              class="logo-primary"
                      />
                      <img src="../images/logow.png" alt="" class="logo-white" />
                    </a>
                  </div>
                  <button
                          class="navbar-toggler"
                          type="button"
                          data-toggle="collapse"
                          data-target="#navbarNavDropdown"
                          aria-controls="navbarNavDropdown"
                          aria-expanded="false"
                          aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                      </li>

                      </li>
                      <!-- <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Home</a>
                                </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="price.html">Price</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                data-toggle="dropdown"
                        >Company
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="about.php"
                          >About us</a
                          >
                          <a class="dropdown-item" href="team.php">Team</a>
                          <a class="dropdown-item" href="blogg.html">Blog</a>
                          <a class="dropdown-item" href="career.php"
                          >Career</a
                          >
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle text-primary"
                                href="#"
                                data-toggle="dropdown"
                        >Support
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="contact.php"
                          >Contact us</a
                          >
                          <a class="dropdown-item text-primary" href="helpdesk.php"
                          >Help Desk</a
                          >
                          <a class="dropdown-item" href="legal/privacy-policy.php"
                          >Privacy</a
                          >
                          <a class="dropdown-item" href="faq.php">FAQ</a>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="signin-btn ">
                    <a class="btn btn-outline-dark px-4" href="../login/signin.php">Sign in</a>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="helpdesk-search section-padding bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <div class="helpdesk-search-content">
                <h2 class="mb-5">How can we help you today?</h2>
                <div class="helpdesk-form">
                  <form action="#">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search here"
                    />
                    <button type="submit" class="btn btn-primary">
                      Search
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="help-category section-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <div class="help-cat">
                <span class="bi bi-camera-video"></span>
                <h4>Video Guide</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <div class="help-cat">
                <span class="bi bi-clipboard-check"></span>
                <h4>FAQ</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <div class="help-cat">
                <span class="bi bi-braces"></span>
                <h4>API for developers</h4>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-auto">
              <a href="#" class="sub-cat">
                <h5>Troubleshooting</h5>
              </a>
            </div>
            <div class="col-auto">
              <a href="#" class="sub-cat">
                <h5>Partnership</h5>
              </a>
            </div>
            <div class="col-auto">
              <a href="#" class="sub-cat">
                <h5>Getting started</h5>
              </a>
            </div>
            <div class="col-auto">
              <a href="#" class="sub-cat">
                <h5>Wallets</h5>
              </a>
            </div>
            <div class="col-auto">
              <a href="#" class="sub-cat">
                <h5>Healthy Tips</h5>
              </a>
            </div>
            <div class="col-auto">
              <a href="#" class="sub-cat">
                <h5>Crypto-definitions</h5>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="troubleshooting section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <div class="section-title text-center">
                <h2>Troubleshooting</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="troubleshooting-content">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <h4>My Transaction</h4>
                    <ul>
                      <li><a href="#">My transaction is stuck</a></li>
                      <li><a href="#">The amount is too low</a></li>
                      <li><a href="#">Sorry, payment was not received</a></li>
                      <li><a href="#">Still didn't get my refund</a></li>
                    </ul>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <h4>My Wallet</h4>
                    <ul>
                      <li>
                        <a href="#"
                          >My wallet address is recognized as invalid</a
                        >
                      </li>
                      <li>
                        <a href="#">What does ‘Not yet redeemed?’ mean</a>
                      </li>
                      <li>
                        <a href="#">I sent my ABC coins to a non-ABC wallet</a>
                      </li>
                      <li><a href="#">ETH contract addresses</a></li>
                    </ul>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4">
                    <h4>Other</h4>
                    <ul>
                      <li><a href="#">Customer service doesn't reply</a></li>
                      <li><a href="#">The amount is too low</a></li>
                      <li><a href="#">Can't log in</a></li>
                      <li><a href="#">Can’t enable / disable 2-FA</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ticket-box section-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="ticket-box-content">
                <h3>Can't find what you're looking for?</h3>
                <p>Let us help you!</p>
                <a href="#" class="btn btn-dark">Submit Ticket</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bottom section-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-4">
              <div class="bottom-logo">
                <img class="pb-3" src="../images/logow.png" alt="" />

                <p style="color: white">
                  Your Crypto Wallet in one place.
                </p>
              </div>
            </div>
            <div class="col-xl-2">
              <div class="bottom-widget">
                <h4 class="widget-title">Company</h4>
                <ul>
                  <li ><a href="about.php" class="yellowText">About</a></li>
                  <li class="yellowText"><a href="career.php" class="yellowText">Career</a></li>
                  <li class="yellowText"><a href="#" class="yellowText">Affiliate</a></li>
                  <li class="yellowText"><a href="team.php" class="yellowText">Our Team</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2">
              <div class="bottom-widget">
                <h4 class="widget-title">Support</h4>
                <ul>
                  <li class="yellowText"><a href="contact.php" class="yellowText">Contact us</a></li>
                  <li class="yellowText"><a href="faq.php" class="yellowText">FAQ</a></li>
                  <li class="yellowText"><a href="blogg.html" class="yellowText">Blog</a></li>
                  <li class="yellowText"><a href="helpdesk.html"class="yellowText">Helpdesk</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="bottom-widget">
                <h4 class="widget-title">Exchange Pair</h4>
                <div class="row">
                  <div class="col-xl-6">
                    <ul>
                      <li class="yellowText"><a href="#"class="yellowText">ETH to BTC</a></li>
                      <li class="yellowText"><a href="#"class="yellowText">BTC to ETH</a></li>
                      <li class="yellowText"><a href="#"class="yellowText">LTC to ETH</a></li>
                      <li class="yellowText"><a href="#"class="yellowText">USDT to BTC</a></li>
                    </ul>
                  </div>
                  <div class="col-xl-6">
                    <ul>
                      <li class="yellowText"><a href="#"class="yellowText">BTC to USDT</a></li>
                      <li class="yellowText"><a href="#"class="yellowText">LTC to BTC</a></li>
                      <li class="yellowText"><a href="#"class="yellowText">XMR to BTC</a></li>
                      <li class="yellowText"><a href="#"class="yellowText">ETC to DASH</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="copyright">
                <p style="color: gray">
                  © Copyright <span id="year"></span> <a href="#" class="yellowText">CriptoBroker</a> I
                  All Rights Reserved
                  <br>
                <p style="color: yellow"> Educational purposes only.</p> Do not use this website for any investment or commercial purposes.
                </p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="footer-social">
                <ul>
                  <li>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                  </li>
                </ul>
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

<style>
  .btn-primary {
    background-color: #c2b42c !important;
    border-color: #c2b42c !important;
  }
  .text-primary {
    color: #c2b42c !important;
  }

  .btn-primary:hover {
    background-color: #867d1e !important;
    border-color: #867d1e !important;
  }

  .btn-primary:focus {
    background-color: #867d1e !important;
    border-color: #867d1e !important;
  }

  .header-text{
    color: #867d1e !important;
  }
  .btn-arrow , .footer , .bottom, .intro2 , .header, .contact-form , .bg-light {
    background: #000000 !important;
  }

  .sparkline8{
    fill:#c2b42c !important;
  }

  h2, .fa, .yellowText{
    color: #c2b42c !important;
  }

  .section-title{
    color: rgb(161, 161, 161) !important;
  }
  .trust-content{
    color: rgb(161, 161, 161) !important;
  }

  .btn-outline-dark{
    color: #c2b42c !important;
    border-color: #c2b42c !important;
  }
  .btn-outline-dark:hover{
    color: white !important;
    border-color: #c2b42c !important;
    background: #c2b42c !important;
  }

</style>

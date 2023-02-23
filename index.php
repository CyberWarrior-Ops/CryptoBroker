<?php
// set conn
$connection = mysqli_connect("localhost", "root", "", "Cripto");

// Bitcoin
$sqlBTC = "SELECT value FROM Bitcoin ORDER BY ID DESC LIMIT 3";
$queryBTC = mysqli_query($connection, $sqlBTC);
$rowcountBTC = mysqli_num_rows($queryBTC);

if ($rowcountBTC > 0) {
    $i = 1;
    while ($rowBTC = mysqli_fetch_array($queryBTC)) {
        ${'rowBTC' . $i} = $rowBTC['value'];
        $i++;
    }
} else {
    echo "No se han encontrado resultados para Bitcoin";
}

// Ethereum
$sqlETH = "SELECT value FROM Etherium ORDER BY ID DESC LIMIT 3";
$queryETH = mysqli_query($connection, $sqlETH);
$rowcountETH = mysqli_num_rows($queryETH);

if ($rowcountETH > 0) {
    $i = 1;
    while ($rowETH = mysqli_fetch_array($queryETH)) {
        ${'rowETH' . $i} = $rowETH['value'];
        $i++;
    }
} else {
    echo "No se han encontrado resultados para Ethereum";
}

// Litecoin
$sqlLTC = "SELECT value FROM LiteCoin ORDER BY ID DESC LIMIT 3";
$queryLTC = mysqli_query($connection, $sqlLTC);
$rowcountLTC = mysqli_num_rows($queryLTC);

if ($rowcountLTC > 0) {
    $i = 1;
    while ($rowLTC = mysqli_fetch_array($queryLTC)) {
        ${'rowLTC' . $i} = $rowLTC['value'];
        $i++;
    }
} else {
    echo "No se han encontrado resultados para Litecoin";
}

// Bitcoin Cash
$sqlBCH = "SELECT value FROM BTCC ORDER BY ID DESC LIMIT 3";
$queryBCH = mysqli_query($connection, $sqlBCH);
$rowcountBCH = mysqli_num_rows($queryBCH);

if ($rowcountBCH > 0) {
    $i = 1;
    while ($rowBCH = mysqli_fetch_array($queryBCH)) {
        ${'rowBCH' . $i} = $rowBCH['value'];
        $i++;
    }
} else {
    echo "No se han encontrado resultados para Bitcoin Cash";
}

// Cerrar conexión
mysqli_close($connection);
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
      href="./images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="./css/style.css" />
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
                        src="./images/logo.png"
                        alt=""
                        class="logo-primary"
                      />
                      <img src="./images/logow.png" alt="" class="logo-white" />
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
                            <a class="nav-link text-primary" href="#">Home</a>
                        </li>

                      </li>
                      <!-- <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Home</a>
                                </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="details/price.html">Price</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          data-toggle="dropdown"
                          >Company
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="team.php">Team</a>
                          <a class="dropdown-item" href="blogg.html">Blog</a>
                          <a class="dropdown-item" href="career.php"
                            >Career</a
                          >
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          data-toggle="dropdown"
                          >Support
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="contact.php"
                            >Contact us</a
                          >
                          <a class="dropdown-item" href="helpdesk.php"
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
                    <a class="btn btn-outline-dark px-4" href="login/signin.php">Sign in</a>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="intro2 section-padding bg-dark" id="intro">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-6">
              <div class="intro-content">
                <h1 class="text-white">All your Cryptos in one place</h1>
                <p class="header-text">
                    Secure and easy to use crypto wallet with 100+ coins and tokens supported
                    send and receive crypto, buy and sell crypto, and more!
                </p>
                <div class="intro-form">
                  <form action="#">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Join to our newsletter"
                    />
                    <button type="submit" class="btn-arrow">
                      <i class="la la-arrow-right first"></i>
                      <i class="la la-arrow-right second"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>

              <div class="col-xl-4 col-lg-6 col-12">
                  <div class="intro-form-exchange">
                      <form
                              name="myform"
                              class="currency_validate trade-form row g-3"
                      >
                          <div class="col-12">
                              <label class="form-label">Send</label>
                              <div class="input-group">
                                  <select class="form-control" name="method">
                                      <option value="bank">USD</option>
                                  </select>
                                  <input
                                          type="text"
                                          name="v1"
                                          class="form-control"
                                          placeholder="0.0214 BTC"
                                  />
                              </div>
                          </div>

                          <div class="col-12">
                              <label class="form-label">Receive</label>
                              <div class="input-group">
                                  <select class="form-control" name="method">
                                      <option value="bank">BTC</option>
                                      <option value="master">ETH</option>
                                  </select>
                                  <input
                                          type="text"
                                          name="v2"

                                          class="form-control"
                                          placeholder="0.0214 BTC"
                                  />
                              </div>
                          </div>


                          <p class="mb-0">
                              1 BTC ~ <?php
                              echo number_format($rowBTC1,2,'.',',')?> USD
                              <a href="#" class="yellowText">Expected rate <br />No extra fees</a>
                          </p>
                          <button type="button" id="calculate-button" class="btn btn-primary">Calculate</button>
                      </form>
                  </div>
                  <div id="result"></div>
              </div>
          </div>
        </div>
      </div>


        <div class="market section-padding page-section" data-scroll-index="1">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <div class="section-title text-center">
                <h2>All the most loved Cryptos in one place</h2>
                <p>
                    Trade Bitcoin, ETH, Litecoin and more cryptocurrencies with some clicks.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="market-table">
                <div class="table-responsive">
                  <table class="table mb-0 table-responsive-sm table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Change</th>
                        <th>Trade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="coin_icon">
                          <i class="cc BTC"></i>
                          <span>Bitcoin <b>BTC</b></span>
                        </td>

                        <td>USD <?php echo number_format($rowBTC1, 2, '.', ',');?></td>
                        </td>
                        <td>
                            <?php
                            if ($rowBTC1 > $rowBTC2){
                                $color = "text-success";
                            }
                            else{
                                $color = "text-danger";
                            }
                            ?>
                            <span class="<?php echo $color?>"><?php
                                $result =number_format(($rowBTC1 - $rowBTC2) / $rowBTC2 * 100, 2);
                                echo $result . "%"
                                ?></span>
                        </td>
                        <td><a href="login/signin.php" class="btn btn-outline-dark px-4">Buy</a></td>
                      </tr>
                      <tr>
                        <td class="coin_icon">
                          <i class="cc ETH"></i>
                          <span>Ethereum <b>ETH</b></span>
                        </td>

                        <td>USD <?php echo number_format($rowETH1, 2, '.', ',');?></td>
                        <td>
                            <?php
                            if ($rowETH1 > $rowETH2){
                                $color = "text-success";
                            }
                            else{
                                $color = "text-danger";
                            }
                            ?>
                            <span class="<?php echo $color?>"><?php
                                $result =number_format(($rowETH1 - $rowETH2) / $rowETH2 * 100, 2);
                                echo $result . "%"
                                ?></span>
                        </td>
                        <td><a href="login/signin.php" class="btn btn-outline-dark px-4">Buy</a></td>
                      </tr>
                      <tr>
                        <td class="coin_icon">
                          <i class="cc BCH-alt"></i>
                          <span>Bitcoin Cash <b>BCH</b></span>
                        </td>

                        <td>USD <?php
                            echo number_format($rowBCH1,2,'.',',')
                            ?></td>
                        <td>
                            <?php
                            if ($rowBCH1 < $rowBCH2){
                                $color = "text-success";
                            }
                            else{
                                $color = "text-danger";
                            }
                            ?>
                          <span class="<?php echo $color?>"><?php
                              $result = number_format(($rowBCH1 - $rowBCH2) / $rowBCH2 * 100,2);
                                echo $result . '%';
                              ?></span>
                        </td>
                        <td><a href="login/signin.php" class="btn btn-outline-dark px-4">Buy</a></td>
                      </tr>
                      <tr>
                        <td class="coin_icon">
                          <i class="cc LTC"></i>
                          <span>Litecoin <b>LTC</b></span>
                        </td>

                        <td>USD <?php echo number_format($rowLTC1,2,'.',',')?></td>
                        <td>
                            <?php
                            if ($rowLTC1 > $rowLTC2){
                                $color = "text-success";
                            }
                            else{
                                $color = "text-danger";
                            }
                            ?>
                            <span class="<?php echo $color?>"><?php
                                $result =number_format(($rowLTC1 - $rowLTC2) / $rowLTC2 * 100, 2);
                                echo $result . "%"
                                ?></span>
                        </td>
                        <td><a href="login/signin.php" class="btn btn-outline-dark px-4">Buy</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="info bg-white">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="info-content">
                <span><i class="bi bi-star" style="color: #867d1e"></i></span>
                <h4 class="yellowText">5 stars services and price rates</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="info-content">
                <span><i class="bi bi-heart" style="color: #867d1e"></i></span>
                <h4 class="yellowText">Transparent 0.25% fee</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="info-content">
                <span><i class="bi bi-clock" style="color: #867d1e"></i></span>
                <h4 class="yellowText">Instantly transactions</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="info-content">
                <span><i class="bi bi-cash" style="color: #867d1e"></i></span>
                <h4 class="yellowText">No limits to invest!</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
              <div class="info-content">
                <span><i class="bi bi-headset" style="color: #867d1e"></i></span>
                <h4 class="yellowText">Support from an expert team</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--
      <div class="product-feature section-padding">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-xl-5 col-lg-6">
              <div class="section-title">
                <h2 class="text-start">24-hour statistics</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Facere odit fuga nesciunt similique rerum nulla asperiores
                  ullam deserunt architecto inventore.
                </p>
              </div>
              <div class="product-feature-content">
                <div class="row">
                  <div class="col-6">
                    <div class="product-feature-text">
                      <h4>
                        <span><i class="bi bi-person"></i></span> 27 %
                      </h4>
                      <p>New users</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="product-feature-text">
                      <h4>
                        <span><i class="bi bi-people"></i></span> 73 %
                      </h4>
                      <p>Regular users</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="product-feature-box">
                    <span class="bg-primary"
                      ><i class="bi bi-cash-stack"></i
                    ></span>
                    <h4>1900</h4>
                    <p>Transactions made</p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="product-feature-box">
                    <span class="bg-secondary"
                      ><i class="bi bi-trophy"></i
                    ></span>
                    <h4>ETH-BTC</h4>
                    <p>Today's champion pair</p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="product-feature-box">
                    <span class="bg-success"><i class="bi bi-people"></i></span>
                    <h4>27 150</h4>
                    <p>Visits today</p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="product-feature-box">
                    <span class="bg-info"><i class="bi bi-clock"></i></span>
                    <h4>14.0 minutes</h4>
                    <p>Average processing time</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
-->
      <div class="new-product section-padding bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <div class="section-title">
                <h2>Still doubting? There's more!</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="new-product-content">
                <img class="img-fluid" src="./images/svg/api.svg" alt="" />
                <h4 class="yellowText">CryptoCurrency Newsletter</h4>
                <p style="color: black">
                    Get the latest news and updates about the crypto world
                    delivered to your inbox.
                </p>
                <a href="#" class="btn btn-outline-dark px-4">Learn more</a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="new-product-content">
                <img
                  class="img-fluid"
                  src="./images/svg/affiliate.svg"
                  alt=""
                />
                <h4 class="yellowText">CryptoUsage wisely Podcast</h4>
                <p style="color: black">
                    Listen to our podcast and learn more about the crypto world, be a crypto expert!
                </p>
                <a href="#" class="btn btn-outline-dark px-4"
                  >Listen Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="trust section-padding">
        <div class="container">
            <div class="col-xl-7">
                <div class="section-title">
                    <h2>Join to our competitive Platform!</h2>
                </div>
            </div>
          <div class="row" style="color: #867d1e">
            <div class="col-xl-4 col-lg-4 col-md-4" style="color: #867d1e">
              <div class="trust-content">
                <span><i class="bi bi-flower1" style="color: #867d1e"></i></span>
                <h4 class="yellowText">New account in a snap!</h4>
                <p>
                  Create an account in less than 5 minutes. No KYC required.
                </p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="trust-content">
                <span><i class="bi bi-shield-lock" style="color: #867d1e"></i></span>
                <h4 class="yellowText">Security and encryption</h4>
                <p>
                  No hackers allowed. We use the latest security protocols to keep your data safe.
                </p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="trust-content">
                <span><i class="bi bi-brightness-high" style="color: #867d1e"></i></span>
                <h4 class="yellowText">COMPETITIVE</h4>
                <p>
                    The best rates in the market.
                    We are always looking for the best deals for you.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--
      <div class="appss section-padding">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12">
              <div class="appss-img">
                <img class="img-fluid" src="./images/app2.png" alt="" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="appss-content">
                <h3>Mobile app</h3>
                <p>
                  Get the best mobile app to exchange or buy crypto on the go:
                </p>
                <ul>
                  <li><i class="la la-check"></i> Best rates on the market</li>
                  <li><i class="la la-check"></i> High limits</li>
                  <li>
                    <i class="la la-check"></i> No verification for exchange
                    transactions
                  </li>
                  <li>
                    <i class="la la-check"></i> More than 150 cryptocurrencies
                  </li>
                  <li>
                    <i class="la la-check"></i> Buy bitcoin | buy crypto with
                    USD, EUR or GBP
                  </li>
                </ul>
                <div class="mt-4">
                  <a href="#" class="btn btn-success my-1 waves-effect">
                    <img src="./images/android.svg" alt="" />
                  </a>
                  <a href="#" class="btn btn-success my-1 waves-effect">
                    <img src="./images/apple.svg" alt="" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
-->
      <div class="contact-form section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <div class="section-title text-center">
                <span>Feeling Curious?</span>
                <h2>Let us hear from you directly!</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-12">
              <div class="info-list">
                <h4 class="mb-3" style="color: white">Address</h4>
                <ul>
                  <li class="yellowText"><i class="fa fa-map-marker"></i> California, USA</li>
                  <li class="yellowText"><i class="fa fa-phone"></i> (+880) 1243 665566</li>
                  <li class="yellowText"><i class="fa fa-envelope"></i> support@ciptobroker.com</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-8 col-md-8 col-sm-12">
              <form name="myform" class="contact_validate">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="mb-3">
                      <label class="form-label" style="color: white"> Full name </label>
                      <input
                        type="text"
                        class="form-control"
                        id="contactName"
                        placeholder="Full name"
                        name="firstname"
                      />
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="mb-3">
                      <label class="form-label" style="color: white"> Email </label>
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="hello@domain.com"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <textarea
                        class="form-control p-3"
                        name="message"
                        rows="5"
                        placeholder="Tell us what we can help you with!"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary px-4 py-2">
                  Send message
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="bottom section-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-4">
              <div class="bottom-logo">
                <img class="pb-3" src="./images/logow.png" alt="" />

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
                  <li class="yellowText"><a href="helpdesk.php" class="yellowText">Helpdesk</a></li>
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

    <div class="cookie_alert">

        <div class="alert alert-light fade show">
            <i class="la la-close" data-dismiss="alert"></i>
            <p >
                We use cookies to enhance your experience. By using CriptoBroker, you agree to our <a href="#">Terms of
                    Use</a> and <a href="#">Privacy
                    Policy</a>
            </p>
            <button class="btn btn-success btn-block">Accept</button>
        </div>
    </div>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="./js/plugins/sparkline-init.js"></script>

    <script src="./js/scripts.js"></script>
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





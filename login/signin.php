<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CriptoBroker - Login</title>
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
      <div class="authincation section-padding">
        <div class="container h-100">
          <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
              <div class="mini-logo text-center my-4">
                <a href="../index.php"
                  ><img src="../images/logow.png" alt=""
                /></a>
                <h4 class="card-title mt-5 text-white">Hi! Welcome back to CriptoBroker</h4>
              </div>
              <div class="auth-form card">
                <div class="card-body">
                  <form
                    name="myform"
                    class="signin_validate row g-3"
                    action="../UserActions/CheckLogin.php"
                    method="POST"
                  >
                    <div class="col-12">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="email@example.com"
                        name="email"
                      />
                    </div>
                    <div class="col-12">
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                        name="password"
                      />
                    </div>
                    <div class="col-6">
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input "
                          type="checkbox"
                          id="flexSwitchCheckDefault"

                        />
                        <label
                          class="form-check-label"
                          for="flexSwitchCheckDefault"
                          style="color: black"
                          >Remember me</label
                        >
                      </div>
                    </div>
                    <div class="col-6 text-right">
                      <a href="../reset.html" class="yellowText">Forgot Password?</a>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-primary">
                        Sign in
                      </button>
                    </div>
                  </form>
                  <p class="mt-3 mb-0" style="color: black">
                    New here? Join us!
                    <a class="text-primary" href="signup.php">Now</a>
                  </p>
                </div>
              </div>
              <div class="privacy-link">

                <br />
                <a href="../privacy-policy.html" class="text-white">Privacy Policy and Terms of Use</a>
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
    #main-wrapper , .footer , .bottom, .intro2 , .header, .contact-form , .bg-light {
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

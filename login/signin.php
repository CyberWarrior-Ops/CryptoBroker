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
                  ><img src="../images/logo.png" alt=""
                /></a>
                <h4 class="card-title mt-5">Hi! Welcome back to CriptoBroker</h4>
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
                          class="form-check-input"
                          type="checkbox"
                          id="flexSwitchCheckDefault"
                        />
                        <label
                          class="form-check-label"
                          for="flexSwitchCheckDefault"
                          >Remember me</label
                        >
                      </div>
                    </div>
                    <div class="col-6 text-right">
                      <a href="../reset.html">Forgot Password?</a>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-primary">
                        Sign in
                      </button>
                    </div>
                  </form>
                  <p class="mt-3 mb-0">
                    New here? Join us!
                    <a class="text-primary" href="signup.php">Now</a>
                  </p>
                </div>
              </div>
              <div class="privacy-link">

                <br />
                <a href="../privacy-policy.html">Privacy Policy and Terms of Use</a>
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

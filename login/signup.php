<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CriptoBroker - SignUp</title>
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
                <h4 class="card-title mt-5">Create your account</h4>
              </div>
              <div class="auth-form card">
                <div class="card-body">
                  <form
                    name="myform"
                    class="signin_validate row g-3"
                    action="../UserActions/RegisterUser.php"
                    method="POST"
                  >
                    <div class="col-12">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Full Name"
                        name="FullName"

                      />
                    </div>
                    <div class="col-12">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="hello@example.com"
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
                    <div class="col-12">
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          id="flexSwitchCheckDefault"
                        />
                        <label
                          class="form-check-label"
                          for="flexSwitchCheckDefault"
                        >
                          I certify that I am 18 years of age or older, and
                          agree to the
                          <a href="#" class="text-primary">User Agreement</a>
                          and
                          <a href="../legal/privacy-policy.php" class="text-primary"
                            >Privacy Policy</a
                          >.
                        </label>
                      </div>
                    </div>

                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-primary">
                        Create account
                      </button>
                    </div>
                  </form>
                  <div class="text-center">
                    <p class="mt-3 mb-0">
                      <a class="text-primary" href="signin.php">Sign in</a> to
                      your account
                    </p>
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
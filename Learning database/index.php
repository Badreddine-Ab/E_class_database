
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign In</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-body">
    <main >
        <div class="container-fluid">
          <div class="d-flex justify-content-center">
              <div class="col-md-4 shadow col-sm-12 p-4 bg-white mt-5" style="border-radius: 20px;">
                <div class="border-start border-info border-5 col-12 mb-3 ms-3">
                  <h1 class="ms-2">E-classe</h1>
                </div>
                  <div class="text-center">
                      <h2 class="text-uppercase h4 mt-4">Sign In</h2>
                      <p class="text-muted small">
                          Enter your credentials to access your account 
                      </p>
                  </div>
                  <form action="view/dashboard.html">
                      <div class="p-4">
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control" placeholder="Enter your email" id="email">
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" placeholder="Enter your password" id="password">
                          </div>

                          <a href="Dashbord_Admin.php" class="btn bg-button text-white text-center mt-2 w-100 d-flex align-items-center justify-content-center" type="submit">
                              SIGN IN
                          </a>
                          <div class="d-flex justify-content-around mt-2">
                            <p class=" text-muted ">
                              Forgot your password?
                            </p>
                            <a class="bg-link" href="#">Reset password</a>
                          </div>
                          
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </main>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
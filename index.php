<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Shiiping Business</title>

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- <! Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Vast+Shadow&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Poppins&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

</head>

<body class="handheld-toolbar-enabled" data-new-gr-c-s-check-loaded="14.1001.0" data-gr-ext-installed>
  <!-- Sign in modal -->
  <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">
                <i class="ci-unlocked me-2 mt-n1"></i>Sign in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false">
                <i class="ci-user me-2 mt-n1"></i>Sign up</a>
            </li>
          </ul>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body tab-content py-4">
          <div class="tab-pane fade show active" id="signin-tab">
            <h5 class="mb-3">Sign In</h5>
            <form action="" method="POST" class="needs-validation" autocomplete="off" novalidate="">
              <div class="mb-3">
                <label class="form-label" for="si-email">Username or email</label>
                <input class="form-control" type="email" id="si-email" placeholder=" " required="">
                <div class="invalid-feedback">Please provide a valid Username.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required="">
                  <span class="password-toggle-indicator"></span>
                </div>
              </div>
              <div class="mb-3 d-flex justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div>
                <a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <a href="admin.php" class="btn btn-primary d-block w-100">Sign In</a>
            </form>
          </div>

          <div class="tab-pane fade" id="signup-tab">
            <h5 class="mb-3">Sign Up</h5>
            <form action="/register" method="POST" class="needs-validation" autocomplete="off" novalidate="">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder=" " required="">
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-name">Create Your Username</label>
                <input class="form-control" type="text" id="su-name" placeholder=" " required="">
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required="">
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required="">
                  <span class="password-toggle-indicator"></span>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="si-password">Confirm Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required="">
                  <span class="password-toggle-indicator"></span>
                </div>
              </div>
              <a href="admin.php" class="btn btn-primary btn-shadow d-block w-100">Sign up</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 <section id="title">
  <div class="container-fluid">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand d-none d-lg-flex flex-shrink-0" href="index.php" style="font-size: 50px; color: blue;">KTcargo</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#signin-modal" data-bs-toggle="modal">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>

  <!-- ========================= SECTION MAIN ========================= -->
  <section class="section-intro padding-y-sm">
  <div class="container">

  <div class="intro-banner-wrap">
  	<img src="images/APS_28.jpg" class="img-fluid rounded"style="width: 100%; height: 50%;">
  </div>

  </div> <!-- container //  -->
  </section>
  <!-- ========================= SECTION MAIN END// ========================= -->

  <!-- ========================= SECTION  ========================= -->
  <section class="section-name padding-y-sm">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-6 px-3 px-md-2 py-2">
          <div class="text-center">
            <h5 class="mb-2">Tracking Number</h5>
            <p class="fs-sm text-muted pb-2">Please enter the Tracking Number</p>
          </div>
          <form action=" " class="needs-validation " method="post" novalidate="">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Enter Tracking Number" required>
              <button class="btn btn-info" type="submit">Track</button>
              <div class="invalid-feedback">Please enter a valid tracking number.</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- ========================= SECTION  END// ========================= -->

  <!-- ========================= FOOTER SECTION ========================= -->


  <footer class="bg-white pt-1">
    <hr>
    <div class="container">
      <!-- Footer content here -->
      <section class="text-center">
        <div class="row justify-content-center pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h5 class="widget-title text-dark">Contact</h5>
              <a href="#" class="text-muted">Email: ktcargo@gmail.com</a><br>
              <a href="tel:+1234567890" class="text-muted">Phone: +1 (234) 567-890</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h5 class="widget-title text-dark pb-1">Copyright 2022</h5>
              <p class="text-muted">All rights reserved.</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h5 class="widget-title text-dark">About</h5>
              <p class="text-muted">Learn more about our company <a href="about.php" class="text-primary">here</a>.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </footer>
  <!-- ========================= END FOOTER SECTION ========================= -->



</body>

</html>

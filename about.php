<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About US</title>

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
              <a href="customerInformation.html" class="btn btn-primary d-block w-100">Sign In</a>
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
              <a href="customerInformation.php" class="btn btn-primary btn-shadow d-block w-100">Sign up</a>
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
  <section class="section-intro">
  <div class="container">
    <h2 class="text-center pb-5">About KTcargo</h2>
    <div class="row">
      <div class="col-md-6">

        <div class="position-relative">
          <img src="images/KTCargo.jpg" style="width: 100%; max-width: 1000px; height: auto; opacity: 1; float: left; margin-right: 20px;">
        </div>
      </div>
      <div class="col-md-6 text-wrapper">

        <p>
        KT Cargo, a thriving shipping enterprise, has carved a niche for itself with an agile and resourceful approach to international logistics.
         Operating seamlessly across the USA, Vietnam, and Europe, KT Cargo's success story is rooted in a robust web platform and an intricate database system that form the backbone of their operations.
        </p>
        <!-- Add more content here -->
        <p>
        At the heart of KT Cargo's technological prowess lies its sophisticated web platform,
        an interface that seamlessly connects customers with their shipping needs.
        This user-friendly portal empowers clients to effortlessly manage shipments,
        track their progress, and access historical data. The platform's intuitive design ensures that customers can engage with KT Cargo's services seamlessly, further enhancing their shipping experience.
        </p>

      </div>
      <p>
      Behind the scenes, KT Cargo's administrative interface provides a powerful toolkit for managing customer information.
       This hub efficiently stores and organizes critical details, from names and addresses to contact information. Notably, the database is designed to capture pivotal shipping and receiving dates,
       supplemented by the generation of unique tracking numbers. This level of automation ensures that every stage of the shipping journey is accurately documented and monitored.
        </p>
        <p>
        KT Cargo's operational brilliance extends to their diverse and efficient shipping routes.
         Seamlessly connecting continents, the business facilitates shipping from the USA to Vietnam, covering vital locations such as Saigon and other provinces.
         Additionally, KT Cargo services the USA-to-Europe route, reaching destinations in the UK and various EU countries.
         This comprehensive coverage underscores KT Cargo's commitment to fostering global connectivity and trade.
        </p>
        <p>
        In essence, KT Cargo's success is a harmonious blend of cutting-edge technology and meticulous planning.
        With a robust web platform and an intelligent database system, the enterprise has positioned itself as a trailblazer in the shipping industry.
        As KT Cargo continues to redefine industry standards and surpass customer expectations,
        its unwavering focus on efficiency and innovation ensures a bright and promising future in the world of international logistics.
        </p>
    </div>
  </div>
</section>

  <!-- ========================= SECTION MAIN END// ========================= -->



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
              <a href="contact.html" class="text-muted">Email: ktcargo@gmail.com</a><br>
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
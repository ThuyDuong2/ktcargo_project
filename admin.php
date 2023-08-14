<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Shiiping Business Admin</title>

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

 <section id="title">
  <div class="container-fluid">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand d-none d-lg-flex flex-shrink-0" href="admin.php" style="font-size: 50px; color: blue;">KTcargo</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>


          <li class="nav-item">
              <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#" data-bs-toggle="modal">
                <div class="nav-link navbar-tool-icon-box"><i class="bi bi-person-circle"></i>
                  <span class="navbar-tool-text ms-n3">Welcome,Full Name!</span>
                </div>
              </a>

            </li>

            <li class="nav-item">
            <a class=" navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#" data-bs-toggle="modal">
                <div class="nav-link navbar-tool-icon-box"><i class="bi bi-cart-plus" style="color: #161717;"></i>

                  <span class="navbar-tool-text ms-n3">Cart</span>
                </div>
             </a>

          </li>

        </ul>
      </div>
    </nav>
  </div>
</section>

  <!-- ========================= SECTION MAIN ========================= -->
<section>

  <div class="container mt-5">
    <div class="row">
      <!-- Customer Container Column -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Customer Information
          </div>
          <div class="card-body  bg-custom-customer">
            <form>
              <!-- Customer input fields and actions -->
              <div class="row g-3">

            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First" value="" required>

            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" value="" required>

            </div>





            <div class="col-12">
              <label for="address" class="form-label">Customer Address</label>
              <input type="text" class="form-control" id="streetName" name="streetName" placeholder="1234 Main St" required>

            </div>



            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="usa" name="usa" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" name="state" required>
                <option value="">Choose...</option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option>Arizona</option>
                <option>Arkansas</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>Delaware</option>
                <option>Florida</option>
                <option>Georgia</option>
                <option>Hawaii</option>
                <option>Idaho</option>
                <option>Illinois</option>
                <option>Indiana</option>
                <option>Iowa</option>
                <option>Kansas</option>
                <option>Kentucky</option>
                <option>Louisiana</option>
                <option>Maine</option>
                <option>Maryland</option>
                <option>Massachusetts</option>
                <option>Michigan</option>
                <option>Minnesota</option>
                <option>Mississippi</option>
                <option>Missouri</option>
                <option>Montana</option>
                <option>Nebraska</option>
                <option>Nevada</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>New York</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota </option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Utal</option>
                <option>Vermont</option>
                <option>Virginia</option>
                <option>Washington</option>
                <option>West Virginia</option>
                <option>Wisconsin</option>
                <option>Wyoming</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="95823" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="Phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="916-888-8888" value="" required>

            </div>


          </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Receiver Container Column -->
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            Receiver Information
          </div>
          <div class="card-body bg-custom-receiver">
            <form>
              <!-- Receiver input fields and actions -->
              <div class="row g-3">



            <div class="col-sm-6">
              <label for="firstName" class="form-label">Reciver Full Name</label>
              <input type="text" class="form-control" id="reciverName" name="reciverName" placeholder="Full Name of the Receiver" value="" required>
              <div class="invalid-feedback">

              </div>
            </div>
            <div class="col-sm-6">
              <label for="Price" class="form-label">Reciver Phone Number</label>
              <input type="text" class="form-control" id="reciverphone" name="reciverphone" placeholder="" value="" required>
              <div class="invalid-feedback">

              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label"> Receiver Address</label>
              <input type="text" class="form-control" id="rev_address" name="rev_address" placeholder="1234 Main St" required>

            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="des_country" name="des_country" required>
                <option value="">Choose...</option>
                <option>UK</option>
                <option>EU</option>
                <option>VIETNAM</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6">
              <label for="Price" class="form-label">County/Province</label>
              <input type="text" class="form-control" id="province" name="province" placeholder="province" value="" required>
              <div class="invalid-feedback">
            </div>


          </div>
          <hr>

          <!-- ===================================PACKAGE INFORMATION=============================================== -->
          <div class="col-sm-6">
              <label for="PackageWeight" class="form-label">Package Weight</label>
              <input type="text" class="form-control" id="weight" name="weight" placeholder="lbs" value="" required>

            </div>
            <div class="col-sm-6">
              <label for="shipping method" class="form-label">Shipping Method</label>
              <select class="form-select" id="shipMethod" name="shipMethod" required>
                <option value="">Choose...</option>
                <option>Express</option>
                <option>Standard</option>
              </select>
              <div class="invalid-feedback">
                Please select a shipping method.
              </div>
            </div>
            <div class="col-sm-12">
              <label for="PackageWeight" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="price" value="" required>

            </div>
            <div class="col-12">
              <label for="tracking" class="form-label">Tracking Number</label>
              <div class="input-group has-validation">

                <input type="text" class="form-control" id="trackingNumber" name="trackingNumber" placeholder="Tracking Number" required>
                <div class="invalid-feedback">

                </div>
              </div>
            </div>

           </div>
        </div>
      </div>
            <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Add to The Cart</button>


            </form>

    </div>

  <!-- Connection Line -->
  <div class="row mt-5">
    <div class="col-md-12 text-center">
      <svg height="40" width="100%">
        <line x1="0" y1="0" x2="100%" y2="0" style="stroke:#007bff;stroke-width:2" />
      </svg>
    </div>
  </div>

  <!-- Customer and Receiver Information Display -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customer Information</h5>
          <p class="card-text"><strong>CustomerID:</strong> <span id="customerIDDisplay"></span></p>
          <p class="card-text"><strong>Name:</strong> <span id="customerDisplay"></span></p>
          <p class="card-text"><strong>Address:</strong> <span id="addressDisplay"></span></p>
          <p class="card-text"><strong>Phone Number:</strong> <span id="phoneDisplay"></span></p>
          <!-- Display additional customer information here -->

          <!-- Edit and Delete Buttons -->
          <button type="button" class="btn btn-primary btn-sm">Edit</button>
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Receiver Information</h5>
          <p class="card-text"><strong>Name:</strong> <span id="receiverDisplay"></span></p>
          <p class="card-text"><strong>Address:</strong> <span id="addressDisplay"></span></p>
          <p class="card-text"><strong>Phone Number:</strong> <span id="phoneNumberDisplay"></span></p>


          <p class="card-text"><strong>Delivery Preferences:</strong> <span id="preferencesDisplay"></span></p>
          <p class="card-text"><strong>Price:</strong> <span id="trackingNumberDisplay"></span></p>
          <p class="card-text"><strong>Tracking Number:</strong> <span id="trackingNumberDisplay"></span></p>
          <!-- Display additional receiver information here -->

          <!-- Edit and Delete Buttons -->
          <button type="button" class="btn btn-primary btn-sm">Edit</button>
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
  <!-- ========================= FOOTER SECTION ========================= -->


  <footer class="bg-white pt-1">
    <div class="container-fluid">
      <!-- Footer content here -->
      <section class="text-center">
        <hr>
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

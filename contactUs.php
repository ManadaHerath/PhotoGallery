<?php
     include('database.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>SnapX Photographer Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    <style>
      .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
      }
    </style>
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
         <div class="row">
              <div class="col-12">
                   <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                             <img src="assets/images/logo.png" alt="SnapX Photography Template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                             <li><a href="index.html" class="active">Home</a></li>
                             <li><a href="packages.html">Packages</a></li>
                             <li><a href="about.html">About Us</a></li>
                             <li><a href="gallery.html">Gallery</a></li>
                             <li><a href="contactUs.php">Contact Us</a></li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                   </nav>
              </div>
         </div>
    </div>
</header>
  <!-- ***** Header Area End ***** -->



    
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2><em>Connect with Us</em></h2>
          <p>Have a question, feedback, or inquiry? We'd love to hear from you! Our dedicated team is here to assist you with any queries you may have. Whether you're interested in our services, have a technical issue, or simply want to reach out, we're ready to help.</p>
        </div>
      </div>
    </div>
  </div>





  <section class="contact-us">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Phone Numbers</h4>
            <span>+94 761231231<br>+94 718908908</span>
          </div>  
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Email Addresses</h4>
            <span><a href="#">malcolmphotography@gmail.com</a><br><a href="#">mphotos@gmail.com</a></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-map-pin"></i>
            <h4>Office Location</h4>
            <span><a href="#">C 43/2 Rodrigue Road,<br>Kegalle, Sri Lanka</a></span>
          </div>
        </div>
        <div class="col-lg-12">
        <form id="contact" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="telephone" id="telephone" placeholder="Your Telephone..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
          <div class="popup" id="feedback-popup">
            Feedback sent successfully!
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>© 2024 Malcolm's Photography. All rights reserved.

          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  </body>
</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate form data
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($telephone)) {
        $errors[] = "Telephone is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    // Check if there are any errors
    if (empty($errors)) {
        // Insert data into the database
        $sql = "INSERT INTO feedback (name, telephone, email, subject, message) VALUES ('$name', '$telephone', '$email', '$subject', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>var feedbackSuccess = true;</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
    // Close database connection
    mysqli_close($conn);
}
?>
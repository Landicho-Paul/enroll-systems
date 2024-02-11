<!DOCTYPE html>
<html lang="en">
<head>
<?php 
session_start();
?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pampanga University - Enroll</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <script src="config/registervalidation.js"></script>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.php">EBS</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="../index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <br>
    <br>
    <?php
    if(isset($_SESSION['validation']))
    {
      if($_SESSION['validation'] == "OK")
      {
        echo '<div class="alert alert-success">
      Your application is Successfully Submitted, Please wait for your Enrollment approval!
    </div>';
      }
    }
    ?>

    <?php 
    session_unset();
    ?>
    <div class="section-title">
      <h2>Enroll now</h2>
      <p>
        Our shopping site stands out for its unwavering commitment to reliability, ensuring a seamless and trustworthy experience for our customers with a track record of dependable services, secure transactions, and prompt delivery, making us a reliable choice for all your shopping needs.</p>
    </div>

    <section>
    <div class="container mt-3">
      <h2>Select Your Appointment Schedule</h2>
      <p>Please check first the available schedules below.</p>  
      <br>          
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Slots</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>February 1, 2024 | Thursday</td>
            <td>9:00 AM - 10:00 AM</td>
            <td>10</td>
            <td><input type="radio" name="select" value="#"></td>
          </tr>
        </tbody>
      </table>
    </div>
    </section>

    <form action="config/register.php" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
          <h2>I. Create Student Portal Account</h2>
          <br>   
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Login Credentials</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" placeholder="Enter Username" name="user" id="name">
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">User Type</label>
                      <input type="number" class="form-control" placeholder="@student" name="extension" disabled>
                    </div>
                 </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" placeholder="Email Address" name="email" id="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" >
                  </div>
                </div>
                <!-- /.card-body -->

             
            </div>
          </div>

          <div class="col-md-6">
          <h2>II. Educational Attainment</h2>
          <br>   
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">About Educational Experiences</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">
                  <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Elementary</label>
                      <input type="text" class="form-control" placeholder="Enter school" name="elem" id="elem"  required>
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">Graduation Year</label>
                      <input type="number" class="form-control" name="elemyear" id="elemyear"  required max="9999" required>
                    </div>
                 </div>

                 <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Junior High School</label>
                      <input type="text" class="form-control" placeholder="Enter school" name="jhs" id="jhs" required>
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">Graduation Year</label>
                      <input type="number" class="form-control"  name="jhsyear" id="jhsyear" required max="9999" required>
                    </div>
                 </div>

                 <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Senior High School</label>
                      <input type="text" class="form-control" placeholder="Enter school" name="shs" id="shs" required>
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">Graduation Year</label>
                      <input type="number" class="form-control" id="shsyear" name="shsyear" required max="9999" required>
                    </div>
                 </div>
                </div>
                <!-- /.card-body -->

              
            </div>
          </div>

          <section class="container mt-4">
          <div class="row">
            <div class="col-md-12">
            <h2>III. Enrollment Form</h2>
            <br>   
              <div class="card">
                <div class="card-header">
                  <h2 class="card-title">General Information</h2>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               

                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">First Name</label>
                      <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                    </div>

                    <div class="form-group">
                      <label for="inputName">Middle Name</label>
                      <input type="text" class="form-control" id="mname" placeholder="Enter your middle name" name="mname" required>
                    </div>

                    <div class="form-group">
                      <label for="inputName">Last Name</label>
                      <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                    </div>

                    <div class="form-group">
                      <label for="genderSelect">Gender</label>
                      <select class="form-control" id="genderSelect" name="gender">
                        <option value="" selected></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="courseSelect">Course</label>
                      <select class="form-control"  name="course" id = "courseSelect">
                        <option value="" selected></option>
                        <option value="bscs">BS Computer Science</option>
                        <option value="bsit">BS Information Technology</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="courseSelect">Year</label>
                      <select class="form-control"  name="year" id = "yearSelect">
                        <option value="" selected></option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="Iv">Iv</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="datepicker">Date of Birth</label>
                      <input type="date" class="form-control" id="datepicker" placeholder="Select date" name="birthday" required>
                    </div>

                    <div class="form-group">
                      <label for="inputName">Home Address</label>
                      <input type="text" class="form-control" id="address"  name="address" required>
                    </div>

                    <div class="form-group">
                      <label for="inputName">Phone Number (Philippine Format)</label>
                      <input type="text" class="form-control" name="number" id="number" required pattern="^(09|\+639)\d{9}$" title="Please enter a valid Philippine phone number starting with '09' or '+639' followed by 9 digits">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Guardian name</label>
                      <input type="text" class="form-control"  name="guardianname" id="elemyear" required>
                    </div>

                    <div class="form-group">
                      <label for="inputName">Phone Number (Philippine Format)</label>
                      <input type="text" class="form-control" name="guardiannumber" id="guardiannumber" required pattern="^(09|\+639)\d{9}$" title="Please enter a valid Philippine phone number starting with '09' or '+639' followed by 9 digits">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Guardian Address</label>
                      <input type="text" class="form-control"  name="guardianaddress" id="guardianaddress" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <!-- /.card-body -->
               
              </div>
            </div>
          </div>
        </section>
        </div>
      </div>
    </section>
    </form>
  </div>
</section><!-- End Services Section -->


  </main><!-- End #main -->

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MYCART</h3>
            <p>
              San Joaqin <br>
              Sta.Ana, Pampanga<br>
              Philippines <br><br>
              <strong>Phone:</strong> +63912345678<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MYCART</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', function (event) {
      // Iterate through all text and textarea input elements
      document.querySelectorAll('input[type="text"], textarea').forEach(function (input) {
        // Convert each input value to sentence case
        input.value = toSentenceCase(input.value);
      });
    });

    function toSentenceCase(str) {
      return str.replace(/\w\S*/g, function (txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });
    }
  });
</script>

</body>

</html>
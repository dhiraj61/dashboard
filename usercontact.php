<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/stylehh.css">

  <title></title>
</head>

<body>
  <?php
  if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    echo "<script>window.open('userlogin.php','_self');</script>";
  }

  ?>
  <?php

  if ($_SESSION['studentid'] == true) {
    $id = $_SESSION['studentid'];
  ?>


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <nav class="site-nav mb-5">
      <div class="pb-2 top-bar mb-3">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-lg-9">
              <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block"></span></a>
              <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block"></span></a>
              <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block"></span></a>
            </div>

            <div class="col-6 col-lg-3 ">
              <a href="#" class="small mr-3">
                <div style="display:flex;align-items:center;justify-content:center;gap:2px;margin-left:5vw;">
                  <span class="icon-lock" name="logout"></span>
                  <form action="" method="post">
                    <input type="submit" name="logout" value="logout" style="background:none;border:none;color:white;margin-right:9vw">
                  </form>

                  <?php

                  $select = "select * from students where student_id='$id'";
                  $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'vtpfinal'), $select);
                  $row = mysqli_fetch_assoc($result);
                  // $image=$row['img'];

                  ?>
                  <button type="button" class="circular-button" data-toggle="modal" data-target="#studentProfileModal" style="position:absolute;top:-10px;border-radius:50%;overflow:hidden">
                    <img src="<?php echo $row['img'] ?>" style="width:50px;height:50px;border-radius:50%;">
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="studentProfileModal" tabindex="-1" role="dialog" aria-labelledby="studentProfileModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="studentProfileModalLabel" style="color:black;width:100%;text-align:center">Student Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="image-container">
                            <img src="<?php echo $row['img'] ?>" alt="Student Profile Image" style="height:25vh;margin-left:7vw">
                          </div>
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                <th scope="row">Student ID</th>
                                <td><?php echo $row['student_id'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Name</th>
                                <td><?php echo $row['name'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td><?php echo $row['email'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Phone</th>
                                <td><?php echo $row['phno'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Parents Phone</th>
                                <td><?php echo $row['pmno'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Gender</th>
                                <td><?php echo $row['gender'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Address</th>
                                <td><?php echo $row['address'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Section</th>
                                <td><?php echo $row['sec'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Semester</th>
                                <td><?php echo $row['semester'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Course</th>
                                <td><?php echo $row['course'] ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


            </div>
            </a>

          </div>

        </div>
      </div>
      </div>
      <div class="sticky-nav js-sticky-header">
        <div class="container position-relative">
          <div class="site-navigation text-center">
            <a href="userindex.php" class="logo menu-absolute m-0">AcademicFlow<span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
              <li><a href="userindex.php">Home</a></li>
              <li class="has-children">
                <a href="userelements.php">Learning Material</a>
                <a href="useratt.php">Attendance</a>


              <li><a href="userstaff.php">Our Staff</a></li>
              <li><a href="usernews.php">News</a></li>

              <li class="active"><a href="contact.php">Contact</a></li>
            </ul>



            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>

          </div>
        </div>
      </div>
    </nav>


    <div class="untree_co-hero overlay" style="background-image: url('images/img-school-2-min.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12">
            <div class="row justify-content-center ">
              <div class="col-lg-6 text-center ">
                <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
                <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                </div>

                <!-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p> -->

              </div>


            </div>

          </div>

        </div> <!-- /.row -->
      </div> <!-- /.container -->

    </div> <!-- /.untree_co-hero -->




    <div class="untree_co-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info">





            </div>
          </div>
          <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
            <form action="#">
              <div class="row">
                <div class="col-6 mb-3">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="col-6 mb-3">
                  <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="col-12 mb-3">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="col-12 mb-3">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>

                <div class="col-12">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
        </div>


      </div>
    </div> <!-- /.untree_co-section -->

    <div class="site-footer">


      <div class="container">

        <div class="row">
          <div class="col-lg-3 mr-auto">
            <div class="widget">
              <h3>About Us<span class="text-primary">.</span> </h3>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <p>A College Management System serves as the digital backbone of academic institutions, seamlessly integrating administrative, academic, and financial functions into a unified platform. From student admissions and registration to faculty management, timetable scheduling, attendance tracking, and examination management, this comprehensive system automates mundane tasks, streamlines processes, and enhances efficiency. With features like student portals, grade management, and communication tools, it fosters collaboration, transparency, and accountability among stakeholders, ensuring a smooth and productive educational experience for all.</p> -->
              <p>
                Vimal Tormal Poddar BCA College is a great place to learn about computers. It's in a good location and has nice facilities. The teachers are really good and helpful. They teach us everything about computers. We get to use the latest technology and software. The college helps us learn by doing internships and working with real companies. They also have events to keep us updated on what's happening in the computer world. It's a fun place with lots of activities. People who studied here are doing well in computer jobs all over the world. Companies like to hire students from here because they are really good at what they do.</p>
            </div> <!-- /.widget -->
            <div class="widget">
              <h3></h3>
              <ul class="list-unstyled social">
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->

          <div class="col-lg-2 ml-auto">
            <div class="widget">
              <h3></h3>
              <ul class="list-unstyled float-left links">
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->

          <div class="col-lg-3">
            <div class="widget">
              <h3></h3>
              <ul class="instafeed instagram-gallery list-unstyled">
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->


          <div class="col-lg-3">
            <div class="widget">
              <h3>Contact</h3>
              <address>Khodiyar Nagar 2</address>
              <ul class="list-unstyled links mb-4">
                <li><a href="tel://7016531943">7016531943</a></li>
                <li><a href="tel://7600860299">7600860299</a></li>
                <li><a href="tel://9409133783">9409133783</a></li>
                <li><a href="mailto:241akshat@gmail.com">241akshat@gmail.com</a></li>
                <li><a href="mailto:chaudharidhiraj715@gmail.com">chaudharidhiraj715@gmail.com</a></li>
                <li><a href="mailto:krishna@gmail.com">krishna@gmail.com</a></li>
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->

        </div> <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  <?php
  } else {

    echo "<script>window.open('userlogin.php','_self')</script>";
  }


  ?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
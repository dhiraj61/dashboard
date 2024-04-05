<?php

session_start();

if ($_SESSION['studentid'] == true) {
  $id = $_SESSION['studentid'];
?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="favicon.png">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <title>College Management System </title>
    <style>
      .logout {
        position: fixed;
        right: 10px;
        top: 5px;

      }

      .circular-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-color: #007bff;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        border: none;
        cursor: pointer;
        z-index: 1051;
        /* Ensure the button is above the modal */
      }

      .circular-button:focus {
        outline: none;
      }

      /* Adjusting the modal content */
      .modal-content {
        border-radius: 0;
        /* Remove border-radius to make it square */
      }

      .modal-body {
        text-align: center;
        /* Center aligning content */
      }

      .image-container {
        width: 150px;
        height: 150px;
        border: 2px solid black;
        border-radius: 0;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 20px;
      }

      .profile-image {
        max-width: 100%;
        max-height: 100%;
        display: block;
        margin: auto;
      }

      i {
        font-size: 6vh;
        color: skyblue;
      }
    </style>
  </head>

  <body>

    <?php
    if (isset($_POST['logout'])) {
      session_unset();
      session_destroy();
      echo "<script>window.open('userlogin.php','_self');</script>";
    }

    ?>


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <nav class="site-nav mb-5" style="min-width:100%">
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
                <div style="display:flex;align-items:center;justify-content:center;gap:2px;margin-left:2vw;">
                  <span class="icon-lock" name="logout"></span>
                  <form action="" method="post">
                    <input type="submit" name="logout" value="logout" style="background:none;border:none;color:white;">
                  </form>

                  <?php

                  $select = "select * from students where student_id='$id'";
                  $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'vtpfinal'), $select);
                  $row = mysqli_fetch_assoc($result);
                  // $image=$row['img'];

                  ?>
                  <button type="button" class="circular-button" data-toggle="modal" data-target="#studentProfileModal" style="position:absolute;top:-10px;left:14vw">
                    <img src="<?php echo $row['img'] ?>" alt="Student Profile Image" style="width:50px;height:50px;border-radius:50%">
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="studentProfileModal" tabindex="-1" role="dialog" aria-labelledby="studentProfileModalLabel" aria-hidden="true" data-backdrop="false" style="zindex:99999999999999">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="studentProfileModalLabel" style="color:black;width:100%;text-align:center">Student Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" style="z-index:9999999999">
                          <div class="image-container" style="z-index:9999999999">
                            <img class="profile-image" src="<?php echo $row['img'] ?>" alt="Student Profile Image">
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

              <li class="active"><a href="userindex.php">Home</a></li>

              <li class="has-children">

                <a href="userelements.php">Learning Material</a>
              </li>
              <li>
                <a href="useratt.php">Attendance</a>
              </li>

              <?php


              $sql = "select count(name) as name from notification";
              $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'vtpfinal'), $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
              <li><a href="userstaff.php">Our Staff</a></li>
              <li><a href="usernews.php">News </a></li>


              <li><a href="usercontact.php">Contact</a></li>
            </ul>


            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>

          </div>
        </div>
      </div>
    </nav>


    <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.jpg');">


      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-12">

            <div class="row justify-content-center ">

              <div class="col-lg-6 text-center ">
                <!-- <a href="#" href="" data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block">Watch the video</a> -->

                <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Education is the Mother of Leadership</h1>
                <!-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p> -->

              </div>


            </div>

          </div>

        </div>
      </div>

    </div>








    <div class="untree_co-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
            <p></p>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature">
              <i class="fa-brands fa-python"></i>
              <h3>Python Class</h3>
              <p>"Python, known for its simplicity and readability, empowers developers with its vast libraries and versatility, making it a favorite for scripting, web development, and data analysis."</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature">
              <i class="fa-solid fa-c"></i>
              <h3>C Class</h3>
              <p>"C, the venerable programming language, prized for its efficiency and portability, remains the cornerstone of system programming, embedded systems, and high-performance computing."</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature">
              <i class="fa-solid fa-c">++</i>
              <h3>C++ Class</h3>
              <p>"C++, an extension of C, adds powerful features like object-oriented programming and templates, making it a top choice for game development, system software, and performance-critical applications."</p>
            </div>
          </div>


          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
            <div class="feature">
              <i class="fa-brands fa-java"></i>
              <h3>Java Class</h3>
              <p>"Java, renowned for its platform independence and strong community support, serves as the backbone of many enterprise-level applications, mobile development, and large-scale systems."</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature">
              <i class="fa-solid fa-database"></i>
              <h3>SQL Class</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature">
              <i class="fa-solid fa-globe"></i>
              <h3>Web Designing</h3>
              <p>"Web designing blends creativity and technical expertise to craft visually appealing and user-friendly websites, encompassing elements like layout, typography, color theory, and user experience design."</p>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.untree_co-section -->










    <div class="untree_co-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom text-center mb-4">College News</h2>
            <p>"Vimal Tormal Poddar BCA College Embraces Digital Innovation: In an exciting development, Vimal Tormal Poddar BCA College has announced a pioneering initiative to integrate cutting-edge technology into its curriculum. With a focus on enhancing student learning experiences, the college is set to introduce virtual labs, AI-driven tutorials, and immersive online resources tailored to BCA students. This forward-thinking approach reflects the institution's commitment to staying ahead of the curve and preparing students for success in the digital age."</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          </div>

        </div>
      </div>
    </div> <!-- /.untree_co-section -->






    =

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
            </div>
          </div>

          <div class="col-lg-2 ml-auto">
            <div class="widget">
              <!-- <h3>Projects</h3> -->
              <ul class="list-unstyled float-left links">
                <!-- <li><a href="#">Web Design</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
              <li><a href="#">jQuery</a></li>
              <li><a href="#">Bootstrap</a></li> -->
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->

          <div class="col-lg-3">
            <!-- <div class="widget">
            <h3>Gallery</h3>
            <ul class="instafeed instagram-gallery list-unstyled">
              <li><a class="instagram-item" href="images/gal_1.jpg" data-fancybox="gal"><img src="images/gal_1.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_2.jpg" data-fancybox="gal"><img src="images/gal_2.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_3.jpg" data-fancybox="gal"><img src="images/gal_3.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_4.jpg" data-fancybox="gal"><img src="images/gal_4.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_5.jpg" data-fancybox="gal"><img src="images/gal_5.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_6.jpg" data-fancybox="gal"><img src="images/gal_6.jpg" alt="" width="72" height="72"></a>
              </li>
            </ul>
          </div>  -->
          </div>


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
            <!-- <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> License information: https://untree.co/license/ -->
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <!-- <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div> -->
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
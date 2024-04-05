<?php

session_start();

?>
<?php

if ($_SESSION['studentid'] == true) {
  $id = $_SESSION['studentid'];
?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="favicon.png">



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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                    <input type="submit" name="back" value="BACK" style="background:none;border:none;color:white;margin-left:-80vw;font-size:2.5vh">
                  </form>

                  <?php
                  if (isset($_POST["back"])) {
                    echo "<script>window.open('userindex.php','_self')</script>";
                  }
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

    </nav>


    <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.jpg');">


      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-12">

            <div class="row justify-content-center ">

              <div class="col-lg-6 text-center ">
                <?php
                if (isset($_POST['logout'])) {
                  session_unset();
                  session_destroy();
                  echo "<script>window.open('userlogin.php','_self');</script>";
                }

                if (isset($_SESSION['studentid'])) {
                  $id = $_SESSION['studentid'];
                ?>
                  <div style="position:absolute;top:-16vw;left:-20vw;color:white;font-size:2vw;">
                    <form action="" method="post">
                      <label for="">Date:</label>
                      <input type="date" name="date">
                      <input type="submit" name="submit">
                    </form>
                  </div>

                  <?php
                  require('connection.php');
                  if (isset($_POST['submit'])) {
                    $date = $_POST['date'];
                    $sql = "SELECT COUNT(atten) AS count FROM attendence WHERE date='$date' AND stud_id='$id' AND atten='p'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $count = $row['count'];
                    $sql2 = "SELECT COUNT(sub) AS count2 FROM attendence WHERE date='$date' AND stud_id='$id'";
                    $result2 = mysqli_query($con, $sql2);
                    $row2 = mysqli_fetch_array($result2);
                    $count2 = $row2['count2'];
                    if ($count2 > 0) {
                      $count3 = ($count / $count2) * 100;
                    } else {
                      $count3 = 0;
                    }
                  ?>
                    <div style="position:absolute;top:-10vw;left:-24vw;color:white;font-size:2vw;">
                      <?php echo "Total Present: $count"; ?>
                    </div>

                    <div style="position:absolute;top:-10vw;left:-3vw;color:white;font-size:2vw;">
                      <?php echo "Total Lectures: $count2"; ?>
                    </div>

                    <div style="position:absolute;top:-3vw;left:-16vw;color:white;font-size:2vw;">
                      <?php echo "Present Rate is : $count3 %"; ?>
                    </div>

                    <div style="position:absolute;top:3vw;left:-20vw;color:white;font-size:2vw;width:400px;height:300px">
                      <canvas id='myPieChart' width='100' height='100'></canvas>
                    </div>

                  <?php
                  }
                  ?>

                  <div class="container" style="width:45vw;position:absolute;top:-15vw;left:22vw;overflow-y:scroll;height:78vh;">
                    <h2 style="text-align:center;color:white;font-size:4vw">Attendance Records</h2>
                    <table class="table table-bordered" style="color:white;">
                      <thead class="thead-dark">
                        <tr>
                          <th>Name</th>
                          <th>Section</th>
                          <th>Course</th>
                          <th>Semester</th>
                          <th>Subject</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql5 = "select * from attendence where stud_id='$id'";
                        $result5 = mysqli_query($con, $sql5);

                        while ($row5 = mysqli_fetch_array($result5)) {
                        ?>
                          <tr>
                            <td><?php echo $row5['name'] ?></td>
                            <td><?php echo $row5['sec'] ?></td>
                            <td><?php echo $row5['course'] ?></td>
                            <td><?php echo $row5['semester'] ?></td>
                            <td><?php echo $row5['sub'] ?></td>
                            <td><?php echo $row5['date'] ?></td>
                          </tr>
                      <?php
                        }
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>

              </div>


            </div>

          </div>

        </div>
      </div>

    </div>


  <?php
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var present = <?php echo isset($count3) ? $count3 : 0; ?>;
    var absent = 100 - present;

    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Present', 'Absent'],
        datasets: [{
          label: 'Attendance',
          data: [present, absent],
          backgroundColor: [
            '#022d36',
            '#ffffff',
          ],
          borderColor: [
            '#022d36',
            '#ffffff',
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'Attendance Percentage'
        },
        tooltips: {
          callbacks: {
            label: function(tooltipItem, data) {
              var dataset = data.datasets[tooltipItem.datasetIndex];
              var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                return previousValue + currentValue;
              });
              var currentValue = dataset.data[tooltipItem.index];
              var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
              return percentage + "%";
            }
          }
        }
      }
    });
  </script>


  </body>

  </html>
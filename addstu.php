<?php
session_start();

?>

<?php


if ($_SESSION['email'] == true) {
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html,
      body {
        width: 100%;
        height: 100%;
        overflow: hidden;
        /* Prevent scrolling of the entire page */
      }

      .wrapper {
        width: 100%;
        height: 100%;
      }

      .head {
        width: 100%;
        height: 5vw;
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
      }

      .left {
        width: 18.8vw;
        height: 100%;
        border-bottom: 2px solid #000000;
        background-color: #212631;
        ;
      }

      .left h1 {
        color: white;
        font-size: 1.6vw;
        font-family: 'Times New Roman', Times, serif;
        font-weight: 400;
        margin-left: 1vw;
        margin-top: 1.8vw;
        box-sizing: border-box;
      }

      .right {
        width: 80.2vw;
        height: calc(100% - 30vw);
        display: flex;
        color: black;
        align-items: center;
        justify-content: space-between;

      }

      .right1 {
        width: 40vw;
        display: flex;
        align-items: center;

        gap: 8%;
        margin-left: 2vw;

      }

      .right1 h1 {
        font-size: 1.2vw;
        font-weight: 200;
        text-transform: capitalize;




      }

      .right2 {
        width: 40.20vw;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 4vw;
        gap: 6%;


      }

      .right2 h1 {
        font-size: 1vw;
      }

      .right h5 {
        color: #D3D4D6;
      }

      .sidebarmain {
        width: 100%;
        height: calc(100% - 4vw);

        display: flex;
      }

      .sidebar {
        width: 19vw;
        height: 100%;
        overflow-y: scroll;
        background-color: #212631;
      }

      .sidebar .menus {
        text-decoration: none;
        color: rgb(164, 163, 163);
        font-family: "Times New Roman", Times, serif;
        margin-top: 3vw;
      }

      .sidebar .menus a {
        text-decoration: none;
        color: rgb(0, 0, 0);
      }

      .sidebar .menus a h1 {
        font-size: 1.5vw;
        padding: 1vw 1.4vw;
        color: white;
      }

      .sidebar::-webkit-scrollbar {
        width: 5px;
      }

      .sidebar::-webkit-scrollbar-thumb {
        background-color: #8a8a8a;
        border-radius: 10px;
      }

      .content {
        width: calc(100% - 18vw);
        height: 100%;

        overflow: hidden;
      }

      /* .nav{
        width: 100%;
        height: 4vw;
        background-color: #FFFFFF;
        display: flex;
        justify-content: space-between;
        align-items: center;
      } */

      .cards {
        width: 100%;
        height: 12vw;
        background-color: #edeaed;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        position: relative;
      }

      .contents {
        width: 100%;
        height: calc(100% - 12vw);

        overflow-y: scroll;
      }

      .contents::-webkit-scrollbar {
        width: .5vw;
      }

      .contents::-webkit-scrollbar-thumb {
        background-color: #8a8a8a;
        border-radius: 10px;
      }

      .car:nth-child(1) {
        width: 18vw;
        height: 80%;
        background-color: #5856D6;

        border-radius: 22px;
        position: relative;
      }

      .car:nth-child(2) {
        width: 18vw;
        height: 80%;
        background-color: #3399FF;
        border-radius: 22px;

        position: relative;
      }

      .car:nth-child(3) {
        width: 18vw;
        height: 80%;
        background-color: rgb(209, 181, 59);
        border-radius: 22px;

        position: relative;
      }

      .car:nth-child(4) {
        width: 18vw;
        height: 80%;
        background-color: #E55353;
        border-radius: 22px;

        position: relative;
      }

      .dropdown h2 {
        font-size: 1.4vw;
        transition: all 0.4s ease-in-out;
      }

      .dropdown2 h2 {
        font-size: 1.4vw;
        transition: all 0.4s ease-in-out;
      }

      .dropdown,
      .dropdown2 {
        display: none;
        transition: all 0.4s ease-in-out;
      }

      .car:hover {
        transform: translateY(-3px);
        transition: all 0.5s ease;
      }

      .container2 {
        width: 100%;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: black;
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
      }

      .form-row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 15px;
      }

      .form-row label {
        width: 150px;
        margin-right: 10px;
        flex-shrink: 0;
        text-align: right;
        padding-top: 5px;
      }

      .form-row input,
      .form-row select,
      .form-row textarea {
        flex: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .form-row textarea {

        height: 80px;
        resize: vertical;
      }

      .btn-row {
        text-align: center;
      }

      .btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
      }

      .btn:hover {
        background-color: #0056b3;
      }

      .error-message {
        color: #ff0000;
        font-size: 0.9rem;
        margin-top: 5px;
      }

      input,
      textarea,
      select {
        outline: 1px solid black;
      }

      .register {
        display: none;

      }

      .circle:hover .register {
        display: block;
        transition: all 1s ease-in-out;
        cursor: pointer;
        background-color: grey;
      }

      .arrow4:hover {
        rotate: (180deg);

      }

      .register h5:hover {
        background-color: #dadada;
        border-radius: 3px;
      }
    </style>
  </head>

  <body>
    <div class="wrapper">
      <div class="head">
        <div class="left" style="border-right: 1px solid black;">
          <h1>ACADEMIC FLOW</h1>
        </div>
        <div class="right">
          <div class="right1">

            <h1 style="font-size:5vh;font-family:times new roman,times,serif">ADD STUDENT</h1>

          </div>
          <?php
          require('connection.php');
          if (isset($_POST['register'])) {
            $name = $_POST['adminName'];

            $email = $_POST['email'];

            $password = $_POST['password'];

            $phoneNumber = $_POST['phoneNumber'];

            $image = $_FILES['image']['name'];

            $image_tmp = $_FILES['image']['tmp_name'];
            $folder = "imge/" . $image;

            move_uploaded_file($image_tmp, $folder);

            $query = "insert into adminpage(name,email,password,phno,img) values('$name','$email','$password','$phoneNumber','$folder')";

            $result = mysqli_query($con, $query);

            if ($result) {
              echo "<script>alert('Registered Successfully');</script>";
            }
          }

          $select = "select * from adminpage";
          $result1 = mysqli_query($con, $select);
          $imgs = mysqli_fetch_array($result1);
          $counts = mysqli_num_rows($result1);
          $emails = $_SESSION['email'];
          $select2 = "select * from adminpage  where email='$emails'";
          $result2 = mysqli_query($con, $select2);
          $imgs2 = mysqli_fetch_array($result2);



          ?>

          <div class="right2" style="padding-right:6vw;">


            <div class="circle" style="">
              <h4><i class="fa-solid fa-circle " id="ar" style="font-size:3.6vw;"></i> <i class="ri-arrow-down-s-fill arrow4"> </i> <img src="<?php echo $imgs2['img'] ?>" alt="" width="58vw" height="56vw" style="position:absolute;right:9vw;border-radius:50%;border:none"></h4>
              <div class="register" style="color:black;z-index:999999;position:absolute;background-color:white;right:-1vw;width:11vw;">
                <h5 id="profileModalTrigger" style="color: black; text-transform: capitalize; font-size: 1.4vw; width: 100%; cursor: pointer;">Profile</h5>
                <div class="modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="profileModalLabel">Admin Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="closeicon">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">

                        <img src="<?php echo $imgs2['img'] ?>" class="img-fluid rounded-circle mb-3" alt="Profile Image" style="width: 150px; height: 150px;">
                        <table>
                          <tr>
                            <td>Name :</td>
                            <td>
                              <h4><?php echo $imgs2['name'] ?></h4>
                            </td>
                          </tr>
                          <tr>
                            <td>Email :</td>
                            <td>
                              <p><?php echo $imgs2['email'] ?></p>
                            </td>
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td>
                              <p><?php echo $imgs2['phno'] ?></p>
                            </td>
                          </tr>

                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <h5 id="registerModalTrigger" style="color: black; text-transform: capitalize; font-size: 1.4vw; width: 100%; cursor: pointer;">Register</h5>


              </div>
              <div class="modal" id="registerModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Register Admin</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="closeit">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="registerForm" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="adminName">Admin Name</label>
                          <input type="text" class="form-control" id="adminName" name="adminName" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                          <label for="phoneNumber">Phone Number</label>
                          <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                        </div>
                        <div class="form-group">
                          <label for="image">Image</label>
                          <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <input type="submit" name="register" value="Register" class="btn btn-success">
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <form action="" method="post">
            <input type="submit" name="logout" value="Logout" class="btn btn-danger" style="position:absolute;right:3px;top:1vw;width:5vw;font-size:1vw;text-align:center;">
          </form>
        </div>
        <?php
        if (isset($_POST['logout'])) {
          session_unset();
          echo "<script>window.open('login.php','_self')</script>";
        }
        ?>


      </div>
      <div class="sidebarmain">
        <div class="sidebar">
          <div class="menus">
            <a href="#">
              <h1>HOME</h1>
            </a>
            <a href="home.php">
              <h1>TIME TABLE</h1>
            </a>
            <a href="home.php">
              <h1>ATTENDANCE</h1>
            </a>
            <a href="studattrep.php" class="att">
              <h1>ATTENDANCE REPORT</h1>
            </a>
            <a href="home.php">
              <h1>LEARNING MATERIAL</h1>
            </a>
            <a href="#" class="note">
              <h1 style="font-size:1.8vw;">Publish Notice</h1>
            </a>

            <div>
              <a href="#">
                <div style="
                    display: flex;
                    align-items: center;
                    transition: all 0.4s ease-in-out;
                  ">
                  <h1 class="faculty">FACULTY</h1>
                  <i class="ri-arrow-down-s-fill arrow1" style="font-size: 2vw; color: white"></i>
                </div>
              </a>
              <div class="dropdown" style="margin-left: 3vw; color: white">
                <a href="addfac.php" style="text-decoration:none;color:white;">
                  <h2>Add Faculty</h2>
                </a>
                <a href="checkfac.php" style="text-decoration:none;color:white;">
                  <h2>Check Faculty</h2>
                </a>
              </div>
            </div>
            <div>
              <a href="#">
                <div style="
                    display: flex;
                    align-items: center;
                    transition: all 0.4s ease-in-out;
                  ">
                  <h1 class="student" style="font-size: 1.9vw">Students</h1>
                  <i class="ri-arrow-down-s-fill arrow2" style="font-size: 2vw; color: white"></i>
                </div>
              </a>
              <div class="dropdown2" style="margin-left: 3vw; color: white">
                <a href="#" style="text-decoration:none;color:white;">
                  <h2>Add Student</h2>
                </a>
                <a href="checkstu.php" style="text-decoration:none;color:white;">
                  <h2>Check Students</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="nav"></div>
          <?php

          require('connection.php');
          $stu = "select COUNT(student_id) as count from students";
          $result = mysqli_query($con, $stu);
          $row = mysqli_fetch_array($result);

          $fac_count = "select COUNT(fac_id) as count from faculty";
          $result1 = mysqli_query($con, $fac_count);
          $row1 = mysqli_fetch_array($result1);

          $course = "select COUNT(DISTINCT course) as count from students";
          $result3 = mysqli_query($con, $course);
          $row2 = mysqli_fetch_array($result3);

          ?>
          <div class="cards" style="font-family: 'Times New Roman', Times, serif;">
            <div class="car"><i class="fa-solid fa-user-tie" style="font-size: 4.5vw;position:absolute;top:25%;right:5%;"></i>
              <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of Admin</h4>
              <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;">1</button>
            </div>
            <div class="car"><i class="fa-solid fa-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
              <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of Faculty</h4>
              <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $row1['count'] ?></button>
            </div>
            <div class="car"><i class="fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
              <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of Students</h4>
              <button style="font-size: 3vw;position:absolute;top:33%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $row['count'] ?></button>
            </div>
            <div class="car"><i class="fa-solid fa-book" style="font-size: 4.5vw;position:absolute;top:25%;right:5%;"></i>
              <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of Courses</h4>
              <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $row2['count'] ?></button>
            </div>

          </div>
          <div class="contents">
            <div class="wra" style="margin:0 2.5vw 0 0;">
              <h1 style="text-align:center;margin-top:1vw;">STUDENT</h1>
              <form action="#" method="POST" id="myForm" style="margin-top: 3vw;" enctype="multipart/form-data">
                <div class="form-row">
                  <label for="facultyName">Student Name:</label>
                  <input type="text" id="facultyName" name="name" placeholder="Name" required>
                  <label for="section">Section:</label>
                  <select class="form-control" id="section" name="section" required>
                    <option value="">Select Section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>
                </div>
                <div class="form-row">
                  <label for="">Course</label>
                  <select class="form-control" id="course" name="course" required>
                    <option value="">Select Department</option>
                    <option value="BCA">BCA</option>
                    <option value="Bcom">Bcom</option>
                    <option value="BBA">BBA</option>
                  </select>
                  <label for="phno">Phone Number:</label>
                  <input type="text" id="phno" name="phno" placeholder="Phone" pattern="[0-9]{1,10}" required>
                </div>
                <div class="form-row">
                  <label for="pmno">Parents Mobile Number:</label>
                  <input type="text" id="pmno" name="pmno" placeholder="Parent's phone number" pattern="[0-9]{1,10}" required>
                  <label for="dob">Date of Birth:</label>
                  <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-row">
                  <label for="year">Year:</label>
                  <select class="form-control" id="year" name="year" required>
                    <?php
                    $current_year = date("Y");
                    for ($year = 1900; $year <= 2099; $year++) {
                      echo "<option value=\"$year\"";
                      if ($year == $current_year) {
                        echo " selected";
                      }
                      echo ">$year</option>";
                    }
                    ?>
                  </select>
                  <label for="email">Email Address:</label>
                  <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-row">
                  <label for="address">Address:</label>
                  <textarea id="address" name="address" placeholder="address" required></textarea>
                </div>
                <div class="form-row">
                  <label for="gender">Gender:</label>
                  <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                  <label for="img">Image:</label>
                  <input type="file" name="img">
                  <label for="semester">Semester:</label>
                  <select class="form-control" id="semester" name="semester" required>
                    <option value="">Select Semester</option>
                    <option value="Sem1">Sem1</option>
                    <option value="Sem2">Sem2</option>
                    <option value="Sem3">Sem3</option>
                    <option value="Sem4">Sem4</option>
                    <option value="Sem5">Sem5</option>
                    <option value="Sem6">Sem6</option>
                  </select>
                </div>
                <div class="btn-row">
                  <input type="submit" name="submit" value="Submit" style="color:white;background-color:blue;padding:1vw;border-radius:20px;">
                </div>
              </form>

            </div>
            <?php

            if (isset($_POST['submit'])) {

              $name = $_POST['name'];
              $section = $_POST['section'];
              $course = $_POST['course'];
              $email = $_POST['email'];
              $phone = $_POST['phno'];
              $pphone = $_POST['pmno'];
              $dob = $_POST['dob'];
              $section = $_POST['section'];

              $year = $_POST['year'];

              $semester = $_POST['semester'];
              $gender = $_POST['gender'];
              $address = $_POST['address'];
              $image = $_FILES['img']['name'];
              $image_tmp = $_FILES['img']['tmp_name'];
              $folder = "imge/" . $image;
              move_uploaded_file($image_tmp, $folder);


              $con = mysqli_connect('localhost', 'root', '', 'vtpfinal');
              if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "SELECT MAX(student_id) AS max_id FROM students";
              $checkresult = mysqli_query($con, $sql);
              if ($checkresult && mysqli_num_rows($checkresult) > 0) {
                $row = mysqli_fetch_assoc($checkresult);
                $max_id = $row['max_id'];
                $id_increment = (int) substr($max_id, 2) + 1;
                $id = "ST" . str_pad($id_increment, 4, '0', STR_PAD_LEFT);
              } else {
                $id = "ST0001";
              }


              $insert = "INSERT INTO students (student_id, name, email, phno, pmno, sec, course, year, dob,semester, gender, address, img) VALUES ('$id', '$name', '$email', '$phone', '$pphone', '$section', '$course', '$year', '$dob','$semester', '$gender', '$address', '$folder')";
              $result = mysqli_query($con, $insert);
              if ($result) {
                echo "<script>alert('Data inserted')</script>";
                echo "<script>window.open('addstu.php','_self')</script>";
              } else {
                echo "Error: " . $insert . "<br>" . mysqli_error($con);
              }


              mysqli_close($con);
            }
            ?>
          </div>
        </div>
      </div>
    <?php
  } else {
    echo "<script>window.open('login.php','_self')</script>";
  }

    ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
      var lean = document.querySelector(".lean");
      var circle = document.querySelector('.circle');
      var register = document.querySelector(".register");
      var closeit = document.querySelector(".closeit");
      var registerModal = document.querySelector("#registerModal");
      var modal = document.querySelector(".modal");
      var closeicon = document.querySelector(".closeicon");
      var closeicon2 = document.querySelector(".closeicon2");
      var modal_backdrop = document.querySelector(".modal-backdrop .show");
      var body = document.querySelector("body");
      console.log(modal);
      console.log(closeicon);
      closeicon.addEventListener("click", function() {
        modal.style.display = "none";
        var backdropElement = document.querySelector('.modal-backdrop.show');


        if (backdropElement) {

          backdropElement.classList.remove('modal-backdrop');

          backdropElement.classList.remove('show');
        }


      })
      closeit.addEventListener("click", function() {
        var backdropElement = document.querySelector('.modal-backdrop.show');

        registerModal.style.display = "none";

        if (backdropElement) {

          backdropElement.classList.remove('modal-backdrop');

          backdropElement.classList.remove('show');
        }

        modal.style.opacity = "0px";
      })

      $(document).ready(function() {
        $("#registerModalTrigger").click(function() {
          $('#registerModal').modal('show');
        });
      });
      $(document).ready(function() {
        $("#profileModalTrigger").click(function() {
          $('#profileModal').modal('show');
        });
      });
      var faculty = document.querySelector(".faculty");
      var dropdown = document.querySelector(".dropdown");
      var dropdown2 = document.querySelector(".dropdown2");
      var arrow1 = document.querySelector(".arrow1");
      var arrow2 = document.querySelector(".arrow2");
      var student = document.querySelector(".student");
      count = 1;
      faculty.addEventListener("click", function() {
        if (count == 1) {
          dropdown.style.transition = "all 3s ease";
          dropdown.style.display = "block";

          arrow1.style.transform = "rotate(180deg)";
          arrow1.style.transition = "all 0.5s ease";
          count = 0;
        } else {
          dropdown.style.display = "none";
          arrow1.style.transform = "rotate(0deg)";

          count = 1;
        }
      });
      count1 = 1;
      student.addEventListener("click", function() {
        if (count1 == 1) {
          dropdown2.style.transition = "all 3s ease";
          dropdown2.style.display = "block";

          arrow2.style.transform = "rotate(180deg)";
          arrow2.style.transition = "all 0.5s ease";
          count1 = 0;
        } else {
          dropdown2.style.display = "none";
          arrow2.style.transform = "rotate(0deg)";

          count1 = 1;
        }
      });
      const form = document.getElementById('myForm');
      form.addEventListener('submit', function(event) {
        const inputs = form.querySelectorAll('input, select, textarea');
        let isValid = true;

        inputs.forEach(input => {
          if (!input.checkValidity()) {
            isValid = false;
            input.classList.add('error');
            const errorMessage = input.dataset.errorMessage || 'Please fill out this field.';
            const errorElement = document.createElement('div');
            errorElement.classList.add('error-message');
            errorElement.textContent = errorMessage;
            input.parentNode.insertBefore(errorElement, input.nextSibling);
          } else {
            input.classList.remove('error');
            const errorElement = input.nextElementSibling;
            if (errorElement && errorElement.classList.contains('error-message')) {
              errorElement.remove();
            }
          }
        });

        if (!isValid) {
          event.preventDefault();
        }
      });
    </script>
  </body>

  </html>
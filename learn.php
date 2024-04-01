<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
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

        /* .cards {
        width: 100%;
        height: 12vw;
        background-color: #edeaed;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        position: relative;
      } */

        .contents {
            width: 70%;
            height: 100vh;
         
            overflow-y: scroll;
          
        }

        .contents::-webkit-scrollbar {
            width: .5vw;
        }

        .contents::-webkit-scrollbar-thumb {
            background-color: #8a8a8a;
            border-radius: 10px;
        }

        /* .car:nth-child(1) {
        width: 18vw;
        height: 80%;
        background-color: #5856D6;
        
        border-radius: 22px;
        position: relative;
      }
      .car:nth-child(2) {
        width: 18vw;
        height: 80%;
        background-color:#3399FF;
        border-radius: 22px;
        
        position: relative;
      }
      .car:nth-child(3) {
        width: 18vw;
        height: 80%;
        background-color: rgb(209,181,59);
        border-radius: 22px;
        
        position: relative;
      }
      .car:nth-child(4) {
        width: 18vw;
        height: 80%;
        background-color: #E55353;
        border-radius: 22px;
        
        position: relative;
      } */

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

       

        .custom-file-label::after {
            content: "Choose";
        }

        .btn-primary {
            margin-top: 10px;
        }

        /* Custom styles */
      

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            transform:translateY(-10%)
        }

      
        .file-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .file-icon {
            font-size: 30px;
            margin-right: 10px;
        }

        .hello {
            display: flex;
            align-items: center;
            gap: 1vw;
        }

        i {
            font-size: 3vw;
        }

        h5 {
            font-size: 2.2vw;
            margin-top:1vw;
        }
        .custom-card {
        width: 300px;
        height: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        text-align: center;
    }

    .pdf-icon {
        font-size: 4rem;
        margin-bottom: 20px;
    }

    .details {
        margin-bottom: 20px;
    }

    .btn-group {
        display: flex;
        justify-content: center;
    }

    .btn {
        padding: 10px 20px;
        margin: 0 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }
    .register{
          display:none;
          
        }
        .circle:hover .register{
          display:block;
          transition:all 1s ease-in-out;
          cursor:pointer;
          background-color: grey;
        }
      .arrow4:hover{
        rotate:(180deg);
       
        }
        .register h5:hover{
          background-color: #dadada;
          border-radius:3px;
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
                    <!-- <h1><i class="fa-solid fa-bars"></i></h1> -->
                    <h1 class="text"></h1>


                </div>
               
         <?php
            require('connection.php');
            if(isset($_POST['register']))
            {
$name=$_POST['adminName'];

$email=$_POST['email'];

$password=$_POST['password'];

$phoneNumber=$_POST['phoneNumber'];

$image=$_FILES['image']['name'];

$image_tmp=$_FILES['image']['tmp_name'];
$folder="imge/".$image;

move_uploaded_file($image_tmp,$folder);

$query="insert into adminpage(name,email,password,phno,img) values('$name','$email','$password','$phoneNumber','$folder')";

$result=mysqli_query($con,$query);

if($result)
{
  echo "<script>alert('Registered Successfully');</script>";

}
            }
            
    $select="select * from adminpage";
    $result1=mysqli_query($con,$select);
    $imgs=mysqli_fetch_array($result1);
    $counts=mysqli_num_rows($result1);
$emails=$_SESSION['email'];
    $select2="select * from adminpage  where email='$emails'";
    $result2=mysqli_query($con,$select2);
    $imgs2=mysqli_fetch_array($result2);
  
            
            
            ?>
         <div class="right2" style="padding-right:6vw;">
          
          <h4><i class="ri-notification-3-line"></i></h4>
          <div class="circle" style="">
          <h4><i class="fa-solid fa-circle " id="ar" style="font-size:3.6vw;"></i>   <i class="ri-arrow-down-s-fill arrow4"> </i> <img src="<?php echo $imgs2['img']?>" alt="" width="58vw" height="56vw" style="position:absolute;right:10.3vw;border-radius:50%;border:none"></h4>
          <div class="register" style="color:black;z-index:999999;position:absolute;background-color:white;right:1.8vw;width:11vw;">
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
                   
                    <img src="<?php echo $imgs2['img']?>" class="img-fluid rounded-circle mb-3" alt="Profile Image" style="width: 150px; height: 150px;">
                    <table>
                      <tr>
                        <td>Name :</td>
                        <td>
                    <h4><?php echo $imgs2['name']?></h4>
                    </td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>
                    <p><?php echo $imgs2['email']?></p>
          </td>
                    </tr>
                    <tr> 
                      <td>Phone Number</td> <td> <p><?php echo $imgs2['phno']?></p>
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
        </div>
        <form action="" method="post">
          <input type="submit" name="logout" value="Logout" class="btn btn-danger" style="margin-right:1vw;position:absolute;right:6px;top:1vw;width:6vw;font-size:1vw;" >
        </form>
<?php 

if(isset($_POST['logout']))
{
  session_unset();
  echo "<script>window.open('login.php','_self')</script>";
}

?>
      </div>
        <div class="sidebarmain">
            <div class="sidebar">
                <div class="menus">
                    <a href="home.php" class="home">
                        <h1>HOME</h1>
                    </a>
                    <a href="time.php" class="time">
                        <h1>TIME TABLE</h1>
                    </a>
                    <a href="att_copy.php" class="att">
                        <h1>ATTENDENCE</h1>
                    </a>
                    <a href="#" class="lean">
                        <h1>LEARNING MATERIAL</h1>
                    </a>
                    <a href="notice.php" class="note">
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
                            <a href="addstu.php" style="text-decoration:none;color:white;">
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
          $stu="select COUNT(student_id) as count from students";
          $result=mysqli_query($con,$stu);
          $row=mysqli_fetch_array($result);

          $fac_count="select COUNT(fac_id) as count from faculty";
          $result1=mysqli_query($con,$fac_count);
          $row1=mysqli_fetch_array($result1);

          $course="select COUNT(DISTINCT course) as count from students";
          $result3=mysqli_query($con,$course);
          $row2=mysqli_fetch_array($result3);
          
          ?>

<div style="width:100%;height:100%;background-color:#dadada;display:flex;">
                <div class="contents">

                    <div class="container mt-5 ">
                        <div class="row justify-content-center ">
                            <div class="col-md-6">
                                <h2 class="text-center">Learning Material Upload</h2>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <?php
                                    // Assuming you have established a database connection already
                                    $query = "SELECT DISTINCT course FROM students";
                                    $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'vtpfinal'), $query);
                
                                    if (!$result) {
                                        die("Database query failed.");
                                    }
                                    ?>
                
                                    <div class="form-group">
                                        <label for="courseSelect">Select Course:</label>
                                        <select class="form-control" id="courseSelect" name="course">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $course = $row['course'];
                                                echo "<option value='$course'>$course</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <label for="semesterSelect">Select Semester:</label>
                                        <select class="form-control" id="semesterSelect" name="semester">
                                            <option value="">SELECT SEMESTER</option>
                                            <option value="Sem1">Sem1</option>
                                            <option value="Sem2">Sem2</option>
                                            <option value="Sem3">Sem3</option>
                                            <option value="Sem4">Sem4</option>
                                            <option value="Sem5">Sem5</option>
                                            <option value="Sem6">Sem6</option>
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" id="fileInput" name="file" class="custom-file-input">
                                            <label class="custom-file-label" for="fileInput">Choose PDF file</label>
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fileName" name="name" placeholder="Enter File Name">
                                    </div>
                
                                    <div class="form-group">
                                        <input type="submit" value="Upload" name="upload" class="btn btn-primary btn-block" style="margin-left:-0.1vw;">
                                    </div>
                
                                
                                </form>
                              
                        </div>
                                          </div>
                     
                     
                    </div>
                             
                  
                                          </div>
                                         
                    <?php
                    require('connection.php');
                    if (isset($_POST['upload'])) {
                        $file_name = $_FILES['file']['name'];
                        $file_temp = $_FILES['file']['tmp_name'];
                        $folder = "imge/" . $file_name;
                        move_uploaded_file($file_temp, $folder);
                
                        $name = $_POST['name'];
                        $course = $_POST['course'];
                        $semester = $_POST['semester'];
                
                        $sql = "INSERT INTO material (name, file, course, sem) VALUES ('$name', '$folder', '$course', '$semester')";
                        $res = mysqli_query($con, $sql);
                        if ($res) {
                            echo "<script>alert('Data inserted.');</script>";
                            echo "<script>window.open('learn.php', '_self');</script>";
                        }
                    }
                    ?>
                
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                
                
                
                

                    <div class="dip" style="width:30%;height:100%;background-color:#dadada;overflow-y:scroll;border-left:1px solid white">
                    <h3 style="text-align:center; margin:2vw 0;">Uploaded content</h3>

                    <!-- <h2 class="text-center mb-4" style="color:white;">PDF File Management</h2> -->



    <?php
    require('connection.php');
    $sql = "select * from material";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
       <div class="custom-card" style="color:black;display:inline-block;margin:1vw 2vw;background-color:white;">
   
    <div class="pdf-icon">
        <i class="ri-file-pdf-2-line"></i>
    </div>
  
    <div class="details">
        <h5 style="font-size:1.7vw;"><?php echo $row['name'] ?></h5>
    
        <p>Semester: <?php echo $row['sem'] ?></p>
       
       COURSE: <?php echo $row['course'] ?></p>
    </div>
  
    <div class="btn-group">
     
        <a href="<?php echo $row['file'] ?>" class="btn btn-primary">View</a>
     
        <form action="faclearndel.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $row['name'] ?>">
            <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
        </form>
    </div>
</div>
   

    <?php
    }

    require('connection.php');
    if (isset($_POST['delete'])) {
        echo "<script>window.open('faclearndel.php','_self');</script>";
    }

    ?>
            </div>
                </div>
              </div>
             
            </div>
          
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
          $(document).ready(function () {
        $("#registerModalTrigger").click(function () {
            $('#registerModal').modal('show');
        });
    });
    $(document).ready(function () {
            $("#profileModalTrigger").click(function () {
                $('#profileModal').modal('show');
            });
        });
      var faculty = document.querySelector(".faculty");
      var dropdown = document.querySelector(".dropdown");
      var dropdown2 = document.querySelector(".dropdown2");
      var arrow1 = document.querySelector(".arrow1");
      var arrow2 = document.querySelector(".arrow2");
      var student = document.querySelector(".student");
      var home=document.querySelector(".home");
      var time=document.querySelector(".time");
      var att=document.querySelector(".att");
      var lean=document.querySelector(".lean");
      var circle=document.querySelector('.circle');
      var register=document.querySelector(".register");
      var closeit=document.querySelector(".closeit");
      var registerModal=document.querySelector("#registerModal");
      var modal=document.querySelector(".modal");
      var closeicon=document.querySelector(".closeicon");
      var closeicon2=document.querySelector(".closeicon2");
      var modal_backdrop=document.querySelector(".modal-backdrop .show");
      var body=document.querySelector("body");
      console.log(modal);
        console.log(closeicon);
        closeicon.addEventListener("click",function(){
          modal.style.display="none";
          var backdropElement = document.querySelector('.modal-backdrop.show');


if (backdropElement) {
    
    backdropElement.classList.remove('modal-backdrop');

    backdropElement.classList.remove('show');
}
   
        
        })
        closeit.addEventListener("click",function(){
          var backdropElement = document.querySelector('.modal-backdrop.show');
     
          registerModal.style.display="none";
         
if (backdropElement) {
    
    backdropElement.classList.remove('modal-backdrop');

    backdropElement.classList.remove('show');
}
   
          modal.style.opacity="0px";
        })
   

        var faculty = document.querySelector(".faculty");
        var dropdown = document.querySelector(".dropdown");
        var dropdown2 = document.querySelector(".dropdown2");
        var arrow1 = document.querySelector(".arrow1");
        var arrow2 = document.querySelector(".arrow2");
        var student = document.querySelector(".student");
        var home = document.querySelector(".home");
        var time = document.querySelector(".time");
        var att = document.querySelector(".att");
        var lean = document.querySelector(".lean");



        count = 1;
        faculty.addEventListener("click", function () {
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
        student.addEventListener("click", function () {
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
        form.addEventListener('submit', function (event) {
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
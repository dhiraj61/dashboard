<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
    <title>Document</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            width: 100%;
            height: 100vh;


        }

        .sidebar {
            height: 100%;
            width: 0px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;

            padding-top: 5vw;

        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 150px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
            margin-left: 10px;
            position: fixed;
            top: 10px;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;


        }


        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        .frm2 {

            text-align: center;
            height: 40vw;

        }

        .frm2>h1 {
            font-size: 3vw;
        }

        input,
        select {
            font-size: 1.5vw;
        }

        label {
            font-size: 1.5vw;
        }

        .frm {
            position: absolute;
            top: 33%;
            left: 32%;

        }

        .maindiv {
            background-color: red;
            width: 100%;
            height: 100vh;
        }

        .logout {
            position: absolute;
            top: 2%;
            right: 2%;
        }

        .logout {
            position: fixed;
            top: 1vw;
            right: 10px;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #2F2F2F;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 5vw;
            color: black;

        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            display: block;
            transition: 0.3s;
            color: #FE6F27;
        }

        .sidebar a:hover {
            color: #2F2F2F;
            background-color: #FE6F27;
            border-radius: 0 13px 0 30px;
            transition: all .5s ease;
            transform: translateY(-2px);
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 150px;
            color: #FE6F27;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #FE6F27;
            color: white;
            padding: 10px 15px;
            border: none;

            position: fixed;
            top: 10px;
            z-index: 999999;
        }



        #main {
            transition: margin-left .5s;
            padding: 16px;
            margin-left: 250px;
        }

        .card {
            margin: 20px;
        }

        a {
            text-decoration: none;
        }

        .dropdown-content,
        .dropdown-content1 {
            display: none;
        }

        .logout {
            position: fixed;
            top: .5vw;
            right: 10px;
        }

        .rt {
            position: absolute;
            left: 10px;
            background-color: #2F2F2F;
        }

        .overlay {
            width: 100%;
            height: 10vh;
            background-color: #2F2F2F;
            position: absolute;
            left: 0;
            top: -10%;
            z-index: -9;
        }

        tr,
        td,
        th {
            border: 2px solid white;
            text-align: center;

        }




        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div class="ov" style="width:100%;height:100%;position:absolute;background-color:rgba(0,0,0,0.7);z-index:-2222222"></div>
    <div class="ov" style="width:100%;height:100%;position:absolute;top:100%;background-color:rgba(0,0,0,0.7);z-index:-2222222"></div>
    <div class="videos" style="height:200vh;position:absolute;z-index:-11111111111111111111">
        <video autoplay muted loop src="../videos/4301307-hd_1920_1080_30fps.mp4" height="100%"></video>
    </div>
    <div class="logout">
        <form action="" method="post">
            <button class="logout" class="btn btn-outline-danger" name="logout">Logout</button>
        </form>
    </div>
    <div class="back" style="position:absolute;top: 13%;left:19%">
        <button class="btn btn-primary"><a href="facatt.php" style="text-decoration:none;color:white;">BACK</a></button>
    </div>

    <?php
    if (isset($_POST['logout'])) {
        session_unset();
        echo "<script>window.open('../faclogin.php','_self')</script>";
    }


    ?>


    <div class="overlay" style="position:fixed;background-color:#2F2F2F;top:0"></div>

    <div id="mySidebar" class="sidebar">
        <span class="span" style="background-color:none;font-size:2vw; position:fixed;top:10px;color:white;left:220px;cursor:pointer;color:#FE6F27" onclick="closeNav()">x</span>
        <a href="factime.php" class="time">Time Table</a>
        <a href="faclearn.php" class="learn">Learning Material</a>

        <a href="#" style="color:white;">Attendance</a>
        <a href="notification.php" class="learn">Publish News</a>

    </div>

    <div id="main">
        <button class="openbtn rt" onclick="openNav()" style="position:fixed;">☰ Faculty Panel</button>



    </div>


    <?php

    require('connection.php');

    if (isset($_SESSION['facultyid'])) {
        if (isset($_POST['search'])) {
            $course = $_POST['course'];
            $sem = $_POST['sem'];
            $section = $_POST['section'];


            $sql = "SELECT DISTINCT sub FROM attendence WHERE course='$course' AND semester='$sem' AND sec='$section'";
            $result = mysqli_query($con, $sql);
    ?>
            <div>
                <div class="frm" style="margin-top:4vw;">
                    <form method="post">
                        <label for="">Subject</label>
                        <select name="sub" id="" class="">
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <option value="<?php echo $row['sub'] ?>"><?php echo $row['sub'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <input type="text" name="stud_id" placeholder="Enter Student Id" class="" />
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
                    </form>
                </div>

                <?php
            }
            if (isset($_POST['submit'])) {
                $sub = $_POST['sub'];
                $studid = $_POST['stud_id'];
                $sql2 = "SELECT COUNT(atten) AS count FROM attendence WHERE sub='$sub' AND stud_id='$studid' AND atten='p'";
                $result2 = mysqli_query($con, $sql2);

                if ($result2) {
                    $row2 = mysqli_fetch_assoc($result2);
                    $count2 = $row2['count'];
                ?>
                    <div style="position:absolute;top:49%;left:40%;color:white;">
                        <?php echo "Total Present: $count2"; ?>
                    </div>
                <?php
                } else {
                    echo "Error in executing SQL: " . mysqli_error($con);
                }

                $sql3 = "SELECT COUNT(atten) AS count FROM attendence WHERE sub='$sub' AND stud_id='$studid'";
                $result3 = mysqli_query($con, $sql3);

                if ($result3) {
                    $row3 = mysqli_fetch_assoc($result3);
                    $count3 = $row3['count'];
                ?>
                    <div style="position:absolute;top:49%;left:50%;color:white;">
                        <?php echo "Total Lectures: $count3"; ?>
                    </div>
                <?php
                } else {
                    echo "Error in executing SQL: " . mysqli_error($con);
                }


                ?>
                <div style="width: 200px; height: 200px;position:absolute;top:70%;left:43%;color:white;">
                    <div style="position:absolute;top:-50%;left:15%;">
                        <?php
                        $present = $count2 / $count3 * 100;
                        echo "<br/>Present Rate is : $present %";
                        ?></div>


                    <canvas id='myPieChart' width='100' height='100'></canvas>
                </div>
        <?php
            }
        }
        ?>
            </div>
            <div class="frm2" style="margin-top:5vw;color:white;">

                <h1 style="margin-bottom:3vw;"> ATTENDANCE REPORT</h1>
                <form method='post'>
                    <label for="">Course</label>
                    <select name="course" id="" class="">
                        <option value="BCA">BCA</option>
                        <option value="BCOM">BCOM</option>
                        <option value="BBA">BBA</option>
                    </select>
                    <label for="">Semester</label>
                    <select name="sem" id="" class="">
                        <option value="Sem1">Sem1</option>
                        <option value="Sem2">Sem2</option>
                        <option value="Sem3">Sem3</option>
                        <option value="Sem4">Sem4</option>
                        <option value="Sem5">Sem5</option>
                        <option value="Sem6">Sem6</option>
                    </select>
                    <label for="">Section</label>
                    <select name="section" id="" class="">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <input type="submit" name="search" value="Search" class="btn btn-primary" style="margin-left:1vw;margin-bottom:.5vw;">
                </form>
            </div>

            </div>

            <div class="percentage" style="position:absolute;top:49%;left:76%;">
                <table class="table table-sm table-hover table-dark">
                    <thead>
                        <tr style="text-align:center;">
                            <th>Student Id</th>
                            <th>NAME</th>
                            <th>ATTENDANCE</th>
                        </tr>
                    </thead>
                    <?php
                    $sql2 = "select DISTINCT (name) from attendence";
                    $result = mysqli_query($con, $sql2);
                    while ($row2 = mysqli_fetch_array($result)) {
                        $name[] = $row2['name'];
                    }

                    $c = count($name);
                    for ($i = 0; $i < $c; $i++) {
                        $sql3 = "select COUNT(atten) as coun,name,stud_id from attendence where name='$name[$i]' AND atten='p' ";
                        $result3 = mysqli_query($con, $sql3);
                        $row3 = mysqli_fetch_array($result3);
                        $ca[$i] = $row3['coun'];
                        // echo $ca[$i] . "<br>";
                        $sql4 = "select count(DISTINCT(date)) as dat from attendence ";
                        $result4 = mysqli_query($con, $sql4);
                        $row4 = mysqli_fetch_array($result4);
                        $cat[$i] = $row4['dat'];
                        // echo $cat[$i] . "<br>";
                        $per[$i] =  $ca[$i] / $cat[$i] * 100;
                        // echo $per . "<br>";
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row3['stud_id'] ?></td>

                                <td><?php echo $name[$i] ?></td>
                                <td><?php echo $per[$i] . "%" ?></td>
                            <?php
                        }
                            ?>
                            </tr>
                        </tbody>
                </table>

                <?php
                ?>





            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var t1 = gsap.timeline();
                t1.from('.sidebar', {
                    x: -4000,
                    opacity: 1,
                    duration: .6
                })
                t1.from('.openbtn', {
                    y: -100,

                })
                t1.from('.overlay', {
                    y: "-65"
                })
                t1.from('.logout', {
                    y: "-45"
                })
                t1.from('.gsa', {
                    y: 190,
                    stagger: .2
                })

                var ctx = document.getElementById('myPieChart').getContext('2d');
                var myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Present', 'Absent'],
                        datasets: [{
                            label: 'Attendance',
                            data: [<?php echo $present; ?>, <?php echo 100 - $present; ?>],
                            backgroundColor: [
                                '#66fcf1',
                                '#c5c6c7',
                            ],
                            borderColor: [
                                '#66fcf1',
                                '#c5c6c7',
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
            <script>
                function openNav() {
                    document.getElementById("mySidebar").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                }

                // Function to close the sidebar
                function closeNav() {
                    document.getElementById("mySidebar").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
            </script>
</body>

</html>
<?php

session_start();


if ($_SESSION['studentid'] == true) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notifications</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .container {
                margin-top: 50px;
            }

            .card {
                margin-bottom: 20px;
            }

            .image-modal {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.5);
            }

            .image-modal-content {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }

            .close {
                color: black;
                position: absolute;
                top: 15px;
                right: 35px;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
                cursor: pointer;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-image {
                display: block;
                width: 100%;
                height: auto;
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

            .openbtn:hover {}

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
        </style>
    </head>


    <body>
        <div class="container">
            <h2 class="text-center">Notifications</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <?php
                    require('connection.php');

                    // Retrieve notifications from the database
                    $query = "SELECT * FROM notification";
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <button class="btn btn-primary view-image" data-image="<?php echo $row['file']; ?>">View</button>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p>No notifications found.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Image Modal -->
        <div id="imageModal" class="image-modal">
            <span class="close">&times;</span>
            <img class="modal-image" id="modalImage">
        </div>
    <?php

} else {
    echo "<script>window.open('userlogin.php','_self')</script>";
}



    ?>

    <script>
        // Get the modal
        var modal = document.getElementById("imageModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("modalImage");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        var buttons = document.querySelectorAll('.view-image');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                modal.style.display = "block";
                var imageSrc = this.getAttribute('data-image');
                img.src = imageSrc;
            });
        });

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
    </body>

    </html>
<?php
session_start();

if ($_SESSION['course'] == true) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            body {
                font-family: "Lato", sans-serif;
                width: 100%;
                height: 100vh;
            }

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

            .contents {
                width: 100%;
                height: 75vh;

                overflow-y: scroll;
            }

            .contents::-webkit-scrollbar {
                width: .5vw;
            }

            .contents::-webkit-scrollbar-thumb {
                background-color: #8a8a8a;
                border-radius: 10px;
            }


            .dropdown h2 {
                font-size: 1.4vw;
                transition: all 0.4s ease-in-out;
            }

            .dropdown {
                display: none;
                transition: all 0.4s ease-in-out;
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

            .heading {
                width: 100%;
                height: 100%;
                text-align: center;
                color: black;
                font-weight: 900;
                text-decoration: underline;
            }

            table {
                border-collapse: collapse;
                width: 40%;
                margin: 0 auto;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            .tabless {
                margin-top: 5vw;
            }

            tr,
            td,
            th {
                border: 2px solid black;
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


                    </div>
                    <div class="right2">
                        <h4><i class="ri-notification-3-line"></i></h4>
                        <h4><i class="fa-solid fa-circle" style="font-size:3.6vw;"></i></h4>
                    </div>
                </div>
            </div>
            <div class="sidebarmain">
                <div class="sidebar">
                    <div class="menus">
                        <a href="#">
                            <h1>HOME</h1>
                        </a>
                        <a href="factime.php">
                            <h1>TIME TABLE</h1>
                        </a>
                        <a href="facatt.php">
                            <h1>ATTENDENCE</h1>
                        </a>
                        <a href="facattrep.php">
                            <h1>ATTENDENCE REPORT</h1>
                        </a>
                        <a href="fachome.php">
                            <h1>LEARNING MATERIAL</h1>
                        </a>
                        <a href="fachome.php">
                            <h1>PUBLISH NOTICE</h1>
                        </a>
                        <div>
                            <a href="#">
                                <div style="
                    display: flex;
                    align-items: center;
                    transition: all 0.4s ease-in-out;
                  ">
                                    <h1 class="student" style="font-size: 1.9vw">Students</h1>
                                    <i class="ri-arrow-down-s-fill arrow1" style="font-size: 2vw; color: white"></i>
                                </div>
                            </a>
                            <div class="dropdown" style="margin-left: 3vw; color: white">
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

                    <div class="contents">
                        <div style="margin-top:5vw;" class="uyr">
                            <h2 style="text-align: center;">Timetable Generator for 3 Sections</h2>
                            <div style="text-align: center;">
                                <label for="subjectInput">Enter Subject Names (comma separated):</label>
                                <input type="text" id="subjectInput">
                                <button onclick="generateTimetables()">Generate Timetable</button>
                            </div>
                            <div id="timetables">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
} else {
    echo "<script>window.open('../faclogin.php','_self')</script>";
}
    ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="scr.js"></script>

    <script>
        function generateSectionTimetable(sectionName, subjects) {
            const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const hours = ['8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM'];
            const sectionTable = document.createElement('table');
            const headerRow = document.createElement('tr');
            const headerCell = document.createElement('th');
            headerCell.textContent = sectionName;
            headerCell.colSpan = 8;
            headerRow.appendChild(headerCell);
            sectionTable.appendChild(headerRow);

            const timeHeaderRow = document.createElement('tr');
            const timeHeaderCell = document.createElement('th');
            timeHeaderCell.textContent = 'Time';
            timeHeaderRow.appendChild(timeHeaderCell);
            hours.forEach(hour => {
                const hourHeaderCell = document.createElement('th');
                hourHeaderCell.textContent = hour;
                timeHeaderRow.appendChild(hourHeaderCell);
            });
            sectionTable.appendChild(timeHeaderRow);

            days.forEach(day => {
                const dayRow = document.createElement('tr');
                const dayHeaderCell = document.createElement('th');
                dayHeaderCell.textContent = day;
                dayRow.appendChild(dayHeaderCell);

                hours.forEach(() => {
                    const cell = document.createElement('td');
                    const subjectIndex = Math.floor(Math.random() * subjects.length);
                    cell.textContent = subjects[subjectIndex];
                    cell.setAttribute('contenteditable', 'true'); // Make cell editable
                    dayRow.appendChild(cell);
                });

                sectionTable.appendChild(dayRow);
            });

            return sectionTable;
        }

        function generateTimetables() {
            const timetablesDiv = document.getElementById('timetables');
            timetablesDiv.innerHTML = ''; // Clear existing timetables

            const subjectInput = document.getElementById('subjectInput');
            const subjectNames = subjectInput.value.split(',').map(s => s.trim()); // Get subject names from input field
            const sections = ['Section A', 'Section B', 'Section C'];

            if (subjectNames.length < 3) {
                alert('Please provide at least 3 subject names separated by commas.');
                return;
            }

            sections.forEach(section => {
                const sectionTable = generateSectionTimetable(section, subjectNames);
                timetablesDiv.appendChild(sectionTable);
            });
        }
    </script>

    </body>

    </html>
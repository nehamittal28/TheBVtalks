<?php
    session_start();
    $name=$_SESSION['name'];
    $conn = new mysqli('localhost','root','','thebvtalks');
    $query = "SELECT * FROM student WHERE SMail='$name'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/logo.png" />
    <link rel="stylesheet" href="Student_Profile.css">

    <!-- CSS-Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <title>Student Profile</title>
</head>
<body>
    <div class="container c1">
        <div class="row">
            <div class="facimage col-lg-3">
                <div class="circle"><img src="<?php echo "{$row['Image']}"?>" width="180rem" height="181rem" />
                </div>
            </div>

            <div class="stuimage col-lg-5">
                <span id="heading">Bachelor Of Technology(Computer Science and Engineering)</span>
            </div>
            
            <div class="col-lg-4">
                <div class="header">
                    <img class="logo" src="images/logo.png" width="50rem" height="50rem"/>
                    <span class="banasthali">BANASTHALI</span>
                    <span class="vidyapith">VIDYAPITH</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container c2">
        <div class="row">
            <div class="col-lg-6">
            <div class="card-header">
                <h1>General Description:</h1>
            </div>
            <div class="card-body">
               <p>Name: <?php echo "{$row['SName']}"?> </p>
               <p>Enrollment No: <?php echo "{$row['ENROL']}"?></p>
               <p>Roll No. <?php echo "{$row['ROLL']}"?></p>
               <p>Admission Year: <?php echo "{$row['AYEAR']}"?></p>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="card-header">
                    <h1>Related Info</h1>
                </div>
                <div class="card-body">
                    <p>Father's Name: <?php echo "{$row['FName']}"?></p>
                    <p>Mother's Name: <?php echo "{$row['MName']}"?></p>
                    <p>Date of Birth: <?PHP echo "{$row['DOB']}"?></p>
                    <p>CGPA: <?php echo "{$row['CGPA']}"?></p>
                </div>
                </div>
        </div>
    </div>


    <div class="container c2">
        <div class="card">
            <div class="card-header">
                <h1>Attendance:</h1>
            </div>
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body">
                            <p>AI ML: <?PHP echo "{$row['AIML']}"?></p>
                            <p>Theory of Computation: <?PHP echo "{$row['TOC']}"?></p>
                            <p>PHFR: <?PHP echo "{$row['PHFR']}"?></p>
                            <p>MicroProcessor: <?PHP echo "{$row['MICRO']}"?></p>
                            <p>Economics: <?PHP echo "{$row['ECO']}"?></p>
                        </div>
                        <div class="card-footer">
                            <p>Current Semester: </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body">
                            <p>AI ML Lab: <?PHP echo "{$row['AIMLL']}"?></p>
                            <p>Probability: <?PHP echo "{$row['PROB']}"?></p>
                            <p>ENTP: <?PHP echo "{$row['ENTP']}"?></p>
                            <p>MicroProcessor Lab: <?PHP echo "{$row['MICROL']}"?> </p>
                            <p>Project: <?PHP echo "{$row['PROJ']}"?></p>
                        </div>
                        <div class="card-footer">
                            <p>Current Hostel: <?PHP echo "{$row['Hostel_name']}"?></p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>





</body>
</html>
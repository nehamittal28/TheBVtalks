<?php
    session_start();
    //echo $_SESSION['value'];
    $name=$_SESSION['name'];
    $conn = new mysqli('localhost','root','','thebvtalks');
    $query = "SELECT * FROM faculty WHERE FMail_ID='$name'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Profile/Faculty/logo.png" />
    <link rel="stylesheet" href="Faculty_profile.css">

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
    <title>Faculty Profile</title>
</head>

<body>
    <div class="container c1">
        <div class="row">
            <div class="facimage col-lg-3">
                <div class="circle"><img src="<?php echo "{$row['Image']}"?>"  width="180rem" height="181rem" />
                </div>
            </div>

            <div class="facimage col-lg-5">
                <span id="heading">Faculty of Computer Science Department</span>
            </div>
            
            <div class="col-lg-4">
                <div class="header">
                    <img class="logo" src="./Profile/Faculty/logo.png" width="50rem" height="50rem"/>
                    <span class="banasthali">BANASTHALI</span>
                    <span class="vidyapith">VIDYAPITH</span>
                </div>
            
            </div>
        </div>
    </div>

    <div class="container c2">
        <div class="row">
            <div class="col-lg-4">
            <div class="card-header">
                <h1><?php echo "{$row['FaName']}"?></h1>
            </div>
            <div class="card-body">
               <p>Qualification: <?php echo "{$row['Qualification']}"?></p>
               <p>Experience: <?php echo "{$row['YOE']}"?></p>
            </div>
            </div>
            <div class="col-lg-8">
                <div class="card-header">
                    <h1>About: </h1>
                    <img src="./Profile/Faculty/pen.jpg" width="30rem" class="pen"/>
                </div>
                <div class="card-body">
                    Hello guys,
                </div>
                </div>
        </div>
    </div>

    <div class="container c2">
        <div class="row">
            <div class="col-lg-4">
            <div class="card-header">
                <h1></h1>
            </div>
            <div class="card-body">
                <!-- <button type="button" class="btn btn-outline-dark btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"> -->
                    <button type="button">
                    <a href="#">Make Post</a></button><br><br>
                  <!-- </button> -->
                  <!-- <button type="button" class="btn btn-outline-dark btn-lg btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"> -->
                    <button type="button" ><a href="S_Fac.php"> View Post</a></button>
                  <!-- </button> -->
            </div>
            </div>
            <div class="col-lg-8">
                <div class="card-header">
                    <h1>Posts</h1>
                    <img src="images/pen.jpg" width="30rem" class="pen"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card-header">
                            <h1>Caption</h1>
                            <span>Date:</span>
                        </div>
                        <div class="card-body">
                           Content
                        </div>
                        <div class="card-footer">
                            Links
                        </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card-header">
                            <h1>Caption</h1>
                            <span>Date:</span>
                        </div>
                        <div class="card-body">
                           Content
                        </div>
                        <div class="card-footer">
                            Links
                        </div>
                        </div>
                    </div>
                </div>
                </div>

                
                </div>
        </div>
    </div>
</body>

</html>
<?php
    session_start();
    //echo $_SESSION['value'];
    $name=$_SESSION['name'];
    $conn = new mysqli('localhost','root','','thebvtalks');
    $query = "SELECT * FROM faculty WHERE FMail_ID='$name'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $query1="SELECT * FROM articles WHERE FMail_ID='$name'";
    $result = $conn->query($query1);
   
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
<style>
        table {
            margin: 0 auto;
            width: 100%;
            table-layout: fixed;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: lightblue;
            border: 1px solid black;
            overflow: scroll;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" />
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
                <div class="circle"><img src="<?php echo "{$row['Image']}"?>" width="180rem" height="181rem" />
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
               <p>Name: <?php echo "{$row['FaName']}"?></p>
               <p>Qualification: <?php echo "{$row['Qualification']}"?></p>
               <p>Experience: <?php echo "{$row['YOE']}"?></p>
            </div>
            </div>
            <div class="col-lg-8">
                <div class="card-header">
                    <h1>About:</h1>
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
            </div>
            <div class="col-lg-8">
                <div class="card-header">
                    <h1>Posts</h1>
                    <!-- <img src="images/pen.jpg" width="30rem" class="pen"/> -->
                </div>
                <table>
            <tr>
                <th> Caption </th>
                <th> File </th>
                <th> Description </th>
                <th> Link </th>
                <th> Image </th>
                <th> Time </th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo "{$rows['Caption']}"?></td>
                <td><a href="<?php echo "{$rows['File']}" ?>">view file</a></td>
                <td><?php echo "{$rows['Description']}"?></td>
                <td><a href="<?php echo "{$rows['Link']}" ?>">link</a></td>
                <td><img src="<?php echo "{$rows['Image']}"?>" width="100px" height="100px" class="profile-image"/>  </td>
                
                <td><?php echo "{$rows['Time']}"?></td>
            </tr>
            <?php
                }
            ?>
        </table>
                <!-- <div class="card-body">
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
                </div> -->

                
                </div>
        </div>
    </div>
</body>

</html>
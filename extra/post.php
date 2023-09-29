<?php
	// Database connection
	$conn = mysqli_connect('localhost','root','','thebvtalks');
    $mail="mansi@banasthali.in";
    $date=$_POST[date('y-m-d')];
	$caption = $_POST['caption'];
	$file = $_POST['file'];
	$description = $_POST['description'];
    $link = $_POST['link'];
    $image=$_POST['image'];

    echo "$caption";
    echo "hello";
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
    $sql = "insert into articles(FMail_ID, Time, Caption, File, Description, Link, Image) values($mail, $date, $caption, $file, $description, $link, $image)";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute  " . mysqli_error($conn);
    }  
		
	$conn->close();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <title>Make A Post</title>
</head>
    <form action="" method="post">
    <div class="card">
        <div class="card-header">
            <div class="form-group shadow-textarea">
                <label>Enter the Caption:</label>
                <input type="text" id="caption" name="caption" >
                <!-- <textarea name="caption" class="form-control z-depth-1" rows="5" cols="100" placeholder="Write something here..."></textarea> -->
            </div>
        </div>
        <div class="card-body">
            <p>Upload Any File: <input type="file" name="file"></p> 
            <label>Description if Any:</label>
            <input type="text" id="description" name="description" >
            <!-- <textarea name="description" class="form-control z-depth-1" rows="5" cols="100" placeholder="Write something here..."></textarea> -->
        </div>
        <div class="card-footer">
            <p>Upload Any Link: <input name="link" type="text"></p> 
            <p>Upload Any Image: <input name="image" type="file"></p>
            
        </div>

    </div>
    <!-- <button type="button" class="btn btn-primary " data-toggle="button" aria-pressed="false" autocomplete="off">
        Post
      </button> -->
      <p><input type="submit" id="sub,ite" value="POST"></p>
</form>
</body>
</html>
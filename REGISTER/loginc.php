<?php
   session_start();
   $email = $_POST['email'];
	$password= $_POST['password'];
   $type=$_POST['dropdown'];
   $_SESSION['user']=$type;
   $_SESSION['name']=$email;
	// Database connection
	$conn = new mysqli('localhost','root','','thebvtalks');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);  
      $stmt = $conn->prepare("insert into login( email, password) values(?, ?)");
		$stmt->bind_param("ss",  $email, $password);
		$execval = $stmt->execute();
      $sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      /*$active = $row['active']; */
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        echo "Login Successfull"; 
        if($type=='Student'){
         header("location: ../extra/profileloginStudent.php");
         exit;
        }
        else if ($type=='Faculty'){
         header("location: ../extra/profileloginFaculty.php");
         exit;
        }
      }else {
         echo "Your Login Name or Password is invalid";
     }
   } 
?>
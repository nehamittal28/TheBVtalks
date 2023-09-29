<?php
    
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $user_type = $_POST['dropdown'];

	// Database connection
	$conn = new mysqli('localhost','root','','thebvtalks');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$stmt = $conn->prepare("insert into register(fullname, email, password, user_type) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $fullname, $email, $password, $user_type);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	} 
	
?>

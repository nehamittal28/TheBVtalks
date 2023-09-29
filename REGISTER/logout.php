
<?php 
    // session_start();
    // session_destroy();
    // $_SESSION = array();
    // header("location: ./login.html");  
    session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:../Home/index.html");
?>

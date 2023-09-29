
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!!</title>
    <link rel="stylesheet" href="style.css">
     <script language="javascript" type="text/javascript">
        window.history.forward();
        setTimeout("preventaBack()",0);
        window.onunload=function(){null};
    </script> 
</head>
<body>
    <div class="outer-box">
        <div class="inner-box">
            <header class="signup-header">
                <h1>Login !!</h1>
            </header>
            <main>
                <div class="signup-body">
                    <form action="loginc.php" method="post">
                        <!-- <p>
                            <label for="fullname">User name</label>
                            <input type="text" id="fullname" placeholder="Mahak Garg" required>
                        </p> -->
                        <p>
                            <label for="user_type">User Type</label>
                            <select name = "dropdown">                               
                                <option value="Faculty" name="user_type">Faculty</option>
                                <option value="Student" name="user_type">Student</option>
                            </select>
                           
                        </p>
                        <p>
                            <label for="email">Your Email</label>
                            <input type="email" id="email" pattern=".+@banasthali.in" name="email" placeholder="enter you mail id" required>
                        </p>
                        <p>
                            <label for="password">Your Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        </p>
                        <p>
                            <input type="submit" id="sub,ite" value="Login">
                            
                        </p>
                    </form>
                </div>
            </main>
            
        </div>
        <div class="circle c1"></div>
        <div class="circle c2"></div>
    </div>
</body>
</html>
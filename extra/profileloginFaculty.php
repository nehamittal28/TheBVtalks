<?php
    
    session_start();
    $name=$_SESSION['name'];
    $conn = new mysqli('localhost','root','','thebvtalks');
    $query = "SELECT * FROM faculty WHERE FMail_ID='$name'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
   <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Faculty</title>
    <link rel="stylesheet" href="stylef.css">
    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <script language="javascript" type="text/javascript">
        window.history.forward();
        setTimeout("preventaBack()",0);
        window.onunload=function(){null};
    </script> -->
</head>
<body>
    <!-- Nav section -->
    <nav>
        <div class="container flex align-item-center">
            <img src="./assestsf/download.jpg" alt="">
            <div class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="navmenu">
               <ul class="flex menu">
               <li><a href="../Home/index.html" class="store">Home</a></li>
                     
                    <li><a href="#programs-offered" class="store">Programs</a></li>
                    <li><a href="#Follow-us" class="store">Follow Us</a></li>
                    <li><a href="../Department/aboutUs.html" class="store">About us</a></li>
                    <!-- <li><a href="#" class="store"><i class="fa fa-fw fa-user" ></i></a></li> -->
                    <div class="icons">
                        <div id="user-btn" class="fas fa-user"></div>
                    </div>
                    <div class="profile">
                        <img src="<?php echo "{$row['Image']}"?>" class="image" alt="">
                        <h3 class="name"><?php echo $_SESSION['name'] ?></h3>
                        <h3 class="role"><?php echo $_SESSION['user']?></h3>
                        <a href="./Faculty_Profile.php" class="butn" value="<?php echo $_SESSION['name']?>">View Profile</a>
                        <div class="flex-btn">
                            <a href="../REGISTER/logout.php" class="option-btn">logout
                            </a>
                        </div>
                    </div>
                </ul>
            </div> 
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="blurred-gradient"></div>
        <div class="container">
           <!--  <i class="fa fa-fw fa-user"></i> -->
            <!-- <img src="./assestsf/avatar.jpg" alt="Avatar" class="avatar"> -->
            <div class="hero-row grid">
                 
                <div class="col-left">
                    

                    <h1 data-aos="fade-right" data-aos-duration="1500"><span class="color-p">Banasthali </span> Vidyapith<span class="auto-typing">University for women</span></h1>
                    <h2 data-aos="fade-right" data-aos-duration="1700">University with a difference</h2>
                    <!-- <div class="buttons flex" data-aos="fade-right" data-aos-duration="2000">
                        <a href="../REGISTER/index.html" class="btn btn-primary">Register <span class="pl-2"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i></span></a>
                        <a href="../REGISTER/login.html" class="btn btn-secondnary">Login <span class="pl-2"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i></span></a>
                    </div> -->
                </div>
                <div class="col-right">
                    <img src="./assestsf/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
<!-- Achievement -->
    <section class="achievements">
       
        <div class="container">
            <div class="grid achievements-row">
                <div class="flex">
                    <h1 style="font-size: 3.5rem;">Mahatama Gandhi</h1>
                    <h2 style="font-family: Garamond, sans-serif;">"Banasthali is enshrined in my heart"
                    <h2>
                  
                </div>
                <div class="flex">
                    <h1></h1>
                    <h2 style="font-family: Garamond, sans-serif;"><br>
                        <br>
                        Accredited with the highest possible grade 'A++' with CGPA 3.63/4.00 by NAAC</h2>
          
                </div>
                <div class="flex">
                    <h1></h1>
                    <h2 style="font-family: Garamond, sans-serif;"><br>
                        <br>Banasthali Vidyapith aims at the synthesis of spiritual values and scientific achievements of both the East and the West. 
                    </h2>

                </div>
                <div class="flex">
                    <h1 style="font-size: 3.5rem;">Pandit Nehru</h1>
                    <h2 style="font-family: Garamond, sans-serif;">"If I had been a girl I would have come to Banasthali for my education"</h2>
                
                </div>
            </div>
        </div>
    </section>

    <!-- benifits section -->
    <section class="benefits">
        <div class="container">
            <div class="text-area">
                <!--<p>Benefits of Joining</p>-->
                <h1>PROUD ALUMINI</h1>
            </div>
            <div class="benefits-row grid">
                <!--<img src="/Thebvtalks-main/Home/assets/alumi1.jpg">-->
                <div class="card flex card1" data-aos="fade-right" data-aos-duration="2000">
                    <!-- <i class="fa-sharp fa-solid fa-pen-to-square"></i> -->
                    <div class="icon"><img src="./assestsf/alumi1.jpg" alt=""></div>
                    <h2><a href="https://www.facebook.com/banasthali.org/photos/ms-anuradha-singhfilm-editor-hollywood-and-bollywoodshe-has-edited-many-films-li/826325970806954/">Ms. Anuradha Singh</a></h2>
                    <p>
                        Film Editor, Hollywood and Bollywood
                        She has edited many films like Oscar winning Slumdog Millionaire, Marigold, Mission Kashmir, The Forest etc.
                    </p>
                </div>
                <div class="card flex card2" data-aos="fade-left" data-aos-duration="2000">
                    <div class="icon"><img src="./assestsf/alumi2.jpg" alt=""></div>
                    <h2><a href="https://en.wikipedia.org/wiki/Avani_Chaturvedi">Avani Chaturvedi</a>
                    </h2>
                    <p> Squadron Leader Avani Chaturvedi was in the first batch of three women to be commissioned as fighter pilots in the Indian Air Force.</p>
                </div>
                <div class="card flex card3" data-aos="fade-right" data-aos-duration="2000">
                    <div class="icon"><img src="./assestsf/alumi3.jpg" alt=""></div>
                    <h2><a href="https://en.wikipedia.org/wiki/Meira_Kumar">Meira Kumar</a>
                    </h2>
                    <p>Meira Kumar is an Indian politician and former diplomat. A member of the Indian National Congress, she was the Minister of Social Justice and Empowerment from 2004 to 2009, the Minister of Water Resources for a brief period in 2009</p>
                </div>
                <div class="card flex card4" data-aos="fade-left" data-aos-duration="2000">
                    <div class="icon"><img src="./assestsf/alumi4.webp" alt=""></div>
                    <h2><a href="https://www.linkedin.com/in/ramya-gupta-57853019/?originalSubdomain=in">Ms Ramya Kirti Gupta</a>
                    </h2>
                    <p>Proud to be Banasthalite Captain Ms Ramya Kirti Gupta is a Pilot with Air India and had done her MTech Computer Science from Banasthali. For 2016 Air India flew the longest all women pilot from New Delhi to San Francisco and Captain Ramya Kirti Gupta made the thundering statement “This flight is a symbol of women empowerment and it will encourage women to step out of their comfort zone and succeed in male dominated arenas too."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- meet your Founder -->
    <section>
        <div class="meet">
            <img src="./assets/asset 4.svg" alt="" class="waves">
            <div class="blurred-gradient"></div>
            <div class="container">
                <div class="text-area">
                    <h1>Meet Our <span class="color-p"> Founder </span></h1>
                </div>
                <div class="grid instructor-img" data-aos="fade-up" data-aos-duration="2000">
                    <div><img src="./assestsf/founder.webp" alt="anuj"></div>
                    <h2><a href="https://en.wikipedia.org/wiki/Hiralal_Shastri"><u>Shri. Hiralal Shastri</u></a></h2>
                    <p>Founder, Banasthali Vidyapith</p>
                </div>
                <div class="paragraph">
                    <p>Hiralal Shastri was born on November 24, 1899 at Jobner in Jaipur District. Born in a peasant family, he had his early education in Jobner. Hiralal secured the degree of Sahitya Shastri in 1920. He took B.A. degree in 1921 from Maharaja's College, Jaipur, securing the first rank.
                        <br>
                       
                        On the installation of representative Government in Jaipur State in 1948 Hiralal Shastri took over as the Chief Minister and when Rajasthan State was formed on March 30,1949 he became its first Chief Minister. On him fell the herculean task of integrating the diverse princely units into effective modern administration. He accomplished this complex task ably in a short period. 

                        <br>
                        Banasthali Vidyapith, founded by Hiralal Shastri, has today become a premier national institution for women's education. To him goes largely the credit of laying the foundation of a strong, unified and progressive Rajasthan.
    
                    </div>
            </div>
        </div>
    </section>

    <!-- placement --> 
    <section class="placement">
            <div class="container">
                <div class="placement-row grid">
                    <div class="col-left flex" data-aos="fade-right" data-aos-duration="2000">
                        <b class="color-p" style="font-size: 2rem;">FIVE FOLD EDUCATION  (Panchmukhi Shiksha)</b>
                        <h1>The development of a complete personality
                        </h1>
                            <p>The <q>panchmukhi shiksha</q>  which has evolved from experimentation, attempts a balance among the  five necessary aspects of education: 
                            </p>
                            <div class="buttons flex" data-aos="fade-right" data-aos-duration="2000">
                                <a href="#" class="btn btn-secondnary">Physical <span class="pl-2"></span></a>
                                <a href="#" class="btn btn-secondnary">Asthetic<span class="pl-2"></span></a>
                                <a href="#" class="btn btn-secondnary">Practical<span class="pl-2"></span></a>
                                <br>
                                <br>
                                <a href="#" class="btn btn-secondnary">Moral <span class="pl-2"></span></a>
                                <a href="#" class="btn btn-secondnary">Intellectual <span class="pl-2"></span></a>
                            </div>
                            
                    </div>
                    <div class="col-right grid">
                        <div class="outer-circle">
                             <div class="oc1 planet"><img src="./assets/asset 9.webp" alt=""></div>
<!--                             <div class="oc2 planet"><img src="./assets/asset 10.webp" alt=""></div>
                            <div class="oc3 planet"><img src="./assets/asset 11.webp" alt=""></div>
                            <div class="oc4 planet"><img src="./assets/asset 12.webp" alt=""></div>
                            <div class="oc5 planet"><img src="./assets/asset 13.webp" alt=""></div>
                            <div class="oc6 planet"><img src="./assets/asset 14.webp" alt=""></div> --> 
                            <div class="box">
                                <div class="inner-circle"></div>
                                
                                 <!--    <div class="planet1 planet"><img src="/Thebvtalks-main/Home/assets/fivefold1.webp" alt=""></div>
                                    <div class="planet2 planet"><img src="./assets/asset 16.webp" alt=""></div>
                                    <div class="planet3 planet"><img src="./assets/basketball.webp" alt=""></div>
                                    <div class="planet4 planet"><img src="./assets/asset 16.webp" alt=""></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
    </section>

    <!-- course comparison section -->
    <div class="compare">
        <div class="container">
            <div class="text-area aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <h1 id="programs-offered"><span class="color-p">PROGRAMS   </span>OFFERED</h1>
            </div>
            <div class="compare-row grid aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-left">
                    <ul class="flex">
                        <li class="card flex card1" data-aos="fade-right" data-aos-duration="2000"><h1>UG PROGRAMS</h1></li>
                        <li class="flex">
                            <!-- <span class="check"><i class="fa-sharp fa-solid fa-check"></i></span> -->
                            <p>BTECH</p>
                        </li>
                        <li><p>BSC</p></li>
                        <li><p>BCOM</p></li>
                        <li class="flex"><p>BBA</p></li>
                        <li class="flex"><p>BSC</p></li>
                        <li class="flex"><p>BCA</p></li>
                    </ul>
                </div>
                <div class="col-right">
                    <ul class="flex">
                        <li class="card flex card2" data-aos="fade-left" data-aos-duration="2000"><h1>PG PROGRAMS</h1></li>
                        <li class="flex"><p>MTECH</p> </li>
                        <!-- <span class="cross"><i class="fa-sharp fa-solid fa-xmark"></i></span> -->
                        <li class="flex"><p> BSC</p></li>
                        <li class="flex"><p>BCOM</p></li>
                        <li class="flex"><p>BBA</p></li>
                        <li class="flex"><p>BSC</p></li>
                        <li class="flex"><p>BCA</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- coding family section -->
    <div class="coding-family">
        <!-- <img src="./assets/asset 4.svg" alt=""> -->
        <div class="container">
            <div class="text-area" data-aos="fade-up" data-aos-duration="2000">
                <h1 id="Follow-us">Know more about us</h1>
            
            </div>

            <div class="coding-row grid">
                <div><img src="./assestsf/asset 19.webp" alt="linkedin-icon">
                <p style="color: #F80205;"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i>   YouTube</p>
                </div>
                <div><img src="./assestsf/asset 20.webp" alt="linkedin-icon">
                    <p style="color: #0168AC;"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i><a href="https://www.linkedin.com/school/banasthali-vidyapith/?originalSubdomain=in" >LinkedIn</a></p>
                </div>
                <div><img src="./assestsf/asset 21.webp" alt="discord-icon">
                    <p style="color: #514BB2;"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i>  <a href="https://www.facebook.com/banasthali.org/"  >Facebook</a> </p>
                </div>
                <div><img src="./assestsf/asset 22.webp" alt="telegram-icon">
                    <p style="color: #009FC5;"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i><a href="https://twitter.com/banasthali_vid?lang=en">Twitter</a></p>
                </div>
            </div>
        </div>
    </div>

   <footer>
        <div class="container">
            <div class="footer-row grid">
                <div class="col2 grid">
                    <div>
                        <ul class="flex">
                            <li><b>About Us</b></li>
                            <li>Board of Management</li>
                            <li>Vision, Mission and Core Values</li>
                            <li>Awards and Achievements</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex">
                            <li><b>Academics</b></li>
                            <li>Programs List</li>
                            <li>Teaching Faculties</li>
                            <li>Students's corner</li>
                            <li>Academic Calendar</li>
                            <li>Academic Rules and Regulations</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex">
                            <li><b>Admissions</b></li>
                            <li>School Education</li>
                            <li>Higher Education</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex">
                            <li><b>News & Events</b></li>
                            <li>News List</li>
                            <li>Events List</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Notified Under Section (3) of University Grants Commission Act.
                    @ 2007 Banasthali Vidyapith.</p>
            </div>
        </div>
   </footer>
    <script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
     <!-- AOS animation -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
        AOS.init();
      </script>
      <script src="./scriptf.js"></script>

</body>
</html>

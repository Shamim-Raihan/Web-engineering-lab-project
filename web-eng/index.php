
<!DOCTYPE html>
<html lang="en">

<?php
include_once("connection.php");
session_start();
$session = isset($_SESSION['email']);
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>

    <link rel="stylesheet" href="../web-eng/css/style.css">
</head>

<body class="body">
    <section class="head-section">
        <nav class="navbar">
            <div>
                <img class="app-icon" src="../web-eng/img/app_icon_small.png" alt="Icon">
            </div>

            <div class="nav-item-list">
                <ul class="nav-items">
                    <li class="item">Home</li>
                    <li class="item">About Us</li>
                    <li class="item">Find Doctor</li>
                    <li class="item">Services</li>
                    <li class="item">How it Works</li>
                    </ol>
            </div>
            <div>
                <button id="log-in_btn-id" type="submit" onclick="location.href = 'log in.php';" class="log-in-button" name="Submit" style="">LOG IN</button>
            </div>
            <div>
                <button id="log-out_btn-id" type="submit" class="log-out-button" name="Submit" onclick="location.href = 'logout.php';">LOG Out</button>
            </div>
            <div>
                <button id="register_btn-id" type="submit" onclick="location.href = 'register.php';" class="register-button" name="Submit">GET STARTED</button>
            </div>
        </nav>
<?php
if($session == true){
    ?>
    <script type='text/javascript'>
    document.getElementById("log-in_btn-id").style.display = "none";
    document.getElementById("register_btn-id").style.display = "none";
    document.getElementById("log-out_btn-id").style.display = "inline";
    </script>
    <?php
}
?>
        <section class="head-section-wrapper">
            <div class="first-half">
                <p class="first-half-content">Find <span style="color: #0481FF;">Best</span> <br> <span
                        style="color: #0481FF;">Doctors</span> Near <br> at your location</p>
                <button id="register-button-id" type="submit" class="register-button header-register-button" name="Submit">GET STARTED</button>
            </div>
           
            <?php
if($session == true){
    ?>
    <script type='text/javascript'>
    document.getElementById("register-button-id").style.display = "none";
  
    </script>
    <?php
}
?>

            </div>
            <div class="second-half">
                <img class="second-half-img" src="../web-eng/img/image 2.png" alt="Image">
            </div>
        </section>
    </section>

    <section class="second-section">

        <h1>Fastest Solution</h1>
        <hr
            style="height: 4px; width: 160px; background-color: #0481FF; text-align: center; margin-left: 680px; border-radius: 50px;">

        <p class="steps">
            4 Steps to Get your Solution
        </p>

        <div class="steps-wrapper">
            <div class="wrapper-first">
                <img class="wrapper-img" src="../web-eng/img/app_icon_small.png" alt="Image">
                <h1 class="wrapper-header">Search Doctor</h1>
                <p class="wrapper-text">We're here to help whenever you fell ill, but keeping you is our main priority
                </p>
            </div>
            <div class="wrapper-second">
                <img class="wrapper-img" src="../web-eng/img/app_icon_small.png" alt="Image">
                <h1 class="wrapper-header">Check Doctor Profile</h1>
                <p class="wrapper-text">We can help you to find best doctor near your residence and to get appoinment
                </p>
            </div>
            <div class="wrapper-third">
                <img class="wrapper-img" src="../web-eng/img/app_icon_small.png" alt="Image">
                <h1 class="wrapper-header">Schedule Appointment</h1>
                <p class="wrapper-text">We can help you to find best doctor near your residence and to get appoinment
                </p>
            </div>
            <div class="wrapper-fourth">
                <img class="wrapper-img" src="../web-eng/img/app_icon_small.png" alt="Image">
                <h1 class="wrapper-header">Get Your Solution</h1>
                <p class="wrapper-text">We can help you to find best doctor near your residence and to get appoinment
                </p>
            </div>
        </div>
    </section>


    <section class="our-doctor-section">

        <h1 style="padding-top: 20px;">Our Doctors</h1>
        <hr style="height: 4px; width: 120px; background-color: #0481FF; text-align: center; margin-left: 700px; border-radius: 50px;">

        <div class="slideshow-container" style="margin-top: 20px;">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="../web-eng/img/slide img 1.png" style="width:400px; height: 600px;">
                <div class="text">Dr. Shamim</div>
                <div>Medicine Specialist</div>
            </div>

            <div class="mySlides fade">
                <img src="../web-eng/img/slide img 2.png" style="width:400px; height: 600px;">
                <div class="text">Dr. Alimujjaman</div>
                <div>Heart Specialist</div>
            </div>

            <div class="mySlides fade">
                <img src="../web-eng/img/slide img 3.png" style="width:400px; height: 600px;">
                <div class="text">Dr. Fahim</div>
                <div>Medicine Specialist</div>
            </div>

            <!-- Next and previous buttons -->

        </div>
      <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <button type="submit" onclick="location.href = 'doctorlist.php';" class="our-doctor-show-more-button" name="show-more-doctor">Show More</button>

    </section>



    <section class="services-section">
        <div class="services-head-part">
            <h1 style="text-align: center;">Services</h1>
            <hr
                style="height: 4px; width: 80px; background-color: #0481FF; text-align: center; margin-left: 718px; border-radius: 50px;">

            <p class="services-head" style="text-align: center;">Here's what you can expect when you register with
                YourDoc</p>

        </div>

        <div class="services-wrapper">
            <div class="services-first-half">
                <p style="font-size: 30px; font-weight: bold; margin-left: 150px; margin-top: 20px;">Find Nearest
                    Specialist</p>
                <p style="margin-left: 150px; margin-top: 10px; font-size: 20px; margin-right: 20px;">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Dicta, beatae! Non atque, voluptatem alias facilis cum illo
                    sunt consequatur harum sequi ad possimus odio dolorum blanditiis modi corporis iure libero?</p>
                <ul class="services-item-list">
                    <li class="services-item">Share Your contact Detailp</li>
                    <li class="services-item">Display Property Listingp</li>
                    <li class="services-item">Promote Your Brand</li>
                    <li class="services-item">Highlight Your Achivements and a lot ore</li>
                </ul>

                <button type="submit" class="services-search-button" name="Submit">Search</button>
            </div>
            <div class="services-second-half">
                <img class="services-second-half-img" src="../web-eng/img/Group 23.png" alt="Image">

            </div>
        </div>

    </section>

    <section class="consult-section">
        <div class="consult-wrapper">
            <div class="consult-first-half">
                <img class="consult-second-half-img" src="../web-eng/img/Group 78.png" alt="Image">

            </div>
            <div class="consult-second-half">
                <p style="font-size: 30px; font-weight: bold; margin-left: 150px; margin-top: 20px;">Consult a Doctor
                </p>
                <p style="margin-left: 150px; margin-top: 10px; font-size: 20px; margin-right: 20px;">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Dicta, beatae! Non atque, voluptatem alias facilis cum illo
                    sunt consequatur harum sequi ad possimus odio dolorum blanditiis modi corporis iure libero?</p>
                <ul class="consult-item-list">
                    <li class="consult-item">Share Your contact Details</li>
                    <li class="consult-item">Display Property Listingp</li>
                    <li class="consult-item">Promote Your Brand</li>
                    <li class="consult-item">Highlight Your Achivements and a lot ore</li>
                </ul>

                <button type="submit" class="consult-Appointment-button" name="Submit">Appointment</button>

            </div>
        </div>

    </section>




    <section class="Emergency-section">

        <div class="Emergency-wrapper">
            <div class="Emergency-first-half">
                <p style="font-size: 30px; font-weight: bold; margin-left: 150px; margin-top: 20px;">Emergency Support
                </p>
                <p style="margin-left: 150px; margin-top: 10px; font-size: 20px; margin-right: 20px;">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Dicta, beatae! Non atque, voluptatem alias facilis cum illo
                    sunt consequatur harum sequi ad possimus odio dolorum blanditiis modi corporis iure libero?</p>
                <ul class="Emergency-item-list">
                    <li class="Emergency-item">Share Your contact Detailp</li>
                    <li class="Emergency-item">Display Property Listingp</li>
                    <li class="Emergency-item">Promote Your Brand</li>
                    <li class="Emergency-item">Highlight Your Achivements and a lot ore</li>
                </ul>

                <button type="submit" class="Emergency-contact-us-button" name="Submit">Contact Us</button>
            </div>
            <div class="Emergency-second-half">
                <img class="Emergency-second-half-img" src="../web-eng/img/Group 80.png" alt="Image">

            </div>
        </div>

    </section>


    <section class="Nearby-section">
        <div class="Nearby-wrapper">
            <div class="Nearby-first-half">
                <img class="Nearby-second-half-img" src="../web-eng/img/Group 82.png" alt="Image">

            </div>
            <div class="Nearby-second-half">
                <p style="font-size: 30px; font-weight: bold; margin-left: 150px; margin-top: 20px;">Nearby Doctor </p>
                <p style="margin-left: 150px; margin-top: 10px; font-size: 20px; margin-right: 20px;">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Dicta, beatae! Non atque, voluptatem alias facilis cum illo
                    sunt consequatur harum sequi ad possimus odio dolorum blanditiis modi corporis iure libero?</p>
                <ul class="Nearby-item-list">
                    <li class="Nearby-item">Share Your contact Details</li>
                    <li class="Nearby-item">Display Property Listingp</li>
                    <li class="Nearby-item">Promote Your Brand</li>
                    <li class="Nearby-item">Highlight Your Achivements and a lot ore</li>
                </ul>

                <button type="submit" class="Nearby-view-button" name="Submit">View</button>

            </div>
        </div>

    </section>




    <section class="daily-health-tips-section">

        <div class="daily-health-tips-wrapper">
            <div class="daily-health-tips-first-half">
                <p style="font-size: 30px; font-weight: bold; margin-left: 150px; margin-top: 20px;">Daily Health Tips
                </p>
                <p style="margin-left: 150px; margin-top: 10px; font-size: 20px; margin-right: 20px;">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Dicta, beatae! Non atque, voluptatem alias facilis cum illo
                    sunt consequatur harum sequi ad possimus odio dolorum blanditiis modi corporis iure libero?</p>
                <ul class="daily-health-tips-item-list">
                    <li class="daily-health-tips-item">Share Your contact Detailp</li>
                    <li class="daily-health-tips-item">Display Property Listingp</li>
                    <li class="daily-health-tips-item">Promote Your Brand</li>
                    <li class="daily-health-tips-item">Highlight Your Achivements and a lot ore</li>
                </ul>

                <button type="submit" class="daily-health-tips-view-button" name="Submit">View</button>
            </div>
            <div class="daily-health-tips-second-half">
                <img class="daily-health-tips-second-half-img" src="../web-eng/img/Group 84.png" alt="Image">

            </div>
        </div>

    </section>

    <section class="about-your-doc">
        <div class="your-doc-first-half">
            <p style="color: #0075FF; font-size: 50px; margin-top: 20px; margin-left: 150px; font-weight: bold;">What
                Makes <br> YourDoc a Catch <br> for Patiens . </p>
            <p style="margin-top: 30px; color: black; margin-left: 150px; margin-right: 15px; font-size: 20px;">Lorem
                ipsum dolor, sit amet consectetur adipisicing elit. Iste, modi totam nisi quo incidunt sint vero
                voluptatum. Quasi laboriosam labore quod recusandae, facere aliquid doloremque sit voluptatibus vel
                officiis libero dolorum voluptates distinctio eaque dicta odio nesciunt, inventore corrupti debitis!</p>
            <p style="margin-top: 15px; color: black; margin-left: 150px; margin-right: 15px; font-size: 20px;">Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Numquam atque deleniti vel obcaecati quibusdam animi
                pariatur, distinctio ducimus corporis molestias odit vitae velit eum, voluptatum omnis excepturi iure
                vero eaque.</p>

        </div>
        <div class="your-doc-second-half">

            <div class="top-part" style="margin-top: 20px; margin-left: 30px;">
                <div class="first-part">
                    <div>
                        <img src="../web-eng/img/first.png" alt="image">
                        <p>Trusted and <br> Verified Doctor <br> Listing</p>
                    </div>

                    <div>
                        <img style="margin-top: 10px;" src="../web-eng/img/second.png" alt="image">
                        <p>Category Layouts For <br> visual tours of every <br> Profile</p>
                    </div>

                    <div>
                        <img style="margin-top: 10px;" src="../web-eng/img/third.png" alt="image">
                        <p>Complete information on <br> Complete information on <br> the homepage . </p>
                    </div>
                </div>



                <div class="second-part">
                    <div>
                        <img src="../web-eng/img/fourth.png" alt="image">
                        <p>Personalized filters that <br> makes Doctor searches <br> quicker and easier .</p>
                    </div>

                    <div>
                        <img style="margin-top: 10px;" src="../web-eng/img/fiveth.png" alt="image">
                        <p>QR scan Code for <br> retrieving User Info <br> details on their phones</p>
                    </div>

                    <div>
                        <img style="margin-top: 10px;" src="../web-eng/img/sixth.png" alt="image">
                        <p>Detailed Information on <br> Category That are marked <br> on the wishlist </p>
                    </div>
                </div>
            </div>
            <div class="bottom-part">
                <div>
                    <p
                        style="background-color: #0481FF; border-radius: 20px; margin-left: 100px; margin-right: 100px; font-size: 20px; padding: 20px; text-align: center; color: white;">
                        With tons of benefits for customers, YourDoc is the <br> ultimalte place where a buyer will
                        search for properties <br> online .</p>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer-section">
        <div class="footer-first-part" style="text-align: center;">
            <img style="height: 70px; width: 70px; margin-top: 40px;" src="../web-eng/img/app_icon_small.png"
                alt="App icon">
        </div>

        <div class="footer-second-part">
            <ul class="footer-second-part-item-list" style="margin-top: 40px;">
                <li class="footer-second-part-item">HOME</li>
                <li class="footer-second-part-item">ABOUT US</li>
                <li class="footer-second-part-item">FIND DOCTOR</li>
                <li class="footer-second-part-item">SERVICES</li>
            </ul>
        </div>

        <div class="footer-third-part">
            <ul class="footer-third-part-item-list" style="margin-top: 40px;">
                <li class="footer-third-part-item">Information & system </li>
                <li class="footer-third-part-item">Terms & conditions</li>
                <li class="footer-third-part-item">Privacy policy </li>
            </ul>
        </div>

        <div class="footer-fourth-part">
        
        </div>
    </footer>



    <script>

        // document.getElementById("register-button-id").style.display = "none";



        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>



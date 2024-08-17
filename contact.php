<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style.css" />
   <title>Happy Clients</title>
 </head>
 <body>

   <nav class="navbar">
     <div class="logo"><a href="index.php">Well Drilling</a></div>
     <ul class="nav-links">
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <div class="menu">
         <li><a href="index.php">Home</a></li>
         <li><a href="services.php">Place an Order</a></li>
         <li><a href="contact.php">Testimonials</a></li>
         <li><a href="adminlogin.php" target="_blank"> <i class="fa fa-user" aria-hidden="true"></i> </a></li>
       </div>
     </ul>
   </nav>

    <section id="aboutbanner">
        <div class="text">
            <h3>#Happy Clients</h3>
        </div>
    </section>

    <section class="testim" id="testim">
        <div class="wrap">

            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

            <ul class="dots" id="testim-dots">
                <li class="dot active"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
            </ul>

            <div class="cont" id="testim-content">

                <div class="active">
                    <div class="img"><img src="images/r1.jpg"></div>
                    <h2>Winston</h2>
                    <p>Absolutely thrilled with the service! The team went above and beyond to meet our needs, and the results exceeded our expectations. Highly recommend!</p>
                </div>
                
                <div>
                    <div class="img"><img src="images/r2.jpg"></div>
                    <h2>Margaret</h2>
                    <p>Incredible experience from start to finish. The professionalism and attention to detail were outstanding. Will definitely be returning for future projects.</p>
                </div>
                
                <div>
                    <div class="img"><img src="images/r3.jpg"></div>
                    <h2>David</h2>
                    <p>I can't say enough good things about this company. They were prompt, courteous, and their workmanship was top-notch. 10/10!</p>
                </div>
                
                <div>
                    <div class="img"><img src="images/r4.webp"></div>
                    <h2>John</h2>
                    <p>Amazing customer service! They listened to my concerns and provided tailored solutions that fit my budget. I couldn't be happier with the outcome.</p>
                </div>
                
                <div>
                    <div class="img"><img src="images/r5.png"></div>
                    <h2>William</h2>
                    <p>From the initial consultation to the final product, everything was seamless. The team was responsive, knowledgeable, and delivered on their promises. Highly satisfied!</p>
                </div>
            </div>

        </div>
    </section>

    <section id="footer">

        <div class="contact">
            <i class="fa fa-envelope" aria-hidden="true"><span>osmanyousaf987@gmail.com</span></i>
            <i class="fa fa-phone" aria-hidden="true"><span>+220 402 7529</span></i>
            <i class="fa fa-phone" aria-hidden="true"><span>+220 611 7275</span></i>
        </div>

        <div class="copyright">
            <p>© 2022 Well Drilling LTD. All Rights Reserved.</p>
        </div>

    </section>

    <script src="script.js"></script>


   
 </body>
</html>
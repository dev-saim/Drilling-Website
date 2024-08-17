<?php

date_default_timezone_set('Africa/Banjul');

$connection = mysqli_connect('localhost', 'root', '', 'drill');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $welldepth = $_POST['well_depth'];
    $handpump = $_POST['hand_pump'];
    $concretebase = $_POST['concrete_base'];
    $waterpump = $_POST['water_pump'];
    $solaroption = $_POST['solar_option'];
    $storagetank = $_POST['storage_tank'];
    $watertanktower = $_POST['water_tank_tower'];
    $cleanwatertank = $_POST['water_tank_clean'];

    $submission_datetime = date('Y-m-d  H:i:s');

    $request = "INSERT INTO form (name, email, phone, address, welldepth, handpump, concretebase, waterpump, solaroption, storagetank, watertanktower, cleanwatertank, dateandtime) 
                VALUES ('$name', '$email', '$phone', '$address', '$welldepth', '$handpump', '$concretebase', '$waterpump', '$solaroption', '$storagetank', '$watertanktower', '$cleanwatertank', '$submission_datetime')";

    mysqli_query($connection, $request);

    header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">    

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

    <section id="servicebanner">
        <div class="text">
            <h3>#Booking</h3>
        </div>
    </section>

    <section class="booking">
        <h1 class="heading-title">Booking</h1>

        <form action="services.php" method="post" class="book-form">

            <div class="flex">

                <div class="input-box">
                    <span>Name : </span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>

                <div class="input-box">
                    <span>Email : </span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="input-box">
                    <span>Phone : </span>
                    <input type="number" placeholder="enter your phone number" name="phone" required>
                </div>

                <div class="input-box">
                    <span>Address : </span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>

                <div class="input-box">
                    <span for="well_depth">WELL DEPTH (up to 50m), extra per meter beyond</span>
                    <input type="number" placeholder="0" id="well_depth" name="well_depth" min="0" required>
                </div>
 
                <div class="input-box">
                    <span for="hand_pump">HAND PUMP</span>
                    <select id="hand_pump" name="hand_pump" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-box">
                    <span for="concrete_base">CONCRETE BASE (maximum size of 2 meters)</span>
                    <select id="concrete_base" name="concrete_base" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-box">
                    <span for="water_pump">SUBMERSIBLE WATER PUMP</span>
                    <select id="water_pump" name="water_pump" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-box">
                    <span for="solar_option">SOLAR OPTION</span>
                    <select id="solar_option" name="solar_option" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-box">
                    <span for="storage_tank">STORAGE TANK (Water tank size option)</span>
                    <select id="storage_tank" name="storage_tank" required>
                        <option value=""></option>
                        <option value="1000 liters">1000 Liters</option>
                        <option value="2000 liters">2000 Liters</option>
                        <option value="5000 liters">5000 Liters</option>
                    </select>
                </div>

                <div class="input-box">
                    <span for="water_tank_tower">WATER TANK TOWER (Custom-made Steel 6 Meters)</span>
                    <select id="water_tank_tower" name="water_tank_tower" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-box">
                    <span for="water_tank_clean">CLEANING WATER TANK</span>
                    <select id="water_tank_clean" name="water_tank_clean" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>


            </div>

                <input type="submit" value="Submit" name="send" class="btn">

        </form>
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
    
</body>
</html>
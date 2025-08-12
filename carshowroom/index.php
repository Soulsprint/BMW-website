<?php
$servername = "127.0.0.1:3307"; // XAMPP uses port 3307 instead of 3306
$username = "root"; 
$password = "";  // No password for XAMPP MySQL
$database = "car_showroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showroom</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <script defer src="script.js"></script>
</head>
<body>
    <style>
       
    </style>
    

    <!-- Top Bar -->
    <div class="heading">
        <div class="brand">
            <h1>B M W</h1>
            <h2>MUMBAI</h2>
        </div>
        <div class="right-section">
            <div class="announcement">
                SAVINGS OF UP TO 100% ON ROAD TAX ON i7
            </div>
            <a href="#" class="know-more">KNOW MORE</a>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">New Cars</a></li>
            <li><a href="#">Pre-Owned Cars</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Finance & Offers</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Buy Now</a></li>
        </ul>
    </nav>

    <div class="banner"></div>

    <h1 id="Ourmodel"> Our Models</h1>
<div class="underline"></div>
<div class="cars">
    <div class="sportscar">
        <img src="images/BMW 2 SEIRES.png" alt="BMW 2 Series">
        <div class="car-title">BMW 2 </div>
    </div>
    <div class="sportscar">
        <img src="images/BMW 3 Series.png" alt="BMW 3 Series">
        <div class="car-title">BMW 3 SERIES</div>
    </div>
    <div class="sportscar">
        <img src="images/BMW 5 Series.png" alt="BMW 5 Series">
        <div class="car-title">BMW 5 SERIES</div>
    </div>
    <div class="sportscar">
        <img src="images/BMW 7 Serires.png" alt="BMW 7 Series">
        <div class="car-title">BMW 7 SERIES</div>
    </div>
    <div class="sportscar">
        <img src="images/BMW X.png" alt="BMW X5">
        <div class="car-title">BMW X</div>
    </div>
    <div class="sportscar">
        <img src="images/BMW X5 .png" alt="BMW Z4">
        <div class="car-title">BMW X5</div>
    </div>
    <div class="sportscar">
        <img src="images/BMW X7 .png" alt="BMW X5">
        <div class="car-title">BMW X7</div>
    </div>
    <div class="sportscar">
        <img src="images/BMW m .png" alt="BMW X5">
        <div class="car-title">BMW M</div>
    </div>
    
    <div class="sportscar">
        <img src="images/BMW Z Serires.png" alt="BMW X5">
        <div class="car-title">BMW Z4</div>
    </div>
</div>
<div class="service-cards">
    <div class="service-card">
    <img src="images/vehicle services_16.png" alt="Vehicle Services">
        <h2>Book a Service</h2>
        <p>With BMW Service Inclusive, you can enjoy driving pleasure to the full extent. Now and for a period of your choice, you don’t have to waste a moment thinking about the cost of maintenance, inspection or wear & tear.</p>
        <button id="showFormBtn">BOOK NOW</button>
    </div>


<!-- POPUP FORM CONTAINER (Hidden Initially) -->
<div id="popupContainer" class="popup-overlay">
    <!-- <h1 id="Book">Book service</h1> -->
    <div class="popup-content">
        <span class="close-btn">&times;</span> <!-- Close button -->

        <h2>Book a Service</h2>
        <form action="book_service.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required placeholder="Enter tha name">

            <label for="email">Email:</label>
            <input type="email" name="email" required placeholder="Enter the Email">

            <label for="phone">Phone:</label>
            <input type="text" name="phone" required placeholder="Enter the phone">

            <label for="car_model">Car Model:</label>
            <input type="text" name="car_model" required placeholder="Enter the car model">

            <label for="service_date">Service Date:</label>
            <input type="date" name="service_date" required placeholder="Enter the Service date">

            <label for="message">Message:</label>
            <textarea name="message" placeholder="Note*"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

    
    <div class="service-card">
        <img src="images/4.jpg" alt="BMW Excellence Club">
        <h2>BMW EXCELLENCE CLUB</h2>
        <p>The BMW Excellence Club marks a new era of luxury. A members-only platform that curates tailored experiences from the world of luxury, travel, lifestyle, and sports.</p>


        <button id="btn2">KNOW MORE</button>
    </div>
    
    <div class="service-card">
        <img src="images/used cars_8.png" alt="BMW Used Cars">
        <h2>BMW USED CARS</h2>
        <p>Finding just the BMW Premium Selection vehicle you are looking for is easy. With our online search, you will be able to find cars by model.</p>
        <button id="btn3" >KNOW MORE</button>
    </div>
</div>
<section class="shopping-tools">
    <h2>SHOPPING TOOLS</h2>
    <hr>
    <div class="tools-container">


<!-- POPUP FORM FOR SHOP ONLINE -->
<!-- SHOP ONLINE BUTTON -->
<div class="tools-container">
    <div class="tool-box" id="shopOnlineBox">
        <span class="emoji">🛒</span>
        <p>Shop Online</p>
    </div>
</div>



<!-- POPUP FORM FOR SHOPPING ONLINE -->
<div id="shopFormPopup" class="popup hidden">
    <div class="popup-content">
        <span class="close-btn" id="closeShopForm">&times;</span>
        <h2>Shop Online</h2>
        <form action="book_purchase.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>

            <label for="car_model">Car Model:</label>
            <select name="car_model" id="carModel" required>
                <option value="">Select a Model</option>
                <option value="BMW 2-Series" data-price="50,000$">BMW 2-Series</option>
                <option value="BMW 3-Series" data-price="60,000$">BMW 3-Series</option>
                <option value="BMW 6-Series" data-price="70,000$">BMW 6-Series</option>
                <option value="BMW 7-Series" data-price="80,000$">BMW 7-Series</option>
                <option value="BMW M-Series" data-price="90,000$">BMW M-Series</option>
                <option value="BMW X-Series" data-price="100,000$">BMW X-Series</option>
                <option value="BMW Z-Series" data-price="110,000$">BMW Z-Series</option>
            </select>

            <label for="cost">Cost:</label>
            <input type="text" id="cost" name="cost" readonly>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>




        <div class="tool-box" id="bookTestDrive">
    <span class="emoji">🚗</span>
    <p>Book Test Drive</p>
</div>

<!-- POPUP FORM FOR TEST DRIVE -->
<div id="testDrivePopup" class="popup-overlay">
    <div class="popup-content">
        <span class="close-btn">&times;</span> <!-- Close button -->

        <h2>Book a Test Drive</h2>
        <form action="book_test_drive.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>

            <label for="car_model">Select Car Model:</label>
            <select name="car_model" required>
                <option value="">-- Select Model --</option>
                <option value="BMW 2-Series">BMW 2-Series</option>
                <option value="BMW 3-Series">BMW 3-Series</option>
                <option value="BMW 6-Series">BMW 6-Series</option>
                <option value="BMW 7-Series">BMW 7-Series</option>
                <option value="BMW M-Series">BMW M-Series</option>
                <option value="BMW X-Series">BMW X-Series</option>
                <option value="BMW Z-Series">BMW Z-Series</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

        <div class="tool-box">
            <span class="emoji">💰</span>
            <p>Finance Plan</p>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-links">
            <h3>QUICK LINKS</h3>
            <ul>
                <li>Book A Test Drive</li>
                <li>Retail Offers</li>
                <li>Pre-Owned Cars</li>
            </ul>
        </div>

        <div class="footer-links">
            <h3>ALL MODELS</h3>
            <ul>
                <li>BMW 2-Series</li>
                <li>BMW 3-Series</li>
                <li>BMW 6-Series</li>
                <li>BMW 7-Series</li>
                <li>BMW M-Series</li>
                <li>BMW X-Series</li>
                <li>BMW Z-Series</li>
            </ul>
        </div>

        <div class="footer-links">
            <h3>CONTACT US</h3>
            <ul>
                <li>About Us</li>
                <li>Locate Us</li>
                <li>The Team</li>
            </ul>
        </div>

        <div class="footer-links social">
            <h3>FOLLOW US</h3>
            <div class="social-icons">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>

        <div class="footer-links">
            <h3>NEW COLUMN</h3>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                <li>Item 4</li>
            </ul>
        </div>
    </div>
</footer>
<div class="im"></div>
</body>
</html>

<?php
    if(!isset($_SESSION['role'])==='admin'){
        header("Location:..\src\index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/adminstyle.css">
    <title>Document</title>
</head>
<body>
    <header class=" header">
        <img class="logo" src="..\icons\adminP.svg" alt="BookIt logo" id="header_logo" />
    </header>
    <div class="centered action">
        <div class="buttons"><h1>Add Events</h1></div>
        <div class="buttons"><h1>Manage Events</h1></div>
    </div>
       <footer>
        <div class="centered footer">
            <img class="logo footer_logo" src="..\icons\Bookit.svg" alt="BookIt logo" />
            <div id="helpful_links">
                <h3>Help</h3>
                <ul class="footer_links">
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Documentation</a></li>
                    <li><a href="">FAQs</a></li>
                </ul>
            </div>
            <div id="contact_us">
                <h3>Contact Us</h3>
                <ul class="footer_links">
                    <li><img class="icon" src="..\icons\mdi_location.svg" alt="">Sankhamul, Kathmandu</li>
                    <li><img class="icon" src="..\icons\solar_phone-outline.svg" alt="">+977 9841234567</li>
                    <li><img class="icon" src="..\icons\ic_outline-mail.svg" alt="">info@bookit.com</li>
                </ul>
            </div>
        </div>
        <div id="footer_bottom" class="centered ">
            <ul id="social">
                <li><a href="#"><img src="../icons/whatsapp.svg" alt=""></a></li>
                <li><a href="#"><img src="../icons/Github.svg" alt=""></a></li>
                <li><a href="#"><img src="../icons/instagram.svg" alt=""></a></li>
            </ul>
            <p>&copy; 2025 BookIt. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
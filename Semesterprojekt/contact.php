<?php
    include_once 'header.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/
xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,
        user-scalable=no">
        <title>CSS Responsive Contact Form With Google Map</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital;wght@0,100;0,200;0,300;0,400;0,500;0
        ,600;0,700;0, 800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="
        stylesheet">
    </head>
    <body>
    <div class="contact-in">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.3035897504296!2d16.375135415772004!3d48.23928307923171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d064f6ed971cf%3A0x99fec738bbb12f9d!2sTechnikum%20Wien!5e0!3m2!1sde!2sat!4v1639692240153!5m2!1sde!2sat" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    <div class="contact-form">
    <h1>Contact Us</h1>
    <form>
        <input type="text" placeholder="Name" class="contact-form-txt" />
        <input type="text" placeholder="Email" class="contact-form-txt" />
        <textarea placeholder="Message" class="contact-form-textarea"></textarea>
        <input type="submit" name="Submit" class="contact-form-btn"/>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    include_once 'footer.php';
?>
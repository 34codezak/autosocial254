<?php
// Define site constants
define('SITE_NAME', 'AutoSocial');
define('CONTACT_PHONE', '0794249464');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME; ?> - Your Growth, On Autopilot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <!-- Reference to the logo file provided -->
            <img src="images/AutoSocial-logo.jpg" alt="<?php echo SITE_NAME; ?> Logo" width="200">
        </div>
        <nav>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="https://wa.me/<?php echo CONTACT_PHONE; ?>" class="cta-button">WhatsApp Us</a>
        </nav>
    </header>
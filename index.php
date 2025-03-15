<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bon Hotels</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header-flex">
            <a href="index.php"><img src="./images/logo.png" alt="logo" /></a>
            <nav class="navigation">
                <a href="#first-section" class="nav-bar">Our Hotel</a>
                <a href="#second-section" class="nav-bar">Rooms & Rates</a>
                <a href="#third-section" class="nav-bar">Facilities</a>
                <a href="newspage.php" class="nav-bar">Contact Us</a>
            </nav>
        </div>
    </div>
</header>

<main>
    <section class="first-section" id="first-section">
        <div class="first-section-content">
            <h1 class="main-title">WELCOME TO BON HOTEL</h1>
            <p class="description">Good people. Good thinking. Good feeling.</p>
            <a href="#" class="button">EXPLORE</a>
        </div>
    </section>

    <section class="second-section" id="second-section">
        <div class="container">
            <h2 class="secondary-title">Rooms & Rates</h2>
            <div class="rooms-gallery">
                <?php foreach ($rooms as $room): ?>
                    <div class="rooms-card">
                        <img src="<?= $room['img']; ?>" alt="<?= $room['title']; ?>" />
                        <div class="cards-content">
                            <h3 class="card-title"><?= $room['title']; ?></h3>
                            <a href="#" class="button button-small">Check Rates</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="third-section" id="third-section">
        <div class="container">
            <div class="booking">
                <h2 class="secondary-title">Get a room already!</h2>
                <a href="#" class="button">Book Now</a>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="footer-content">
            <a href="index.php"><img src="./images/lastimg.png" alt="footer logo" /></a>
            <nav class="footer-navigation">
                <a href="#" class="footer-nav-links">Our Hotels</a>
                <a href="#" class="footer-nav-links">Our Conferencing</a>
                <a href="#" class="footer-nav-links">Our Company</a>
                <a href="#" class="footer-nav-links">Hotel Design</a>
                <a href="#" class="footer-nav-links">Careers</a>
            </nav>
            <div class="footer-text">
                <p>Bon Hotels Head Office</p>
                <a href="tel:+27434344432">+27 434 344 432</a>
                <a href="mailto:info@bonhotels.com">info@bonhotels.com</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
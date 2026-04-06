<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Compass | Your Sri Lankan Travel Guide</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">CEYLON<span>COMPASS</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="destinations.php">Destinations</a></li>
            <li><a href="food.php">Food Guide</a></li>
            <li><a href="hotels.php">Hotels</a></li>
            <li><a href="currency.php">Currency Tips</a></li>
            <li><a href="blog.php">Articles</a></li>
        </ul>
    </nav>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Explore the Soul of <span>Sri Lanka</span></h1>
            <p>From misty mountains to golden beaches, find your next adventure with Ceylon Compass.</p>
            
            <div class="search-container">
                <form action="search.php" method="GET" class="hero-search">
                    <input type="text" name="query" placeholder="Search destinations, hotels, or food..." required>
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </section>

    <section class="quick-info">
    <div class="info-card">
        <h4>Current Rate</h4>
        <p>1 USD ≈ <span id="lkr-rate">300</span> LKR</p>
    </div>
    <div class="info-card">
        <h4>Weather</h4>
        <p>Colombo: <span id="weather-temp">29°C</span> ☀️</p>
    </div>
    <div class="info-card">
        <h4>Top Spot</h4>
        <p>Ella, Nine Arch Bridge</p>
    </div>
</section>

    </body>
</html>
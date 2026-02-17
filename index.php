<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Blood Bank Management System</title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->

<header>
    <h2>Blood Hub</h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="register.php">Donor Register</a>
        <a href="login.php">User Login</a>
        <a href="search.php">Search Blood</a>
        <a href="request.php">Emergency Request</a>
    </nav>
</header>


<!-- HERO -->

<section class="hero">

    <div class="hero-text">
        <h1>Donate Blood, Save Lives</h1>
        <p>
            A centralized platform to manage donors, blood availability  
            and emergency requests efficiently.
        </p>

        <div class="hero-btns">
            <a href="register.php" class="btn">Become a Donor</a>
            <a href="search.php" class="btn-outline">Find Blood</a>
        </div>
    </div>

</section>


<!-- SYSTEM MODULES -->

<section class="modules">

    <h2>System Modules</h2>

    <div class="module-container">

        <div class="module-card">
            <h3>Donor Registration</h3>
            <p>Register and manage blood donors.</p>
            <a href="register.php">Open</a>
        </div>

        <div class="module-card">
            <h3>User Login</h3>
            <p>Secure login for users and staff.</p>
            <a href="login.php">Open</a>
        </div>

        <div class="module-card">
            <h3>Search Blood</h3>
            <p>Check blood availability instantly.</p>
            <a href="search.php">Open</a>
        </div>

        <div class="module-card">
            <h3>Emergency Request</h3>
            <p>Send urgent blood requests to hospitals.</p>
            <a href="request.php">Open</a>
        </div>

    </div>

</section>


<!-- BLOOD GROUP SECTION -->

<section class="blood-groups">

    <h2>Available Blood Groups</h2>

    <div class="blood-grid">
        <span>A+</span>
        <span>A-</span>
        <span>B+</span>
        <span>B-</span>
        <span>O+</span>
        <span>O-</span>
        <span>AB+</span>
        <span>AB-</span>
    </div>

</section>


<!-- EMERGENCY -->

<section class="emergency">
    <h2>Emergency Blood Requirement?</h2>
    <p>Raise an urgent request and notify nearby donors immediately.</p>
    <a href="request.php" class="btn">Request Now</a>
</section>


<!-- FOOTER -->

<footer>
    <p>© 2026 Blood Bank Management System</p>
</footer>

</body>
</html>

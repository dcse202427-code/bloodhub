<?php
include 'db.php';
if(!isset($_SESSION['user'])) header("location:login.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h2>User Dashboard</h2>
<nav>
<a href="index.php">Home</a>
<a href="search.php">Search Blood</a>
<a href="request.php">Emergency</a>
<a href="logout.php">Logout</a>
</nav>
</header>

<section class="modules">

<h2>Quick Access</h2>

<div class="module-container">

<div class="module-card">
<h3>Search Blood</h3>
<p>Find available donors.</p>
<a href="search.php">Open</a>
</div>

<div class="module-card">
<h3>Emergency Request</h3>
<p>Send urgent blood request.</p>
<a href="request.php">Open</a>
</div>

</div>

</section>

</body>
</html>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">
<h2>Donor Registration</h2>

<form method="post">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>

<?php
if(isset($_POST['register'])){
mysqli_query($conn,"INSERT INTO users(name,email,password)
VALUES('$_POST[name]','$_POST[email]','$_POST[password]')");
echo "<p class='success'>Registration Successful</p>";
}
?>

</div>

</body>
</html>

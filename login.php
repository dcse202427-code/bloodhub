<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">
<h2>User Login</h2>

<form method="post">
<input type="email" name="email" placeholder="Enter Email" required>
<input type="password" name="password" placeholder="Enter Password" required>
<button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
$res=mysqli_query($conn,"SELECT * FROM users 
WHERE email='$_POST[email]' AND password='$_POST[password]'");

if(mysqli_num_rows($res)){
$_SESSION['user']=$_POST['email'];
header("location:dashboard.php");
}else{
echo "<p class='error'>Invalid Login</p>";
}
}
?>

</div>

</body>
</html>

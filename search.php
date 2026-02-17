<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search Blood Donor</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
min-height:100vh;
background: linear-gradient(-45deg,#ff416c,#ff4b2b,#ff6a00,#ee0979);
background-size:400% 400%;
animation: gradientBG 12s ease infinite;
display:flex;
flex-direction:column;
align-items:center;
color:white;
}

@keyframes gradientBG{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

h1{
margin-top:40px;
font-weight:600;
}

.search-box{
background: rgba(255,255,255,0.15);
backdrop-filter: blur(15px);
padding:30px;
border-radius:15px;
margin-top:30px;
box-shadow:0 8px 32px rgba(0,0,0,0.3);
text-align:center;
}

select, button{
padding:12px;
border:none;
border-radius:8px;
margin-top:10px;
font-size:15px;
}

select{
width:220px;
}

button{
background:#ff4b2b;
color:white;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#ff1e00;
transform:scale(1.05);
}

.result-container{
margin-top:40px;
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:20px;
width:90%;
}

.card{
background:white;
color:black;
padding:20px;
width:260px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,0.3);
transition:0.3s;
text-align:left;
}

.card:hover{
transform:translateY(-8px);
}

.card h3{
color:#e74c3c;
margin-bottom:10px;
}

.no-data{
margin-top:20px;
background:white;
color:red;
padding:10px 20px;
border-radius:8px;
}

</style>
</head>

<body>

<h1>🩸 Find Blood Donors</h1>

<div class="search-box">

<form method="POST">

<select name="blood" required>
<option value="">Select Blood Group</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select>

<br>

<button type="submit" name="search">Search Donor</button>

</form>

</div>

<div class="result-container">

<?php

if(isset($_POST['search'])){

$blood = $_POST['blood'];

$res = mysqli_query($conn,"SELECT * FROM donors WHERE blood_group='$blood'");

if(mysqli_num_rows($res)>0){

while($row=mysqli_fetch_assoc($res)){
?>

<div class="card">
<h3><?php echo $row['name']; ?></h3>
<p>📍 <?php echo $row['city']; ?></p>
<p>🩸 <?php echo $row['blood_group']; ?></p>
<p>📞 <?php echo $row['phone']; ?></p>
</div>

<?php
}

}else{
echo "<div class='no-data'>No donors available for this blood group</div>";
}

}
?>

</div>

</body>
</html>

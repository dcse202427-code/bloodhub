<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Emergency Request</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

<h2>Emergency Blood Request</h2>

<form method="post">
<input type="text" name="patient" placeholder="Patient Name" required>
<input type="text" name="blood" placeholder="Blood Group" required>
<input type="text" name="hospital" placeholder="Hospital ID" required>
<input type="text" name="contact" placeholder="Contact Number" required>
<button name="send">Submit Request</button>
</form>

<?php
if(isset($_POST['send'])){
mysqli_query($conn,"INSERT INTO blood_requests(patient_name,blood_group,hospital_id,contact_number)
VALUES('$_POST[patient]','$_POST[blood]','$_POST[hospital]','$_POST[contact]')");

echo "<p class='success'>Request Sent Successfully</p>";
}
?>

</div>

</body>
</html>

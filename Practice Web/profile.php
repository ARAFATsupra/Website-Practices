<?php
session_start();
include 'config.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

$row = ($result->num_rows == 1) ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | A.S. Dimension</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image" href="images/AS DIMENSION.png">
</head>
<body>
    <header style="text-align: center;">
      <img src="images/AS DIMENSION.png" alt="AS Shop Logo" width="80" style="vertical-align: middle;">
      <h2 style="display: inline-block; vertical-align: middle;">A.S. Dimension</h2>
      <img src="images/AS DIMENSION.png" alt="AS Shop Logo" width="80" style="vertical-align: middle;">
    </header>

    <nav>
        <ul>
            <li><a href="home.html"><b>Home</b></a></li>
            <li><a href="profile.php"><b>Profile</b></a></li>
            <li><a href="catalogue.php"><b>Catalogue</b></a></li>
            <li><a href="registration.php"><b>Registration</b></a></li>
            <li><a href="login.php"><b>Login</b></a></li>
            <li><a href="logout.php"><b>Logout</b></a></li>
        </ul>
    </nav>

    <h2>Your Personal Details</h2>
    <?php if ($row): ?>
    <table>
        <tr><th>Field</th><th>Information</th></tr>
        <tr><td>Full Name</td>
        <td><?php echo $row['fname'] . " " . $row['lname']; ?></td></tr>
        <tr><td>Email</td><td><?php echo $row['email']; ?></td></tr>
        <tr><td>Date of Birth</td><td><?php echo $row['dob']; ?></td></tr>
        <tr><td>Gender</td><td><?php echo $row['gender']; ?></td></tr>
        <tr><td>Address</td><td><?php echo $row['address']; ?></td></tr>
        <tr><td>Role</td><td>Customer</td></tr>
    </table>

    <?php else: ?>
        <p style="color:red; text-align:center;">User details not found!</p>
    <?php endif; ?>

    <p style="text-align:center;">To update your information, please contact our support.</p>
    <p style="text-align:center;">
        <img src="images/profile logo.png" alt="Profile Logo Image" height="250" width="250">
    </p>

    <footer>
        <p><i><b> Developed by Arafat Sakib | A.S. Dimension © 2025 | All Rights Reserved | Contact: +8801979156416 </b></i></p>
    </footer>
</body>
</html>

<?php 
    $conn->close(); 
?>
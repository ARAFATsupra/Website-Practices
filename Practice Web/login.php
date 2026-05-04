<?php
session_start();
include 'config.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            header("Location: profile.php");
            exit();
        } else {
            $message = "Wrong password!";
        }
    } else {
        $message = "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | A.S. Dimension</title>
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

    <h2>Enter Your Login Info</h2>
    <form id="form2" method="POST" action="">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required><br><br>

        <input type="submit" value="Login">
        <input type="reset" value="Reset"><br><br>
    </form>

    <p><img src="images/Login logo.png" alt="Login Logo Image" height="300" width="300"></p>

    <footer>
        <p><i><b> Developed by Arafat Sakib | A.S. Dimension © 2025 | All Rights Reserved | Contact: +8801979156416 </b></i></p>
    </footer>
</body>
</html>

<?php 
    $conn->close(); 
?>
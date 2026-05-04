<?php
include 'config.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $email   = $_POST['email'];
    $pwd     = $_POST['pwd'];
    $confirm = $_POST['confirm_pwd'];
    $dob     = $_POST['birthday'];
    $gender  = $_POST['gender'] ?? '';
    $address = $_POST['address'];

    if ($pwd !== $confirm) {
        $message = "Passwords do not match!";
    } else {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fname, lname, email, password, dob, gender, address)
                VALUES ('$fname', '$lname', '$email', '$hashedPwd', '$dob', '$gender', '$address')";

        if ($conn->query($sql) === TRUE) {
            $message = "Registration successful! <a href='login.php'>Login here</a>";
        } else {
            $message = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | A.S. Dimension</title>
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

    <h2>Registration Form</h2>
    <form id="form1" method="POST" action="">
        <br>
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" required><br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required><br><br>

        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="pwd" placeholder="Enter Your Password" required><br><br>

        <label for="confirm_pwd">Confirm Password:</label>
        <input type="password" id="confirm_pwd" name="confirm_pwd" placeholder="Re-enter Your Password" required><br><br>

        <label for="birthday">Date of Birth:</label>
        <input type="date" id="birthday" name="birthday"><br><br>

        <label for="gender">Gender:</label>
        <label><input type="radio" name="gender" value="Male"> Male</label>
        <label><input type="radio" name="gender" value="Female"> Female</label>
        <label><input type="radio" name="gender" value="Other"> Other</label>
        <br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter Your Address"><br><br>

        <input type="submit" value="Register">
        <input type="reset" value="Reset">
        <br>

        <p>Already have an account? <a href="login.php" class="blue-button"> Login here</a></p>
    </form>

    <?php 
        if ($message != "") echo "<p style='color:black; text-align:center;'>$message</p>"; 
    ?>

    <footer>
        <p><i><b> Developed by Arafat Sakib | A.S. Dimension © 2025 | All Rights Reserved | Contact: +8801979156416 </b></i></p>
    </footer>
</body>
</html>

<?php 
    $conn->close(); 
?>
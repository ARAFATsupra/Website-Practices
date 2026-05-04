<?php include 'config.php';

$sql = "SELECT product_id, product_name, category, price, image FROM catalogue";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue | A.S. Dimension</title>
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

    <h2>Select Any Product</h2>
    <table>
        <tr>
            <th>Image</th>
            <th>Product ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price (Taka)</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td><img src='images/{$row['image']}' alt='{$row['product_name']}' height='100'></td>
                        <td>{$row['product_id']}</td>
                        <td>{$row['product_name']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['price']}</td>
                        <td><a href='' class='blue-button'>Add to Cart</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No products available</td></tr>";
        }
        ?>
    </table><br>

    <p><img src="images/Catalogue logo.png" alt="Catalogue Logo Image" height="300" width="300"></p>

    <footer>
        <p><i><b> Developed by Arafat Sakib | A.S. Dimension © 2025 | All Rights Reserved | Contact: +8801979156416 </b></i></p>
    </footer>
</body>
</html>

<?php 
    $conn->close(); 
?>
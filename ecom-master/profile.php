<?php
session_start();  // Start the session to access the session variables

include 'connect.php';  // Include your database connection file

// Fetch the email from session
$email = $_SESSION['email'];

// Query the database to get the user data based on the email
$sql = "SELECT * FROM login WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the user details from the result
    $row = $result->fetch_assoc();
    $Name = $row['Name'];
    $Delivery = $row['Delivery'];
    $Email = $row['Email'];
} else {
    echo "User data not found!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #333;
            padding: 10px 20px;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar a:hover {
            background-color: #575757;
        }

        /* Profile Section */
        .profile-container {
            width: 80%;
            max-width: 1000px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .profile-info {
            margin: 20px 0;
            font-size: 18px;
        }

        .profile-info p {
            margin: 10px 0;
        }

        .profile-info strong {
            color: #555;
        }

        /* Logout Button */
        .logout-btn {
            display: block;
            text-align: center;
            background-color: #f44336;
            color: #fff;
            padding: 12px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            width: 200px;
            margin: 20px auto;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .profile-container {
                width: 90%;
                padding: 15px;
            }

            .navbar a {
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <a href="indexafter.php">Home</a>
</div>

<!-- Profile Container -->
<div class="profile-container">
    <h1>Welcome to Your Profile, <?php echo htmlspecialchars($Name); ?>!</h1>
    
    <div class="profile-info">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($Name); ?></p>
        <p><strong>Delivery Address:</strong> <?php echo htmlspecialchars($Delivery); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($Email); ?></p>
    </div>

    <!-- Logout Button -->
    <a href="logout.php" class="logout-btn">Log Out</a>
</div>

</body>
</html>

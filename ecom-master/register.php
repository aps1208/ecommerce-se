<?php 
include 'connect.php';

if(isset($_POST['signUp'])){
    $Name = $_POST['fName'];  // Form input 'fName'
    $Delivery = $_POST['lName'];  // Form input 'lName'
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Password = md5($Password);  // Encrypt password

    // Debug: Check if email and password are received
    echo "Email: $Email <br>";
    echo "Password: $Password <br>";

    // Check if email already exists
    $checkEmail = "SELECT * FROM login WHERE email='$Email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
    }
    else{
        // Insert new user into the database
        $insertQuery = "INSERT INTO login(Name, Delivery, Email, Password)
                        VALUES ('$Name', '$Delivery', '$Email', '$Password')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: login.php");
        }
        else{
            echo "Error: ".$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
   if(isset($_POST['email']) && isset($_POST['password'])) {
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password = md5($password); // Encrypt password

       // Debug: Check if email and password are received
       echo "Email: $email <br>";
       echo "Password: $password <br>";

       // Prepared statement to prevent SQL injection
       $stmt = $conn->prepare("SELECT * FROM login WHERE email=? and password=?");
       $stmt->bind_param("ss", $email, $password); // "ss" means two strings
       $stmt->execute();
       $result = $stmt->get_result();

       if($result->num_rows > 0){
           session_start();
           $row = $result->fetch_assoc();
           $_SESSION['email'] = $row['Email'];
           header("Location: profile.php");
           exit();
       } else {
           echo "Not Found, Incorrect Email or Password";
       }
   } else {
       echo "Email or Password not set.";
   }
}
?>

<?php
    
    $host = "localhost";
    $user = "root";
    $pass = null;
    $database = "onlinestore";
    
    /*
    $host = "sql111.epizy.com";
    $user = "epiz_34218781";
    $pass = "GHhcVzU4DXL";
    $database = "epiz_34218781_customers_info";
    */

    $connect = mysqli_connect($host, $user, $pass, $database);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }


    if (isset($_POST['submit']))
    {
        // Sanitize user input to prevent SQL injection
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        // Retrieve hashed password from database
        $sql = "SELECT password FROM users WHERE username='$username'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];
            // Verify user's credentials
            if (password_verify($password, $hashed_password)) {
                // Create a session for the user and redirect to secured page
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username; // Assign the username to the session variable
                header("Location: ../home/index.php");
                exit;
            }     
            else {
                // Display error message
                echo "Invalid username or password.";
            }
        }
    }

    // Close database connection
    $connect->close();

?>
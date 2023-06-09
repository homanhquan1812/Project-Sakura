<?php
    include 'login_processing.php';
    $error = isset($_GET['error']) ? $_GET['error'] : "";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

        <!-- Website Description -->
        <meta name="author" content="Ho Manh Quan">
        <meta name="description" content="This is a description.">
        <meta name="keywords" content="Quan, Website">
        <meta name="copyright" content="Copyright @2023 Quan's Website">

        <!-- Title -->
        <title>Quan's Website</title>

        <!-- External CSS -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Website Favorite Icon -->
        <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    </head>
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form method="POST" action="login_processing.php">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="person-outline"></ion-icon>
                            <input type="username" id="username" name="username" value="<?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : ''; ?>" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="inputbox">
                            <span class="icon-container">
                                <ion-icon name="lock-closed-outline" class="lock-icon"></ion-icon>
                                <ion-icon name="eye-outline" class="eye-icon" id="eye-icon"></ion-icon>
                            </span>
                            <input type="password" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="error">
                            <?php
                            if ($error == "1")
                            {
                                ?>
                                    <p>Incorrect username or password</p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="rememberforgot_pass">
                            <div class="remember">
                                <label for="remember" id="remember" name="remember"><input type="checkbox">Remember Me</label>
                            </div>
                            <div class="forgot">
                                <label for="forgot" id="forgot" name="forgot"><a href="#">Forgot Password?</a></label>
                            </div>
                        </div>
                        <button type="submit" name="submit" id="submit">Login</button>
                        <div class="register">
                            <p>Don't have an account? <a href="#" style="color: yellow;">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <!-- External Javascript -->
        <script src="script.js" type="text/javascript"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
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
        <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
    </head>
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form method="POST" action="login_processing.php">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="person-outline"></ion-icon>
                            <input type="username" id="username" name="username" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" name="submit" id="submit">Login</button>
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
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

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                        <?php
                        session_start();

                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                            ?>
                                <a style="padding-right: 5px;">Welcome back, 
                                    <span id="name" style="color: yellow;">
                                        <?php echo $_SESSION['username']; ?>
                                    <span>
                                </a>
                                <div class="dropdown">
                                    <img alt="Click here to sign out" src="image/Avatar.png" role="button" class="dropbtn" width="40px" height="40px">
                                    <div class="dropdown-content">
                                        <!-- <a href="#">Your level</a> -->
                                        <a href="logout.php">Sign out</a>
                                    </div>
                                </div>
                                <?php
                        }
                        else {
                            echo '<button type="button" onclick="document.location=\'login/index.php\'" class="btn btn-outline-light me-2">Login</button>';
                            echo '<button type="button" onclick="document.location=\'signup/index.php\'" class="btn btn-warning">Sign-up</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- External Javascript -->
        <script src="script.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>      
    </body>
</html>
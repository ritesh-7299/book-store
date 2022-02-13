<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .info {
        text-align: right;
    }

    .navbar-nav>li>a {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .navbar {
        max-height: 66px !important
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="info">
            Contact Us: Mobile: <i class="fa-solid fa-mobile-screen-button"></i> 9409536312<br>
            Email: <i class="fa-solid fa-envelope"></i> bookstore@gmail.com
        </div>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="profile.php">
                <image src="images/bookstore-logo.jpg" style="object-fit: cover; height: 80px;" alt="" href="50"
                    width="180">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <?php
                    session_start();
                    if (!isset($_SESSION['aloggedin'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                        </li>';
                    } else {
                        echo ' <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          My account
                        </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <h7>    Hello Admin</h7>
                      <div class="divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                      </li>';
                    }
                  ?>
                </ul>
            </div>
        </nav>
        <hr>
    </div>
</body>

</html>
<?php
    include 'php/classes/session_strategy/sessionCustomerStrategy.php';
    include 'php/classes/session_strategy/sessionContext.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media_queries.css">
    <title>We Kneed Sourdough</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__logo">
            <a href=".">
                <img src="img/logo.png" alt="we kneed sourdough logo">
            </a>
        </div>
        <div class="navbar__name">
            <a href="."><p>We<br>Kneed<br>Sourdough</p></a>
        </div>
            <div class="navbar__user">
                <?php 
                    $context = new SessionContext(new SessionCustomerStrategy());
                    $params = ['first_name' => ''];
                    $first_name = $context->returnStored($params);
                    if(isset($first_name)){
                        echo '<div class="navbar-user-container"><ion-icon class="icon-user" name="person-circle-outline"></ion-icon><p>' .$first_name . '</p></div>';
                    }
                ?>
            </div>
        <div class="navbar__navigation">
            <ion-icon class="nav-icon js--nav-icon" name="menu-outline"></ion-icon>
        </div>
    </nav>
    <div class="nav-menu js--nav-menu">
        <ul class="nav-menu__links js--main-nav">
            <a href="."><li>Home</li></a>
            <a href="./login.php"><li>Login</li></a>
            <a href="./create_account.php"><li>Create account</li></a>
            <a href="./order.php"><li>Make order</li></a>
            <a href="./my_orders.php"><li>My orders</li></a>
            <a href="./logout.php"><li>Logout</li></a>

       </ul>
    </div>

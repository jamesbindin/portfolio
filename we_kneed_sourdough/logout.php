<?php include 'navbar.php'; ?>
<section class="logout">
    <div class="row heading_secondary_top">
        <h2>logout</h2>
    </div>
    <?php 
        if($_SESSION){
        $session_is_destroyed = session_destroy();
            if($session_is_destroyed){
                echo '<div class="message success message-show">';
                echo '<h3>You are currenty logged out!</h3>';
                echo '<a href="./login.php" class="btn btn-full">Login</a>';
                echo '<a href="." class="btn btn-ghost">Home</a>';
                echo '</div>';
            } 
        } else {
            echo '<div class="message success message-show">';
            echo '<h3>You are currenty logged out!</h3>';
            echo '<a href="./login.php" class="btn btn-full">Login</a>';
            echo '<a href="." class="btn btn-ghost">Home</a>';
            echo '</div>';
        }
    ?>

</section>
<?php include 'footer.php'; ?>

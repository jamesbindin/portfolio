<?php
    include 'navbar.php'; 
    include 'php/classes/customer.php';
?>
    <section class="login">

        <div class="row heading_secondary_top">
            <h2>Login</h2>
        </div>
            <form action="#" method="post">
                <?php
                    $customer = new Customer();
                    $customer->login();
                ?>
                <div class="row">
                    <label for="email" >Email: </label>
                    <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="row">
                    <label for="password">Password: </label>
                    <input type="password" placeholder="password" name="password" required>
                </div>
                <div class="form-submit-row">
                    <input type="submit" name="login_submit" value="Login">
                    <a class="btn btn-ghost" href="./create_account.php">Create account</a>
                </div>
            </form> 
    </section>
<?php include 'footer.php'; ?>
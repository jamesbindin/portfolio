<?php
    include 'navbar.php'; 
    include 'php/classes/customer.php';
?>
    <section class="create_account">
        <div class="row heading_secondary_top">
            <h2>Create account</h2>
        </div>
            <form action="#" method="post">
            <?php 
                $customer = new Customer();
                $customer->checkCreateAccount();
            ?>
                <div class="row">
                    <label for="firstname">first name:</label>
                    <input type="text" placeholder="first name" name="firstname" required>
                </div>
                <div class="row">
                    <label for="lastname">last name:</label>
                    <input type="text" placeholder="last name" name="lastname" required>
                </div>
                <div class="row">
                    <label for="email" >email:</label>
                    <input type="email" placeholder="email" name="email" required> 
                </div>
                <div class="row">
                    <label for="address">address:</label>
                    <textarea name="address" id="address" placeholder="Enter address" required></textarea>
                </div>
                <div class="row">
                    <label for="subscription" required>subscription:</label>
                    <select  name="subscription" value="4">
                    <?php                
                        $subscriptions = $customer->getSubscriptions();
                        while($row = mysqli_fetch_assoc($subscriptions)){
                            ?>
                                <option selected="4" value="<?php echo $row['subscription_id']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                        }
                    ?>
                   </select>
                </div>
                <div class="row">
                    <label for="password">password:</label>
                    <input type="password" placeholder="password" name="password" required>
                </div>
                <div class="form-submit-row">
                    <input type="submit" name="create_account_submit" value="Create Account">
                </div>
            </form> 
    </section>

<?php include 'footer.php'; ?>

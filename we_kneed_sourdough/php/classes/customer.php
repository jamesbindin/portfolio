<?php
include_once 'database/DBconnection.php';
include_once 'session_strategy/sessionContext.php';
include_once 'session_strategy/sessionCustomerStrategy.php';
include_once 'encryption/encrypt.php';
class Customer{
    public function getSubscriptions(){
        $conn = DBConnection::getInstance(); 
        $sql = "SELECT * FROM `subscription` ;";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    public function checkCreateAccount(){
        if(isset($_POST['create_account_submit'])){
            $form_is_valid = true;
            $firstname = $_POST['firstname'];
            if(empty($firstname) || strlen($firstname) < 3) {
                echo "<div class='error_message_form'><p>First name field is required and must be longer than 3 characters.</p></div>";
                $form_is_valid = false;
            }

            $lastname = $_POST['lastname'];
            if(empty($lastname) || strlen($lastname) < 3) {
                $form_is_valid = false;
                echo "<div class='error_message_form'><p>Last name field is required and must be longer than 3 characters.</p></div>";
            }

            $address = $_POST['address'];
            if(empty($address) || strlen($address) < 10) {
                $form_is_valid = false;
                echo "<div class='error_message_form'><p>address field is required and must be longer than 10 characters.</p></div>";
            }

            $email = $_POST['email'];
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $form_is_valid = false;
                echo "<div class='error_message_form'><p>email needs to be a valid email address.</p></div>";
            }

            $password = $_POST['password'];
            if(empty($password) || strlen($password) < 7) {
                $form_is_valid = false;
                echo "<div class='error_message_form'><p>Password is required and must be longer than 7 characters.</p></div>";
            }

            if($form_is_valid){
                $conn = DBConnection::getInstance();
                $firstname_escaped = mysqli_real_escape_string($conn, $firstname); 
                $lastname_escaped = mysqli_real_escape_string($conn, $lastname); 
                $address_escaped = mysqli_real_escape_string($conn, $address); 
                $email_escaped = mysqli_real_escape_string($conn, $email); 
                $subscription_escaped = mysqli_real_escape_string($conn, $_POST['subscription']);

                $encrypted_password = my_simple_crypt($password);
                $password_escaped = mysqli_real_escape_string($conn, $encrypted_password); 

                $sql_email_check = "SELECT `email`FROM `customer` WHERE `email` = '$email_escaped'; ";
                $email_checked = mysqli_query($conn, $sql_email_check);
                if(mysqli_num_rows($email_checked) > 0 ){
                    echo "<div class='error_message_form'><p>The email is aready taken, please try another.</p></div>";
                    return;
                }

                $sql_insert_customer = "INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email`, `address`, `password`, `subscription_id`) ";
                $sql_insert_customer .= "VALUES (NULL, '$firstname_escaped', '$lastname_escaped', '$email_escaped', '$address_escaped', '$password_escaped', '$subscription_escaped'); "; 
                mysqli_query($conn, $sql_insert_customer);
                if($conn->error){
                    echo "<div class='error_message_form'><p>Sorry there was an error creating your account.</p></div>";
                } else {

                $sql_user_check = "SELECT `customer_id`, `first_name` FROM `customer` WHERE (`email` = '$email_escaped' AND `password` = '$password_escaped'); ";
                $user_checked = mysqli_query($conn, $sql_user_check);
                if(isset($user_checked) & $user_checked != false){
                } else {
                    echo "<div class='error_message_form'><p>Sorry a problem occured</p></div>";
                    return;
                }
                if(mysqli_num_rows($user_checked) < 1){
                    echo "<div class='error_message_form'><p>Sorry a problem occured</p></div>";
                    return;
                } else {
                        $user_details = mysqli_fetch_assoc($user_checked);

                         $context = new SessionContext(new SessionCustomerStrategy());
                         $params = ['customer_id' => $user_details['customer_id'], 'first_name' => $user_details['first_name']];
                         $context->addToSession($params);
                    echo "<div class='message success message-show'><h3>You successfully created an account.</h3><a href='.' class='btn btn-ghost'>Ok</a></div>";
                }
                } 
            }
        }
    }

    public function login(){
        if(isset($_POST['login_submit'])){
            $form_is_valid = true;
            $email = $_POST['email'];
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $form_is_valid = false;
                echo "<div class='error_message_form'><p>email needs to be a valid email address.</p></div>";
            }

            $password = $_POST['password'];
            if(empty($password) || strlen($password) < 7) {
                $form_is_valid = false;

                echo "<div class='error_message_form'><p>Password is required and must be longer than 7 characters.</p></div>";
            }

            if($form_is_valid){
                $conn = DBConnection::getInstance();
                $email_escaped = mysqli_real_escape_string($conn, $email); 

                $encrypted_password = my_simple_crypt($password);
                $password_escaped = mysqli_real_escape_string($conn, $encrypted_password); 
                $sql_user_check = "SELECT `customer_id`, `first_name` FROM `customer` WHERE (`email` = '$email_escaped' AND `password` = '$password_escaped'); ";
                $user_checked = mysqli_query($conn, $sql_user_check);
                if(isset($user_checked) & $user_checked != false){
                    if(mysqli_num_rows($user_checked) < 1){
                        echo "<div class='error_message_form'><p>Account doesn't exist</p></div>";
                        return;
                    } else {
                        $user_details = mysqli_fetch_assoc($user_checked);

                         $context = new SessionContext(new SessionCustomerStrategy());
                         $params = ['customer_id' => $user_details['customer_id'], 'first_name' => $user_details['first_name']];
                         $context->addToSession($params);
                    echo "<div class='message success message-show row-margin'><h3>You successfully logged in!</h3><a href='.' class='btn btn-ghost'>Ok</a></div>";
                    }
                } else {
                    echo "<div class='error_message_form'><p>Sorry a problem occured accessing your account</p></div>";
                }



            }
        }
    }
}
?>
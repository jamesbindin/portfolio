<?php 
    include_once 'navbar.php'; 
    include_once 'php/classes/database/DBconnection.php';
    include_once 'php/classes/items.php';
    include_once 'php/classes/session_strategy/sessionOrderStrategy.php';
?>

<section class="order">
    <div class="row heading_secondary_top">
        <h2>Menu</h2>
    </div>

<div class="items">
    <?php
    // use items class to get list of all items in db, display to user.
    $conn = DBConnection::getInstance();
    $items_obj = new Items();
    $items_obj->loadFromDB($conn);
    $items = $items_obj->getItems();

    $CUST_ID = 1;
    $customerContext = new SessionContext(new SessionCustomerStrategy());
    $customer_id = $customerContext->returnStored(['customer_id' => '']);

    //check if items for current order is stored in session
    $context = new SessionContext(new SessionOrderStrategy());
    foreach($items as $item){
        if($context->checkEmpty(['item_id' => $item->getId()])){  
            $context->addToSession(['item_id' => $item->getId()]);
        }

        ?> 
            <div class="item">
                <div class="item__img">
                    <img src="<?php echo $item->getImage(); ?>" alt="item_picture">
                </div>
                    <div class="item__content">
                        <div class="item__title">
                            <h3><?php echo $item->getName();?></h3>
                        </div>
                        <p class="item__description"><?php echo $item->getDescription();?></p>
                        <div class="item__controls">
                                <a href="#" class="item__controls-remove js--remove" id="js--remove_<?php echo $item->getId(); ?>"><ion-icon name="remove-outline"></ion-icon></a>
                                <a href="#" class="item__controls-add js--add" id="js--add_<?php echo $item->getId(); ?>"><ion-icon name="add-outline"></ion-icon></a>
                                <p class="item__controls-qty">qty: <span class="js--order_qty" id="js--qty_<?php echo $item->getId(); ?>"><?php echo $context->returnStored(['item_id' => $item->getId()]); ?></span> </p>
                        </div>
                    </div>
                <div class="item__price"><p><?php echo $item->getPrice();?></p></div>
            </div>
        <?php
    }
    ?>
    <div class="order_submit_row">
        <div class="order_submit_container">
            <div class="message success js--order_success">
                <h3>order completed</h3>
                    <a class="btn btn-full" href="./my_orders.php">my orders</a>
            </div>

            <div class="order_submit js--order_submit">
            <?php
                if(isset($customer_id)){
                    ?>
                    <a value="<?php echo $customer_id; ?>" href="#" class="btn btn-full js--submit_order order_submit__submit_btn">submit order</a>
                    <?php
                } else {
                    echo '<h3 class="order_submit__login_text">You need to be logged in to submit an order.</h3>';
                    echo '<a href="./login.php" class="btn btn-ghost order_submit__login_btn">Login?</a>';
                }
            ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'footer.php'; ?>

<script src="js/order.js"></script>
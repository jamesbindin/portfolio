<?php 
include 'classes/session_strategy/sessionContext.php';
include 'classes/session_strategy/sessionOrderStrategy.php';
include 'classes/order.php';
    if(isset($_POST)){
        if(isset($_POST['add_item_to_order'])){
            $context = new SessionContext(new SessionOrderStrategy());
            $params = ['item_id' => $_POST['add_item_to_order'], 'inc' => 1]; 
            $context->addToSession($params);
            echo $context->returnStored(['item_id' => $_POST['add_item_to_order']]);
        }

        if(isset($_POST['subtract_item_from_order'])){
            $context = new SessionContext(new SessionOrderStrategy());
            $qty = $context->returnStored(['item_id' => $_POST['subtract_item_from_order']]);
            if($qty > 0 ){
                $params = ['item_id' => $_POST['subtract_item_from_order'], 'inc' => -1]; 
                $context->addToSession($params);
            }
            echo $context->returnStored(['item_id' => $_POST['subtract_item_from_order']]);
        }

        if(isset($_POST['add_order_to_db'])){
            $order = new Order();
            echo $order->addOrderToDB($_POST['add_order_to_db']);
        }
    }
?>
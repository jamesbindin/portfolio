<?php 
    include_once 'navbar.php'; 
    include_once 'php/classes/order.php';
    include_once 'php/classes/session_strategy/sessionCustomerStrategy.php';
    include_once 'php/classes/session_strategy/sessionContext.php';
?>

<?php
    $order = new Order();
    $context = new SessionContext(new SessionCustomerStrategy());
    $customer_id = $context->returnStored(['customer_id' => '']);
    $rows =  $order->getOrderDetails($customer_id); 
?>

<section class="section_my_orders">

    <div class="row heading_secondary_top">
        <h2>my orders</h2>
    </div>

    <div class="my_orders">
    <?php 
        $total = 0;
        if(isset($rows)){
            foreach($rows as $i => $row){
            $total += $row[3];
    ?>
    <?php
            $container = "<div class='my_order'>"
                         ."<div class='my_order__title'>";

            $order_output = "<p>order id: <span>".$row[0]."</span></p>"
                            ."<p>date: <span>".$row[1]."</span></p>";

            $end_div = "</div>";

            $items_start = "<div class='my_order__items'>";

            if($i == 0){
                        echo $container . $order_output . $end_div . $items_start;
            } else {
                if(isset($rows[$i-1])){
                    if($rows[$i-1][0] != $row[0]){
                        echo $container . $order_output . $end_div . $items_start;
                    }
                }
            }
    ?>
            
            <div class="my_order__items--row">
                    <?php 
                        echo "<p>".$row[2]."</p>";
                        echo "<p>".$row[3]."</p>";
                    ?>
            </div>

    <?php 
            $items_end = "</div>";
            $div = "<div class='my_order__total'>";

            $total_output = "<p>Total: </p>"
                            ."<p>".$total."</p>";

            $end_div = "</div></div>";

            if(isset($rows[$i+1])){
                if($row[0] != $rows[$i+1][0]){
                    echo $items_end . $div . $total_output . $end_div;
                    $total = 0;
                }
            } else {
                echo $items_end . $div . $total_output . $end_div;
            }
    ?>
    <?php
            $previous_row = $row;
            }
        } else {
            echo "<h3>you have no past orders</h3>";
            echo "<a href='./order.php' class='btn btn-full'>Make Order</a>";
        }
    ?>
    </div>
</section>



<?php include 'footer.php';?>
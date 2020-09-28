<?php
	include_once 'database/DBconnection.php';
    class Order{
		public function addOrderToDB($customer_id){
			$conn =  DBConnection::getInstance();
			if ($conn->connect_error) {
				echo "Not connected, error: " . $conn->connect_error;
			}
			else {
				$sql = "INSERT INTO `order` (`order_id`, `customer_id`, `date`) VALUES (NULL, '$customer_id', current_timestamp()); "; 
				$result = mysqli_query($conn, $sql);
				$sql = "SELECT LAST_INSERT_ID();";
				$result = mysqli_query($conn, $sql);
				$val = mysqli_fetch_assoc($result); 
				$order_id = $val['LAST_INSERT_ID()'];
				$context = new SessionContext(new SessionOrderStrategy());
				$order_items = $context->returnStored(NULL);	
				$sql = "";
				foreach($order_items as $key => $val){
					for($i = 0; $i < $val; $i++){
						$sql =" INSERT INTO `order_item` (`order_item_id`, `order_id`, `item_id`) VALUES (NULL, '$order_id', '$key'); ";
						$result = mysqli_query($conn, $sql);
					}
				}

				if(!$conn->error){
					return $context->clearSelf();
				} else {
					return $conn->error;
				}

			}
		}

		public function getOrderDetails($customer_id){

			$conn =  DBConnection::getInstance();
			if (!$conn->connect_error) {
			$sql = "SELECT\n"
				. "    `order`.order_id,\n"
				. "    DATE_FORMAT(`order`.`date`, '%H:%i, %d/%m/%y ') AS date,\n"
				. "    item.name,\n"
				. "    item.price \n"
				. "FROM\n"
				. "    `order` \n"
				. "INNER JOIN `order_item` ON order_item.order_id = `order`.order_id \n"
				. "INNER JOIN item ON order_item.item_id = item.item_id \n"
				. "WHERE\n"
				. "    customer_id = $customer_id \n"
				. "ORDER BY\n"
				. "    `order`.order_id DESC;";

				$result = $conn->query($sql); 
				if(!$conn->error){
					if($result->num_rows > 0){
						return $result->fetch_all();
					}
				}
			}



		}
    }
?>
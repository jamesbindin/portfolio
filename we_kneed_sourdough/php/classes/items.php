<?php
include_once 'item.php';
class Items{
    private $items;

    public function __construct(){
        $this->items = array();
    }

    public function loadFromDB($conn){
        $result= $conn->query('SELECT * FROM `item`'); 
        while($row = $result->fetch_assoc()){
            $item = new Item($row['item_id'], $row['name'], $row['description'], $row['price'], $row['image']);
            array_push($this->items, $item);
        }
    }

    public function getItems(){
        return $this->items;
    }



}
?>
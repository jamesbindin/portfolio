<?php
if(session_status() != 2){
    session_start();
}
    include_once 'sessionStrategy.php';

    class SessionOrderStrategy implements SessionStrategy{
        private $sessionName = 'current_order';
       
        public function checkEmpty($params){
            if(isset($params)){
                return !isset($_SESSION[$params['item_id']]);
            } else {
                return !isset($_SESSION[$this->sessionName]);
            }
        }

        public function addToSession($params){

            if(!isset($_SESSION[$this->sessionName])){
                $_SESSION[$this->sessionName] = array();
            }

            if(isset($_SESSION[$this->sessionName][$params['item_id']])){
                if(isset($params['inc'])){
                    $new_val = $_SESSION[$this->sessionName][$params['item_id']] + $params['inc'];
                    $_SESSION[$this->sessionName][$params['item_id']] = $new_val;
                }
            } else {
                $_SESSION[$this->sessionName][$params['item_id']] = 0;
            }
        }

        public function returnStored($params){
            if(isset($params)){
                if(isset($_SESSION[$this->sessionName][$params['item_id']])){
                    return $_SESSION[$this->sessionName][$params['item_id']]; 
                } else {
                    return False;
                }
            } else {
                return $_SESSION[$this->sessionName];
            }
        }

        public function clearSelf(){
            unset($_SESSION[$this->sessionName]);
            return !isset($_SESSION[$this->sessionName]);
        }

    }
?>
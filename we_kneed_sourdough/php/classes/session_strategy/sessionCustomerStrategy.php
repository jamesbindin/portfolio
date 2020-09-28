<?php
if(session_status() != 2){
    session_start();
}
    include_once 'sessionStrategy.php';

    class SessionCustomerStrategy implements SessionStrategy{
        private $sessionName = 'customer';
       
        public function checkEmpty($params){
            return isset($_SESSION[$this->sessionName]);
        }

        public function addToSession($params){
            if(!isset($_SESSION[$this->sessionName])){
                $_SESSION[$this->sessionName] = array();
            }

            if(isset($params['customer_id'])){
                $_SESSION[$this->sessionName]['customer_id']  = $params['customer_id'];   
            }

            if(isset($params['first_name'])){
                $_SESSION[$this->sessionName]['first_name']  = $params['first_name'];   
            }
        }

        public function returnStored($params){
            if(isset($_SESSION[$this->sessionName])){
                if(isset($params['customer_id'])){
                    return $_SESSION[$this->sessionName]['customer_id'];   
                } 

                if(isset($params['first_name'])){
                    return $_SESSION[$this->sessionName]['first_name'];   
                } 

                if(!isset($params)){
                    return ['customer_id' => $_SESSION[$this->sessionName]['customer_id'], 'first_name' => $_SESSION[$this->sessionName]['first_name']];
                } 
            } else {
                return NULL;
            }
        }

        public function clearSelf(){
            $_SESSION[$this->sessionName] = NULL;
            if(isset($_SESSION[$this->sessionName])){
                return True;
            } else {
                return False;
            }
        }

    }
?>
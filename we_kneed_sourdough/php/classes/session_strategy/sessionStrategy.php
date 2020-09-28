<?php
    interface SessionStrategy{
        public function checkEmpty($params);
        public function addToSession($params);
        public function returnStored($params);
        public function clearSelf();
    }
?>
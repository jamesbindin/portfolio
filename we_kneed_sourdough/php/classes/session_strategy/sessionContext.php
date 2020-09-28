<?php
class SessionContext{
    private $strategy;

    public function __construct(SessionStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function setStrategy(SessionStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function checkEmpty($params){
        return $this->strategy->checkEmpty($params);
    }

    public function addToSession($params){
        return $this->strategy->addToSession($params);
    }

    public function returnStored($params){
        return $this->strategy->returnStored($params);
    }

    public function clearSelf(){
        return $this->strategy->clearSelf();
    }


}
?>
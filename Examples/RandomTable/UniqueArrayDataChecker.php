<?php

namespace Examples\RandomTable;

class UniqueArrayDataChecker{

    private array $data = [];

    public function __construct() {
        $this->reset();
    }

    public function generateUniqueValue(UniqueArrayDataChecker $checker, callable $randFn, $params = []){
        $value = $randFn(...$params);
        return ($checker->addIsUnique($value)) ? $value : $this->generateUniqueValue($checker, $randFn, $params);
    }

    private function addIsUnique($value) : bool{
        if(!in_array($value, $this->data)){
            $this->data[] = $value;
            return true;
        }
        return false;
    }

    private function reset(){
        $this->data = [];
    }

}

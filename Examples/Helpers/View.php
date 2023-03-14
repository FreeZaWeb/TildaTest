<?php

namespace Examples\Helpers;

class View{


    private static $_instance;

    private $template;
    private array $replacementData = [];
    private array $controllerData = [];

    
    public static function getInstance(){

        if(self::$_instance == null){
            self::$_instance = new self();
        }

        return self::$_instance;

    }

    private function __construct() {}

    public function setLayout(string $layout){
        $layoutFile = ROOT.'/Templates/Layouts/'.$layout.'.php';

        if(file_exists($layoutFile)){
            ob_start();
            require($layoutFile);
            $this->template = ob_get_clean();
        }
    }

    public function setData($data){
        $this->controllerData = $data;
    }

    public function regReplacement($key, $value){
        $this->replacementData[$key] = $value;
    }

    private function replaceFromData(array $data, string $tagStart = '', string $tagEnd = ''){
        foreach ($data as $tag => $value){
            $this->template = str_replace($tagStart.$tag.$tagEnd, $value, $this->template);
        }
    }

    public function render(){
        $this->replaceFromData($this->controllerData, '{{', '}}');
        $this->replaceFromData($this->replacementData);
        return $this->template;
    }

}

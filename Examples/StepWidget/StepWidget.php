<?php

namespace Examples\StepWidget;

class StepWidget{

    protected StepWidgetRenderInterface $renderHandler;
    protected StepWidgetLogic           $stepsHandler;

    public function __construct() {
        $this->stepsHandler = (new StepWidgetLogic());
    }

    public function setRenderHandler(StepWidgetRenderInterface $handler){
        $this->renderHandler = $handler;
        return $this;
    }

    public function setMaxNumber(int $maxNumbersCount = 0){
        $this->stepsHandler->setMaxNumber($maxNumbersCount);
        return $this;
    }

    public function render() : string{
        return $this->renderHandler->render($this->stepsHandler->getFormattedSteps());
    }

}

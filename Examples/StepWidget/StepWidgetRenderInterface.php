<?php

namespace Examples\StepWidget;

interface StepWidgetRenderInterface{

    public function render(array $dataForView = []) : string;

}

<?php

namespace Examples\StepWidget;

class StepWidgetRenderJson implements StepWidgetRenderInterface{



    public function render(array $dataForView = []) : string{

        return json_encode($dataForView, JSON_UNESCAPED_UNICODE);

    }

}

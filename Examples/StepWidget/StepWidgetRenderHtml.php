<?php

namespace Examples\StepWidget;

class StepWidgetRenderHtml implements StepWidgetRenderInterface{

    public function render(array $dataForView = []) : string{

        if(empty($dataForView)){
            return '';
        }

        $html = '<div class="stepsWrapper">';

        foreach ($dataForView as $rowIndex => $values){
            $html.='<p class="row" data-row-index="'.$rowIndex.'">';
            foreach ($values as $value){
                $html.='<span>'.$value.'</span>';
            }
            $html.='</p>';
        }

        return $html.'</div>';

    }

}

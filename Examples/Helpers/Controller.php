<?php

namespace Examples\Helpers;

use Examples\RandomTable\RandomTable;
use Examples\RandomTable\TableSummatorWidget;
use Examples\StepWidget\StepWidget;
use Examples\StepWidget\StepWidgetRenderHtml;
use Examples\StepWidget\StepWidgetRenderJson;


class Controller{

    protected $layout = 'main';
    protected View $view;

    public function __construct() {
        $this->view = View::getInstance();
        $this->view->setLayout($this->layout);
    }

    public function mainPage(){

        $viewData = [];

        $stepWidget = (new StepWidget())->setMaxNumber(100)->setRenderHandler(new StepWidgetRenderHtml());
        $viewData['stepWidgetHTML'] = $stepWidget->render();



        $stepWidget = (new StepWidget())->setMaxNumber(100)->setRenderHandler(new StepWidgetRenderJson());
        $viewData['stepWidgetJSON'] = $stepWidget->render();

        $RandRange = new RandomRangeFromMinToMax(0, 1000);
        $tableBuilder = new RandomTable();

        $table = $tableBuilder
            ->setRowsSize(5)
            ->setColumnsSize(7)
            ->generateNumbers($RandRange->getVector());


        $viewData['randomTable'] = (new TableSummatorWidget($table))->getView();

        $this->view->setData($viewData);

    }


}

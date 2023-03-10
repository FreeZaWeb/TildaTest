<?php

namespace Examples\StepWidget;

class StepWidgetLogic{

    protected int $maxNumbersCount = 0;

    public function getFormattedSteps() : array{

        $retData = [];
        $currentNumber = 0;

        for($rowIndex = 0; $rowIndex < $this->getRowsCount(); $rowIndex++){
            $rowMaxCount = $rowIndex+1;

            for($rowItemsCount = 1; $rowItemsCount<$rowMaxCount; $rowItemsCount++){
                $currentNumber++;
                if($currentNumber > $this->maxNumbersCount){
                    break;
                }
                $retData[$rowIndex][] = $currentNumber;
            }
        }

        return $retData;

    }

    public function setMaxNumber(int $maxNumbersCount = 0) : void{
        $this->maxNumbersCount = $maxNumbersCount;
    }

    private function getRowsCount() : int{
        return (int) ceil(sqrt($this->maxNumbersCount * 8 + 1) / 2);
    }


}

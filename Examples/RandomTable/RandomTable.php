<?php

namespace Examples\RandomTable;

use Examples\Helpers\RandomRangeFromMinToMax;
use Examples\Helpers\Vector;

class RandomTable{

    private int $rowsSize = 0;
    private int $columnsSize = 0;
    private Vector $randVector;

    public function setRowsSize(int $size){
        $this->rowsSize = $size;
        return $this;
    }

    public function setColumnsSize(int $size){
        $this->columnsSize = $size;
        return $this;
    }

    public function generateNumbers(Vector $vector) : array{

        for($row=0; $row < $this->rowsSize; $row++){
            for($column=0; $column < $this->columnsSize; $column++){
                $table[$row][$column] = mt_rand($vector->getX(),$vector->getY());
            }
        }

        return $table ?? [];

    }

    public function generateUniqueNumbers(Vector $vector) : array{

        $uniqueArrayChecker = new UniqueArrayDataChecker();

        if(!$this->compareValidVectorByTableSize($vector)){
            throw new \Exception('Range Vector for unique values is less table size');
        }

        for($row=0; $row < $this->rowsSize; $row++){
            for($column=0; $column < $this->columnsSize; $column++){
                $table[$row][$column] = $uniqueArrayChecker
                    ->generateUniqueValue($uniqueArrayChecker, function ($vector){
                        return mt_rand($vector->getX(),$vector->getY());
                    },[$vector]);
            }
        }

        return $table ?? [];
    }

    private function compareValidVectorByTableSize(Vector $vector) : bool{
        return $this->columnsSize * $this->rowsSize < $vector->getY() - $vector->getX();
    }


}

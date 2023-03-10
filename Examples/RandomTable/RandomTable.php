<?php

namespace Examples\RandomTable;

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

        $table = [];

        for($row=0; $row < $this->rowsSize; $row++){
            for($column=0; $column < $this->columnsSize; $column++){
                $table[$row][$column] = mt_rand($vector->getX(),$vector->getY());
            }
        }

        return $table;

    }

}

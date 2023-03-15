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

    public function generateNumbers(RandomRangeFromMinToMax $range) : array{

        $vector = $range->getVector();

        for($row=0; $row < $this->rowsSize; $row++){
            for($column=0; $column < $this->columnsSize; $column++){
                $table[$row][$column] = mt_rand($vector->getX(),$vector->getY());
            }
        }

        return $table ?? [];

    }

    /*

    Нужно заполнить массив 5 на 7 случайными уникальными числами от 1 до 1000.
    Вывести получившийся массив и суммы по строкам и по столбцам.

    $range гарантированно возвращает вектор где x < y для корректной работы mt_rand
    Далее проверяем хватит ли диапазона в векторе, чтоб заполнить всю таблицу (compareValidVectorByTableSize)
    прогоняем 2 цикла (строки и столбцы) для генерации массива и назначаем в каждую ячейку уникальное рандомное
    значение через объект UniqueArrayDataChecker который гарантированно вернет нам уникальное значение;

    */


    public function generateUniqueNumbers(RandomRangeFromMinToMax $range) : array{

        $vector = $range->getVector();
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

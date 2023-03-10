<?php

namespace Examples\RandomTable;

class TableSummatorWidget{

    private array $array;

    private array $rowsSum = [];
    private array $columnsSum = [];

    public function __construct(array $array) {
        $this->array = $array;
        $this->summarize();

    }

    private function summarize(){

        foreach ($this->array as $rowIndex => $row){
            $this->rowsSum[$rowIndex] = 0;
            foreach ($row as $columnIndex => $column){
                $this->rowsSum[$rowIndex]+= (int) $column;
                $this->columnsSum[$columnIndex]+= (int) $column;
            }
        }
    }

    public function getView(){

        $html = '<table>';

        foreach ($this->array as $rowIndex => $row){
            $html.= '<tr>';
            foreach ($row as $columnIndex => $column){
                $html.= '<td>'.$column.'</td>';
            }
            $html.= '<td class="rowSum">'.$this->rowsSum[$rowIndex].'</td>';
            $html.= '</tr>';
        }

        $html = $this->getSumRow($html);

        return $html.'</table>';
    }


    private function getSumRow($html){
        $html.= '<tr>';
        foreach ($this->columnsSum as $columnSum){
            $html.= '<td class="colSum">'.$columnSum.'</td>';
        }
        return $html.'</tr>';
    }


}

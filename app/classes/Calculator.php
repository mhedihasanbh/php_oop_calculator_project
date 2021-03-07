<?php


namespace App\classes;


class Calculator
{
public $firstNumber;
Public $secondNumber;
public $result;
public $btn;

public function __construct($data){
//    echo '<pre>';
//    print_r($data);
//    echo '<pre>';
   $this->firstNumber   =$data['first_number'];
   $this->secondNumber  =$data['second_number'];
    $this->btn           =$data['submit_btn'];
}
public function mycalculator(){
           switch ($this->btn){
               case'+':
                   $this->result = $this->addation();
                   break;
               case'-':
                   $this->result = $this->subtraction();
                   break;
               case'*':
                   $this->result = $this->multiflication();
                   break;
               case'/':
                   $this->result = $this->division();
                   break;
               case'%':
                   $this->result = $this->reminder();
                   break;
           }
           return $this->result;
}
private function addation(){
    return $this->firstNumber + $this->secondNumber;
}

    private function subtraction(){
        return $this->firstNumber - $this->secondNumber;
    }

    private function multiflication(){
        return $this->firstNumber * $this->secondNumber;
    }

    private function division(){
        return $this->firstNumber / $this->secondNumber;
    }

    private function reminder(){
        return $this->firstNumber % $this->secondNumber;
    }
}
<?php


namespace App\classes;


class SeriesNumber
{
 public $startingNumber;
 public $endingNumber;
 public $result;
 public $btn;
 public function __construct($data)
 {
   $this->startingNumber =$data['first_number'];
   $this->endingNumber   =$data['second_number'];
   $this->btn            =$data['submit_btn'];
 }
 public function SmallBiggerSeriesShow(){
for($i = $this->startingNumber;$i<= $this->endingNumber;$i++){
   $this->result.=$i.' ';
}
return $this->result;
 }
}
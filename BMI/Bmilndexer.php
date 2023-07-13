<?php 
    require_once 'HumanBegin.php';

    class Bmilndexer {
        public $human ;
        public function calbmi($height, $weight){
            $this->human = new  BMI($height, $weight);
            $bmi = $this->human->get_bmi();
            return $bmi ;
        }
    }

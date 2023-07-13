<?php 
 include_once 'HumanBegin.php';
class HealthAnalyzer {
    private $human ;
    public function Analyzer($height, $weight){
        $this->human = new bmi($height, $weight);
        $bmi = $this->human->get_bmi();
        if ($bmi < 18.5) {
            return "ผอม";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            return "ปกติ";
        } elseif ($bmi >= 25 && $bmi < 30) {
            return "ท้วม";
        } else {
            return "อ้วน";
        }
    }
}

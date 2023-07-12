<?php
class BMI
{
    private $height;
    private $weight;
    private $bmi;

    public function set_height($height)
    {
        $this->height = $height;
    }
    public function get_height()
    {
        return $this->height;
    }
    public function set_weight($weight)
    {
        $this->weight = $weight;
    }
    public function get_weight()
    {
        return $this->weight;
    }
    public function set_bmi($bmi)
    {
        $this->bmi = $bmi;
    }
    public function get_bmi()
    {
        return $this->bmi;
    }
    public function calculateBMI()
    {
        $bmi = $this->weight / (($this->height / 100) ** 2);
        return $bmi;
    }
    // public function isNormalWeight()
    // {
    //     if ($this->bmi >= 18.5 && $this->bmi <= 25) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}

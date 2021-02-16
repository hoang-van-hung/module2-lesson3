<?php


class QuadraticEquation{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant(){
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    public function getroot()
    {
        $delta = $this->b ** 2 - 4 * $this->a * $this->c;
        if ($delta < 0) {
            return "Pt vo nghiem";
        } elseif ($delta == 0) {
            return "Pt co nghiem kep : " . -$this->b / 2 / $this->a;
        }else{
            return "Pt co <br>Nghiem 1: ".(-$this->b+$delta)/(2*$this->a)."<br> Nghiem 2 : ".(-$this->b-$delta)/(2*$this->a);
        }

    }
}

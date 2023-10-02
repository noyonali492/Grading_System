<?php
namespace Acme;

class Result{
    public $sub1;
    public $sub2;
    public $sub3;
    public $sub4;
    public $gpa;
    public $totalgpa;
    public $totalgpaAv;
    public $gpa1,$gpa2,$gpa3,$gpa4;
    function setGrade($sub1,$sub2,$sub3,$sub4){
        $this->sub1=$sub1;
        $this->sub2=$sub2;
        $this->sub3=$sub3;
        $this->sub4=$sub4;

        if ($sub1 > 100 || $sub1 < 0 || $sub2 > 100 || $sub2 < 0 || $sub3 > 100 || $sub3 < 0 || $sub4 > 100 || $sub4 < 0) {
            $this->gpa = "<span style='color:red; '>invalid</span>";
        } elseif (($sub1 >= 0 && $sub1 < 33) || ($sub2 >= 0 && $sub2 < 33) || ($sub3 >= 0 && $sub3 < 33) || ($sub4 >= 0 && $sub4 < 33)) {
            $this->gpa = "<span style='color:red; '>Failed</span>";
        } else {
            if ($sub1 >= 80 && $sub1 <= 100)
                $this->gpa1 = 5.00;
            elseif ($sub1 >= 70 && $sub1 <= 89)
                $this->gpa1 = 4.00;
            elseif ($sub1 >= 60 && $sub1 <= 69)
                $this->gpa1 = 3.50;
            elseif ($sub1 >= 50 && $sub1 <= 59)
                $this->gpa1 = 3.00;
            elseif ($sub1 >= 40 && $sub1 <= 49)
                $this->gpa1 = 2.00;
            elseif ($sub1 >= 33 && $sub1 <= 39)
                $this->gpa1 = 1.00;

            if ($sub2 >= 80 && $sub2 <= 100)
                $this->gpa2 = 5.00;
            elseif ($sub2 >= 70 && $sub2 <= 89)
                $this->gpa2 = 4.00;
            elseif ($sub2 >= 60 && $sub2 <= 69)
                $this->gpa2 = 3.50;
            elseif ($sub2 >= 50 && $sub2 <= 59)
                $this->gpa2 = 3.00;
            elseif ($sub2 >= 40 && $sub2 <= 49)
                $this->gpa2 = 2.00;
            elseif ($sub2 >= 33 && $sub2 <= 39)
                $this->gpa2 = 1.00;

            if ($sub3 >= 80 && $sub3 <= 100)
                $this->gpa3 = 5.00;
            elseif ($sub3 >= 70 && $sub3 <= 89)
                $this->gpa3 = 4.00;
            elseif ($sub3 >= 60 && $sub3 <= 69)
                $this->gpa3 = 3.50;
            elseif ($sub3 >= 50 && $sub3 <= 59)
                $this->gpa3 = 3.00;
            elseif ($sub3 >= 40 && $sub3 <= 49)
                $this->gpa3 = 2.00;
            elseif ($sub3 >= 33 && $sub3 <= 39)
                $this->gpa3 = 1.00;

            if ($sub4 >= 80 && $sub4 <= 100)
                $this->gpa4 = 5.00;
            elseif ($sub4 >= 70 && $sub4 <= 89)
                $this->gpa4 = 4.00;
            elseif ($sub4 >= 60 && $sub4 <= 69)
                $this->gpa4 = 3.50;
            elseif ($sub4 >= 50 && $sub4 <= 59)
                $this->gpa4 = 3.00;
            elseif ($sub4 >= 40 && $sub4 <= 49)
                $this->gpa4 = 2.00;
            elseif ($sub4 >= 33 && $sub4 <= 39)
                $this->gpa4 = 1.00;
        }
        $this->totalgpa = $this->gpa1 + $this->gpa2 + $this->gpa3 + $this->gpa4;
        echo "<br/>";
        $this->totalgpaAv = $this->totalgpa / 4;
        if ($this->totalgpaAv >= 5.00)
            $this->gpa = "A+ ";
        elseif ($this->totalgpaAv >= 4.00)
            $this->gpa = "A ";
        elseif ($this->totalgpaAv >= 3.50)
            $this->gpa = "A- ";
        elseif ($this->totalgpaAv >= 3.00)
            $this->gpa = "B ";
        elseif ($this->totalgpaAv >= 2.00)
            $this->gpa = "C ";
        elseif ($this->totalgpaAv >= 1.00)
            $this->gpa = "D ";

    }
    function getGrade(){
        return $this->gpa;

    }
    function getPoint(){
        return $this->totalgpaAv;
    }
}



?>
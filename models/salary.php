<?php


class Salary {

    private $monthly;
    private $thirteenth;
    private $fourteenth;

    public function __construct($monthly, $thirteenth, $fourteenth) {

        $this -> setMonthly($monthly);
        $this -> setThirteenth($thirteenth);
        $this -> setFourteenth($fourteenth);
    }

    // stipendio mensile
    public function getMonthly() {

        return $this -> monthly;
    }

    public function setMonthly($monthly) {

        $this -> monthly = $monthly;
    }

    // tredicesima
    public function getThirteenth() {

        return $this -> thirteenth;
    }

    public function setThirteenth($thirteenth) {

        $this -> thirteenth = $thirteenth;
    }

    // quattordicesima
    public function getFourteenth() {

        return $this -> fourteenth;
    }

    public function setFourteenth($fourteenth) {

        $this -> fourteenth = $fourteenth;
    }

    // stipendio annuale
    public function getAnnual() {

        $annual = $this -> monthly * 12;
        if ($this -> thirteenth) {

            $annual += $this -> monthly;
        }
        if ($this -> fourteenth) {

            $annual += $this -> monthly;
        }
        return $annual;
    }

    // funzione per la stampa a schermo
    public function getHtml() {

        return 
        '<p>Monthly salary: ' . $this -> monthly . '</p>' 
        . '<p>thirteenth salary: ' . ($this -> thirteenth ? 'yes' : 'no') . '</p>' 
        . '<p>fourteenth salary: ' . ($this -> fourteenth ? 'yes' : 'no') . '</p>' 
        . '<p>Annual salary: ' . $this -> getAnnual() . '</p>';
    }
}
<?php


class Salary {

    private $monthly;
    private $hasThirteenth;
    private $hasFourteenth;

    public function __construct($monthly, $hasThirteenth, $hasFourteenth) {

        $this -> setMonthly($monthly);
        $this -> setHasThirteenth($hasThirteenth);
        $this -> setHasFourteenth($hasFourteenth);
    }

    // stipendio mensile
    public function getMonthly() {

        return $this -> monthly;
    }

    public function setMonthly($monthly) {

        $this -> monthly = $monthly;
    }

    // tredicesima
    public function getHasThirteenth() {

        return $this -> hasThirteenth;
    }

    public function setHasThirteenth($hasThirteenth) {

        $this -> hasThirteenth = $hasThirteenth;
    }

    // quattordicesima
    public function getHasFourteenth() {

        return $this -> hasFourteenth;
    }

    public function setHasFourteenth($hasFourteenth) {

        $this -> hasFourteenth = $hasFourteenth;
    }

    // stipendio annuale
    public function getAnnual() {

        $annual = $this -> monthly * 12;
        if ($this -> hasThirteenth) {

            $annual += $this -> monthly;
        }
        if ($this -> hasFourteenth) {

            $annual += $this -> monthly;
        }
        return $annual;
    }

    // funzione per la stampa a schermo
    public function getHtml() {

        return 
        '<p>Monthly salary: ' . $this -> monthly . '</p>' 
        . '<p>Thirteenth salary: ' . ($this -> hasThirteenth ? 'yes' : 'no') . '</p>' 
        . '<p>Fourteenth salary: ' . ($this -> hasFourteenth ? 'yes' : 'no') . '</p>' 
        . '<p>Annual salary: ' . $this -> getAnnual() . '</p>';
    }
}
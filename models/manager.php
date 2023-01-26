<?php

class Manager extends Person {

    private $dividend;
    private $bonus;

    public function __construct($name, $surname, $birthdate, $birthplace, $fiscalcode, $dividend, $bonus) {

        parent::__construct($name, $surname, $birthdate, $birthplace, $fiscalcode);
        $this -> setDividend($dividend);
        $this -> setBonus($bonus);
    }

    // dividendo
    public function getDividend() {

        return $this -> dividend;
    }

    public function setDividend($dividend) {

        $this -> dividend = $dividend;
    }

    // bonus
    public function getBonus() {

        return $this -> bonus;
    }

    public function setBonus($bonus) {

        $this -> bonus = $bonus;
    }

    // reddito annuale
    public function getAnnualIncome() {

        return $this -> dividend * 12 + $this -> bonus;
    }

    // funzione epr la stampa a schermo
    public function getHtml() {

        return parent::getHtml() 
        . '<p>Dividend: ' . $this->dividend . '</p>'
        . '<p>Bonus: ' . $this->bonus . '</p>'
        . '<p>Annual Income: ' . $this->getAnnualIncome() . '</p>';
    }
}
<?php

class Person {

    private $name;
    private $surname;
    private $birthdate;
    private $birthplace;
    private $fiscalcode;

    public function __construct($name, $surname, $birthdate, $birthplace, $fiscalcode) {

        $this -> setName($name);
        $this -> setSurname($surname);
        $this -> setBirthdate($birthdate);
        $this -> setBirthplace($birthplace);
        $this -> setFiscalcode($fiscalcode);
    }

    // nome
    public function getName() {

        return $this -> name;
    }

    public function setName($name) {

        $this -> name = $name;
    }

    // cognome
    public function getSurname() {

        return $this -> surname;
    }

    public function setSurname($surname) {

        $this -> surname = $surname;
    }

    // anno di nascita
    public function getBirthdate() {

        return $this -> birthdate;
    }

    public function setBirthdate($birthdate) {

        $this -> birthdate = $birthdate;
    }

    // luogo di nascita
    public function getBirthplace() {

        return $this -> birthplace;
    }

    public function setBirthplace($birthplace) {

        $this -> birthplace = $birthplace;
    }

    // codie fiscale
    public function getFiscalcode() {

        return $this -> fiscalcode;
    }

    public function setFiscalcode($fiscalcode) {

        $this -> fiscalcode = $fiscalcode;
    }

    // funzione per la stampa a schermo
    public function getHtml() {

        return 
        "<div>"
            . "<p>Name: " . $this -> name . "</p>"
            . "<p>Surname: " . $this -> surname . "</p>"
            . "<p>Birthdate: " . $this -> birthdate . "</p>"
            . "<p>Birthplace: " . $this -> birthplace . "</p>"
            . "<p>Fiscal code: " . $this -> fiscalcode . "</p>"
        . "</div>";

    }
}
<?php

class Employee extends Person {

    private $salary;
    private $hireDate;

    public function __construct($name, $surname, $birthdate, $birthplace, $fiscalcode, $salary, $hireDate) {

        parent::__construct($name, $surname, $birthdate, $birthplace, $fiscalcode);
        $this->setSalary($salary);
        $this->setHireDate($hireDate);
    }

    // stipendio
    public function getSalary() {

        return $this -> salary;
    }

    public function setSalary($salary) {

        $this -> salary = $salary;
    }

    // assunzione
    public function getHireDate() {

        return $this -> hireDate;
    }

    public function setHireDate($hireDate) {

        $this -> hireDate = $hireDate;
    }

    // stipendio annuale
    public function getAnnualSalary() {

        return $this -> salary->getAnnual();
    }

    // ffunzione per la stampa a schermo
    public function getHtml() {

        $html = parent::getHtml();

        return "<p>Salary: " . $this->salary->getAnnual() . "</p>"
        . "<p>Hire Date: " . $this->hireDate . "</p>";
    }
}
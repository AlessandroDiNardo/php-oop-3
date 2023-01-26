<?php
require_once ('models/person.php');
require_once ('models/manager.php');
require_once ('models/employee.php');
require_once ('models/salary.php');


$salary1 = new Salary(2000, true, true);
$person1 = new Person("Gesualdo", "di Donato", "2000-10-12","Gubbio","GD45VF89S0");

$employee1 = new Employee("Gesualdo", "di Donato", "2000-10-12", "Gubbio", "GD45VF89S0",$salary1, "2020-05-02000");
$manager1 = new Manager("PierLuigi Antonio", "Della Galla", "1985-05-12", "Firenze", "PD75TR98F3", 50000, 10000);
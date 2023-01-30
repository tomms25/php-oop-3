<?php
class Person
{
 
  private $name;
  private $surname;
  private $date_of_birth;
  private $place_of_birth;
  private $fiscal_code;


  public function __construct(
    $name,
    $surname,
    $date_of_birth,
    $place_of_birth,
    $fiscal_code
  )
  {
    $this->setName($name);
    $this->setSurname($surname);
    $this->setDateOfBirth($date_of_birth);
    $this->setPlaceOfBirth($place_of_birth);
    $this->setFiscalCode($fiscal_code);
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }


  public function setSurname($surname)
  {
    $this->surname = $surname;
  }

  public function getSurname()
  {
    return $this->surname;
  }


  public function setDateOfBirth($date_of_birth)
  {
    $this->date_of_birth = $date_of_birth;
  }

  public function getDateOfBirth()
  {
    return $this->date_of_birth;
  }

  public function setPlaceOfBirth($place_of_birth)
  {
    $this->place_of_birth = $place_of_birth;
  }

  public function getPlaceOfBirth()
  {
    return $this->place_of_birth;
  }


  public function setFiscalCode($fiscal_code)
  {
    $this->fiscal_code = $fiscal_code;
  }

  public function getFiscalCode()
  {
    return $this->fiscal_code;
  }

  
  public function getHtml()
  {
    return "Nome: " .
      $this->getName() .
      "<br>" .
      "Cognome: " .
      $this->getSurname() .
      "<br>" .
      "Data di nascita: " .
      $this->getDateOfBirth() .
      "<br>" .
      "Luogo di nascita: " .
      $this->getPlaceOfBirth() .
      "<br>" .
      "Codice fiscale: " .
      $this->getFiscalCode();
  }
}


class Employee extends Person
{
  private Salary $salary;
  private $hire_date;

  public function __construct(
    $name,
    $surname,
    $date_of_birth,
    $place_of_birth,
    $fiscal_code,
    Salary $salary,
    $hire_date
  )
  {
    parent::__construct(
      $name,
      $surname,
      $date_of_birth,
      $place_of_birth,
      $fiscal_code
    );

    $this->setSalary($salary);
    $this->setHire($hire_date);
  }


  public function setSalary(Salary $salary)
  {
    $this->salary = $salary;
  }

  public function getSalary()
  {
    return $this->salary;
  }


  public function setHire($hire_date)
  {
    $this->hire_date = $hire_date;
  }

  public function getHire()
  {
    return $this->hire_date;
  }

  public function getHtml()
  {
    return "<h3>Impiegato</h3>" .
      parent::getHtml() .
      $this->getSalary()->getHtml() .
      "<br>" .
      "Data di assunzione: " .
      $this->getHire();
  }
}


class Salary
{

  private $monthly;
  private $thirteenth_month;
  private $fourteenth_month;


  public function __construct($monthly, $thirteenth_month, $fourteenth_month)
  {
    $this->setMonthly($monthly);
    $this->setThirteenth($thirteenth_month);
    $this->setFourteenth($fourteenth_month);
  }


  public function setMonthly($monthly)
  {
    $this->monthly = $monthly;
  }

  public function getMonthly()
  {
    return $this->monthly;
  }


  public function setThirteenth($thirteenth_month)
  {
    $this->thirteenth_month = $thirteenth_month;
  }

  public function getThirteenth()
  {
    return $this->thirteenth_month;
  }


  public function setFourteenth($fourteenth_month)
  {
    $this->fourteenth_month = $fourteenth_month;
  }

  public function getFourteenth()
  {
    return $this->fourteenth_month;
  }


  public function getAnnual()
  {
    return $this->getMonthly() * 12 +
      $this->getThirteenth() +
      $this->getFourteenth();
  }

  public function getHtml()
  {
    return "<h4>Stipendio</h4>" .
      "Mensile: " .
      $this->getMonthly() .
      "<br>" .
      "Tredicesima: " .
      $this->getThirteenth() .
      "<br>" .
      "Quattordicesima: " .
      $this->getFourteenth() .
      "<br>" .
      "Stipendio annuale: " .
      $this->getAnnual() .
      " $";
  }
}


class Boss extends Person
{
  private $dividend;
  private $bonus;

  public function __construct(
    $name,
    $surname,
    $date_of_birth,
    $place_of_birth,
    $fiscal_code,
    $dividend,
    $bonus
  )
  {
    parent::__construct(
      $name,
      $surname,
      $date_of_birth,
      $place_of_birth,
      $fiscal_code
    );

    $this->setDividend($dividend);
    $this->setBonus($bonus);
  }


  public function setDividend($dividend)
  {
    $this->dividend = $dividend;
  }

  public function getDividend()
  {
    return $this->dividend;
  }

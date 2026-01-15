<?php
class Customer
{
    public $firstName;
    public $lastName;
    public $accounts;

    //constructor includes accounts array
    public function __construct($firstName, $lastName, $accounts = [])
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->accounts  = $accounts;
    }

    //returns customer's full name
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

<?php
namespace App\Model;

class Employee
{
    protected $employee;

    protected $employeeAge;

    public function getName()
    {
        return $this->employee;
    }

    public function setName($name)
    {
        $this->employee = $name;
    }

    public function getAge()
    {
        return $this->employeeAge;
    }

    public function setAge($age)
    {
        $this->employeeAge = $age;
    }

    public function getNameAndAge()
    {
        return [$this->employee, $this->employeeAge];
    }

    public function setNameAndAge($name, $age)
    {
        $this->employee = $name;
        $this->employeeAge = $age;
    }
}

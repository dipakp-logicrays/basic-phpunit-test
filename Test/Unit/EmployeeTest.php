<?php

class EmployeeTest extends \PHPUnit\Framework\TestCase
{
    public function testGetEmployeeName(): void
    {
        $employee = new App\Model\Employee;

        $employee->setName("John");

        $this->assertEquals($employee->getName(),'John');
    }

    public function testGetEmployeeAge(): void
    {
        $employee = new App\Model\Employee;

        $employee->setAge(25);

        $this->assertEquals($employee->getAge(),25);
    }

    public function testGetEmployeeNameAndAge(): void
    {
        $employee = new App\Model\Employee;

        $employee->setNameAndAge('John', 25);

        $employeeData = ['John', 25];

        $this->assertEquals($employee->getNameAndAge(),$employeeData);
        $this->assertArrayHasKey(1, $employee->getNameAndAge());
    }
}
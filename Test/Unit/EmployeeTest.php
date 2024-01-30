<?php

class EmployeeTest extends \PHPUnit\Framework\TestCase
{
    protected $employee;

    public function setUp(): void
    {
        $this->employee = new App\Model\Employee;
    }
    public function testGetEmployeeName(): void
    {
        $this->employee->setName("John");

        $this->assertEquals($this->employee->getName(),'John');
    }

    public function testGetEmployeeAge(): void
    {
        $this->employee->setAge(25);

        $this->assertEquals($this->employee->getAge(),25);
    }

    public function testGetEmployeeNameAndAge(): void
    {
        $this->employee->setNameAndAge('John', 25);

        $this->employeeData = ['John', 25];

        $this->assertEquals($this->employee->getNameAndAge(),$this->employeeData);
        $this->assertArrayHasKey(1, $this->employee->getNameAndAge());
    }
}
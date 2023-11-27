<?php
class Employee {
    private $name;
    private $age;
    private $salary;
    private $incentive;
    private $permonth;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function setIncentive($incentive) {
        $this->incentive = $incentive;
    }
    public function setPermonth($permonth) {
        $this->permonth = $permonth;
    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }
    public function getIncentive() {
        return $this->incentive;
    }
    public function getpermonth() {
        return $this->permonth;
    }
}

// Create an employee object
$employee = new Employee();

// Set employee properties
$employee->setName("sajid khan");
$employee->setAge(24);
$employee->setSalary(50000);
$employee->setIncentive(20000);
$employee->setPermonth(700000);

// Get and display employee details
echo "Employee Name: " . $employee->getName() . "<br>";
echo "Employee Age: " . $employee->getAge() . "<br>";
echo "Employee Salary: $" . $employee->getSalary() . "<br>";
echo "Employee incentive: $" . $employee->getIncentive() . "<br>";
echo "Employee permonth: $" . $employee->getpermonth() . "<br>";
?>

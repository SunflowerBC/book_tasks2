<?php

namespace Natal\BookTasks2;

class EmployeeCollection
{
private $employees = [];
public function add($employee)
{
    $this->employees[] = $employee;
}
public function getTotalSalary()
{
    $sum = 0;
    foreach ($this->employees as $employee){
        $sum +=$employee->getSalary();
    }
    return $sum;
}
}
<?php
use Natal\BookTasks2\EmployeeCollection;
use Natal\BookTasks2\Employee;

$employeesCollection = new EmployeeCollection;

$employeesCollection->add(new Employee('ann', 100));
$employeesCollection->add(new Employee('alex', 200));
$employeesCollection->add(new Employee('max', 300));

echo $employeesCollection->getTotalSalary();
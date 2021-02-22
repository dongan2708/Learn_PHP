

<?php
include 'employee.php';
$employee = new employee('123','Lan Anh','Lecturers');
$employee2 = new employee('231','Minh Phuong','Class President');
$employee3 = new employee('321','Lan Ngoc','Leader');

echo 'Man No: ' .$employee->getManNo() . '<br>';
echo 'Name: ' . $employee->getName() . '<br>';
echo 'Position: ' . $employee->getPosition() . '<br>';
echo '<br>';

echo 'Man No: ' .$employee2->getManNo() . '<br>';
echo 'Name: ' . $employee2->getName() . '<br>';
echo 'Position: ' . $employee2->getPosition() . '<br>';
echo '<br>';

echo 'Man No: ' .$employee3->getManNo() . '<br>';
echo 'Name: ' . $employee3->getName() . '<br>';
echo 'Position: ' . $employee3->getPosition() . '<br>';
echo '<br>';
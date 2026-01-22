<?php
class student
{
	public $roll=23;
	public $name='Alex';
	public $city='Pune';
}
$std=new student();
echo "Student Details<br>";
echo "Roll:",$std->roll;
echo "<br>Name:",$std->name;
echo "<br>City:",$std->city;
?>
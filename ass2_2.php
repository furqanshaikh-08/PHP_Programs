<?php
class data_member
{
	static $roll=20;
	public $name="Alex";
}
echo "Roll:",data_member::$roll;
$dm=new data_member();
echo "<br>Name:",$dm->name;
?>
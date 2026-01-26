<?php
abstract class first
{
	public $id=45;
	abstract function show();
	function display()
	{
		echo "Id:",$this->id;
	}
}
class second extends first
{
	function show()
	{
		echo "In show of abstract class<br>";
	}
}
$sd=new second();
$sd->show();
$sd->display();
?>
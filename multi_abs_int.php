<?php
interface apple
{
	function propsa();
}
abstract class banana
{
	abstract function propsb();
}
class properties extends banana implements apple
{
	function propsa()
	{
		echo "Apple is Red in color<br>";
	}
	function propsb()
	{
		echo "Banana is yellow in color";
	}
}
$pr=new properties();
$pr->propsa();
$pr->propsb();
?>
<?php
abstract class Apple
{
	abstract function info();
}
abstract class Grapes extends Apple
{
	abstract function info();
	abstract function info2();
}
class main extends Grapes
{
	function info()
	{
		echo "This is Apple class";
	}
	function info2()
	{
		echo "<br>This is Grapes class";
	}
}
$m=new main();
$m->info();
$m->info2();
?>
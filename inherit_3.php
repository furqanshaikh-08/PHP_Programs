<?php
#Hierarchical inheritance
class Parent1
{
	function disp1()
	{
		echo "<br>In Parent class";
	}
}
class child1 extends Parent1
{
	function disp2()
	{
		echo "<br>In Child1 class";
	}
}
class child2 extends Parent1
{
	function disp3()
	{
		echo "<br>In child2 class";
	}
}
$ch1=new child1();
$ch2=new child2();
$ch1->disp1();
$ch1->disp2();
$ch2->disp1();
$ch2->disp3();
?>
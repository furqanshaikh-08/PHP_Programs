<?php
class cons
{
	 $var1;
	 $var2;
	function __construct($a,$b)
	{
		$var1=$a;
		$var2=$b;
	}
	function display()
	{
		echo "var1:",$var1,"<br>var2:",$var2;
	}
}
$c=new cons(10,"alex");
$c->display();

?>
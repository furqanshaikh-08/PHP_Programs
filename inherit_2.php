<?php
class One
{
	function display1()
	{
		echo "In display1";
	}
}
class Two extends One
{
  function display2()
  {
  	echo "<br>In display2";
  }
}
class Three extends Two
{
	function display3()
	{
		echo "<br>In display3";
	}
}
$tr=new Three();
$tr->display1();
$tr->display2();
$tr->display3();
?>
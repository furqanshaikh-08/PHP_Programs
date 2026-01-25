<?php
interface int1
{
	#public $roll=123;
	function show1();
	#{ echo "In show 1"; }
}
interface int2
{
	function show2();
}
class intmain implements int1,int2
{
	function show1()
	{
		echo "This is show1";
	}
	function show2()
	{
		echo "<br>This is show2";
	}
}
$im=new intmain();
$im->show1();
$im->show2();

?>
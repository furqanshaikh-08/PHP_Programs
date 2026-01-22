<?php
#Multiple inheritance
interface int1
{
	function show1();
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

<?php
#Hybrid inheritance
interface first
{
	function show1();
}
interface second
{
	function show2();
}
interface third extends first,second
{
	function show3();
}
class main implements third
{
	function show1()
	{
		echo "In first interface<br>";
	}
	function show2()
	{
		echo "In second interface<br>";
	}
	function show3()
	{
		echo "In third interface";
	}
}
$m=new main();
$m->show1();
$m->show2();
$m->show3();
?>

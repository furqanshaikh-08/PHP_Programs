<?php
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
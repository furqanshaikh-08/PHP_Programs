<?php
class Base
{
	public function show1()
	{
		echo "In show1";
	}
}
class Derived extends Base
{
	public function show2()
	{
		echo "<br>In show2";
	}
}
$dr=new Derived();
$dr->show1();
$dr->show2();
?>
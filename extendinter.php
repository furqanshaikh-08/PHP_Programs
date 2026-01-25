<?php
interface one
{
	function one1();
}
interface two extends one 
{
	function two1();
}
class main implements two
{
    function one1()
    {
    	echo "in one class<br>";
    }
    function two1()
    {
    	echo "in two class";
    }
}
$m1=new main();
$m1->one1();
$m1->two1();

?>
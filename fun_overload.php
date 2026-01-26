<?php
class main
{
	function add($no1,$no2=0)
	{
		return $no1+$no2;
	}
}
$a=new main();
echo $a->add(2);
echo "<br>",$a->add(2,3);
?>
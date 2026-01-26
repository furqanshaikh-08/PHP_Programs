<?php
class cons
{
	const PI=3.14;
	function cal($r)
	{
		$a=cons::PI*$r*$r;
		echo "area is:",$a;
	}
}
$c=new cons();
$c->cal(3);
echo "<br>PI value:",cons::PI;
?>
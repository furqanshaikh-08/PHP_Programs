<?php
class Demo
{
	public $roll;
	function assign($r)
	{
		$this->roll=$r;
		echo "roll is:",$this->roll;
	}
}
$cs=new Demo();
$cs->assign(10);
echo "<br>",$cs->roll;
?>
<?php
class addstat
{
	static $a=20;
	static $b=30;
	static function add()
	{
		$c=addstat::$a+addstat::$b;
		echo "Addition is:",$c;
	}
}
addstat::add();
?>
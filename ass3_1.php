<?php
interface First
{
	const id=101;
	const name="Alex";
	function show();
}
class main implements First
{
	function show()
	{
		echo "ID:",First::id,"<br>Name:",First::name;
	}
}
$m=new main();
$m->show();
?>
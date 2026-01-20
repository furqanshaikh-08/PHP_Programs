<!--Email id validation-->
<?php
$s="abc45@gmail.in";
if(preg_match("/^[a-z A-Z 0-9]+@[a-zA-Z]+\.[a-z]{2,}$/", $s))
{
	echo "Valid email";
}
else
{
	echo "invalid email";
}
?>
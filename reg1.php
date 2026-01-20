<!--checking strings start with a number or character--> 
<?php
$s="1Hello";
if(preg_match("/^[a-zA-Z]/", $s))
{
	echo "String starts with Alphabet";
}
else
{
	echo "String doesn't starts with Alphabet";
}
?>
<!--check a givrn string starts with characters and ends with number-->
<?php
$s="Welcome45";
if(preg_match("/^[a-z A-Z]+[0-9]+$/", $s))
{
	echo "string start with character and end with number";
}
else
{
	echo "string does not start and end with character";
}
?>
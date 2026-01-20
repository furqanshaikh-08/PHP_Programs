<!--check whether a string contains phone number or not-->
<?php
$n="8543546665";

if(preg_match("/^[6-9]+\d{9}$/", $n))
{
	echo "Phone number found";
}
else
{
	echo "Phone number not found";
}
?>
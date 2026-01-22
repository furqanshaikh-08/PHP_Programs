<?php
class area 
{
	public $len=10;
	public $brd=3;
	function rec_area()
	{
		$ar=$this->len*$this->brd;
		return $ar;
	}
}
$a=new area();
echo "Area of Rectangle:",$a->rec_area();
?>
<?php
interface club{

	public function getClub();
	public function getYelyel();
}

class team 
{
	public function cetakClub(club $isi)
	{
		$isi->getClub();		
	}
	public function cetakYelyel(club $isi)
	{
		$isi->getYelyel();
	}
}

class arema implements club
{
	var $yelYel;

	public function getYelyel()
	{
		echo $this->yelYel = "Salam satu jiwa \n";
	}

	public function getCLub()
	{
		echo "Ini dari Arema : ";
	}

}

class persebaya implements club
{
	var $yelYel;

	public function getCLub()
	{
		echo "Ini dari Persebaya : ";
	}

	public function getYelyel()
	{
		echo $this->yelYel = "Bondo nekat \n";
	}
}

class persija implements club
{
	var $yelYel;

	public function getCLub()
	{
		echo "Ini dari Persija : ";
	}

	public function getYelyel()
	{
		echo $this->yelYel = "Jakmania \n";
	}
}


$arema = new arema();
$persebaya = new persebaya();
$persija = new persija();
$team = new team();

$team->cetakClub($arema);
$team->cetakYelyel($arema);
$team->cetakClub($persebaya);
$team->cetakYelyel($persebaya);
$team->cetakClub($persija);
$team->cetakYelyel($persija);



?>
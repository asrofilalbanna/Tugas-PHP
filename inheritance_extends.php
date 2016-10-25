<?php

class hewan
{
	public function jalan()
	{
		echo "bebek jalan";
	}

}

class bebek extends hewan
{
	public static function terbang()
	{
		echo "bebek jalan";
	}
}

class itik extends bebek
{
	public static function asd()
	{


	$bebek = new bebek();
	// $bebek->terbang();
	// $bebek->jalan();

	if ($bebek->jalan()==$bebek->terbang()){
		echo "sama";
	}
	}
}

?>
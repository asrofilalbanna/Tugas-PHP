<?php namespace kewan;

interface hewan1 {
	public function jalan();
}

class Hewan 
{
	
	public function jalan($hewan)
	{
		echo $hewan . " Berjalan \n";
	}
	public function lari($hewan)
	{
		echo $hewan . " Berlari \n";
	}
}
?>
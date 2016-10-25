<?php  
interface Payment{
	public function kredit();
	public function getSaldo();
}
class ATM 
{
	var $saldo1;
	var $saldo2;
	var $saldo3;
	var $saldo4;

	public function cetakSaldo(Payment $bank)
	{
		$bank->getSaldo();
	}
}

class Mandiri implements Payment //tukul
{
	public function __construct()
	{
		$this->saldo1 = 0;
	}
	public function kredit()
	{
		$this->saldo1++;
	}
	public function getSaldo()
	{
		echo "Jumlah like facebook Tukul : " . $this->saldo1 . " \n";
	}
}

class BNI implements Payment // purnama
{
	public function __construct()
	{
		$this->saldo2 = 0;
	}
	public function kredit()
	{
		$this->saldo2++;
	}
	public function getSaldo()
	{
		echo "Jumlah like facebook Purnama : " . $this->saldo2 . " \n";
	}
}

class perbandingan 
{
	public function banding()
	{
		if ($this->saldo1 > $this->saldo2) {
			echo "Tukul lebih populer";
		} else if ($this->saldo1 < $this->saldo2) {
			echo "Purnama lebih popuer";
		} else {
			echo "sama-sama populer";
		}
	}
	
}


$mandiri = new Mandiri();
$mandiri->kredit();
$mandiri->kredit();
$mandiri->kredit();
$mandiri->kredit();
// saldo tukul 4

$bni = new BNI();
$bni->kredit();
$bni->kredit();
$bni->kredit();
// saldo purnama 3

$atm = new ATM();
$atm->cetakSaldo($mandiri); // menampilkan jumlah like
$atm->cetakSaldo($bni);

$banding = new perbandingan;
$banding->banding($mandiri, $bni);

?>
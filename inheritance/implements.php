<?php
	//-------------- MANFAAT INTERFACE -----------------
	//1. Harus Dideklarasikan Setiap Function di interface ke class yang diimplements
	//2. Mendinamiskan ketika function membutuhkan parameter sebuah object yang berbeda beda

	interface Payment {
		public function kredit();
		public function debit();
		public function getATM();
		public function getSaldo();
	}

	class ATM {
		public function inisialATM(Payment $bank) {
			$bank->getATM();
		}

		public function cetakSaldo(Payment $bank) {
			$bank->getSaldo();
		}
	}

	class Mandiri implements Payment {
		function __construct() {
			$this->saldo = 0;
		}

		public function kredit() {
			$this->saldo++;
		}

		public function debit() {
			$this->saldo--;
		}

		public function getATM() {
			echo "Ini dari Bank Mandiri \n";
		}

		public function getSaldo() {
			echo "Saldo Bank Mandiri Anda adalah : " .$this->saldo ." \n\n";
		}
	}

	class BNI implements Payment {
		function __construct() {
			$this->saldo = 0;
		}
		public function kredit() {
			$this->saldo++;
		}

		public function debit() {
			$this->saldo--;
		}

		public function getATM() {
			echo "Ini dari Bank BNI \n";
		}

		public function getSaldo() {
			echo "Saldo Bank BNI Anda adalah : " .$this->saldo ." \n\n";
		}
	}

	$Mandiri = new Mandiri();
	$Mandiri->kredit();
	$Mandiri->kredit();
	$Mandiri->kredit();
	$Mandiri->kredit();
	$Mandiri->debit();
	
	$BNI = new BNI();
	$BNI->kredit();
	$BNI->kredit();
	$BNI->kredit();
	$BNI->debit();

	$ATM = new ATM();
	$ATM->inisialATM($Mandiri);
	$ATM->cetakSaldo($Mandiri);

	$ATM->inisialATM($BNI);
	$ATM->cetakSaldo($BNI);

?>
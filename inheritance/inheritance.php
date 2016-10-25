<?php
	class Hewan {
		public static $kaki = "Kaki Hewan";

		function bernafas() {
			//closure
			$bernafas = function() {
				return "Hewan ini bernafas";
			};
			
			echo $bernafas();
		}

		function jalan($hewan = '') {
			echo $hewan ." berjalan \n";
		}

		function makan($hewan = '') {
			echo $hewan ." makan \n";
		}
	}

	class Bebek extends Hewan {
		public function terbang() {
			echo "Bebek terbang \n";
		}
	}

	class Itik extends Bebek {
		
	}

	$Bebek = new Bebek();
	$Bebek->bernafas();
	echo "\n" .$Bebek::$kaki;
	// $Hewan = new Hewan();
	// echo $Bebek->kaki = 1;
	// echo $Hewan->kaki = 1;

	// $Bebek->jalan('Bebek');
	// $Bebek->makan('Bebek');

	// $Itik = new Itik();
	// $Itik->terbang();
	// $Itik->jalan('Itik');
?>
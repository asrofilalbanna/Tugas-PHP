<?php
	// interface Klub {
	// 	public function yelYel();
	// }

	// class Arema implements Klub {
	// 	public function yelYel() {
	// 		return "Yel yel Arema adalah Salam Satu Jiwa \n";
	// 	}
	// }

	// class Persija implements Klub {
	// 	public function yelYel() {
	// 		return "Yel yel Persija adalah Jakmania \n";
	// 	}
	// }

	// class Persebaya implements Klub {
	// 	public function yelYel() {
	// 		return "Yel yel Persebaya adalah Bondo Nekat \n";
	// 	}
	// }

	// class Sepakbola {
	// 	public function inisialYelYel(Klub $klub_sb) {
	// 		$yelYel = $klub_sb->yelYel();
	// 		echo $yelYel;
	// 	}
	// }

	// $Arema = new Arema();
	// $Persija = new Persija();
	// $Persebaya = new Persebaya();

	// $Sepakbola = new SepakBola();

	// $Sepakbola->inisialYelYel($Arema);
	// $Sepakbola->inisialYelYel($Persija);
	// $Sepakbola->inisialYelYel($Persebaya);

	//---------------------------------------------

	interface Likeable {
		public function Like();
		public function Dislike();
		public function totalLike();
		public function getLike();
		public function getObject();
	}

	class Facebook implements Likeable {
		function __construct() {
			$this->like = 0;
		}

		public function Like() {
			$this->like++;
		}

		public function Dislike() {
			$this->Like--;
		}

		public function getLike() {
			return $this->like;
		}

		public function getObject() {
			return "Facebook";
		}

		public function totalLike() {
			echo "Like Facebook sebanyak : " .$this->like ."\n";
		}
	}

	class Twitter implements Likeable {
		function __construct() {
			$this->favorite = 0;
		}

		public function Like() {
			$this->favorite++;
		}

		public function Dislike() {
			$this->favorite--;
		}

		public function getLike() {
			return $this->favorite;
		}

		public function getObject() {
			return "Twitter";
		}

		public function totalLike() {
			echo "Favorite Twitter sebanyak : " .$this->favorite ."\n";
		}
	}

	class GooglePlus implements Likeable {
		function __construct() {
			$this->favorite = 0;
		}

		public function Like() {
			$this->favorite++;
		}

		public function Dislike() {
			$this->favorite--;
		}

		public function getLike() {
			return $this->favorite;
		}

		public function getObject() {
			return "Google Plus";
		}

		public function totalLike() {
			echo "Favorite Google Plus sebanyak : " .$this->favorite ."\n";
		}
	}

	class Medsos {
		public function CompareMedsos(Likeable $sosmed1, Likeable $sosmed2, Likeable $sosmed3) {
			if ($sosmed1->getLike() > $sosmed2->getLike() && $sosmed1->getLike() > $sosmed3->getLike()) {
				echo "Like di " .$sosmed1->getObject() ." lebih populer dari " .$sosmed2->getObject() ." dan " .$sosmed3->getObject() ."\n";
			} elseif($sosmed2->getLike() > $sosmed1->getLike() && $sosmed2->getLike() > $sosmed3->getLike()) {
				echo "Like di " .$sosmed2->getObject() ." lebih populer dari " .$sosmed2->getObject() ." dan " .$sosmed3->getObject() ."\n";
			} elseif($sosmed3->getLike() > $sosmed1->getLike() && $sosmed3->getLike() > $sosmed2->getLike()) {
				echo "Like di " .$sosmed3->getObject() ." lebih populer dari " .$sosmed1->getObject() ." dan " .$sosmed2->getObject() ."\n";
			} else {
				if ($sosmed1->getLike() == $sosmed2->getLike() && $sosmed1->getLike() == $sosmed3->getLike()) {
					echo $sosmed1->getObject() .", " .$sosmed2->getObject() ." dan " .$sosmed3->getObject() ." mempunyai jumlah Like yang sama\n";
				} elseif($sosmed1->getLike() == $sosmed2->getLike()) {
					echo $sosmed1->getObject() ." dan " .$sosmed2->getObject() ." lebih populer dari " .$sosmed3->getObject() ."\n";
				} elseif($sosmed2->getLike() == $sosmed3->getLike()) {
					echo $sosmed2->getObject() ." dan " .$sosmed3->getObject() ." lebih populer dari " .$sosmed1->getObject() ."\n";
				} else {
					echo $sosmed1->getObject() ." dan " .$sosmed3->getObject() ." lebih populer dari " .$sosmed2->getObject() ."\n";
				}
			}
		}
	}

	$Facebook = new Facebook();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->totalLike();

	$Twitter = new Twitter();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->totalLike();

	$GooglePlus = new GooglePlus();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->totalLike();

	$Medsos = new Medsos();
	$Medsos->compareMedsos($Facebook, $Twitter, $GooglePlus);
?>
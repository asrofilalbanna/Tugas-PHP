<?php

include 'fb.php';
include 'gplus.php';
include 'tweet.php';

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



	use fb\LikeFB as Facebook;
	$Facebook = new fb\LikeFB;
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->totalLike();

	// use twet\FavorTwet as Facebook;
	// $Twitter->Like();
	// $Twitter->Like();
	// $Twitter->Like();
	// $Twitter->Like();
	// $Twitter->Like();
	// $Twitter->Like();
	// $Twitter->Like();
	// $Twitter->totalLike();

	// use gplus\plusG as Facebook;
	// $GooglePlus->Like();
	// $GooglePlus->Like();
	// $GooglePlus->Like();
	// $GooglePlus->Like();
	// $GooglePlus->Like();
	// $GooglePlus->Like();
	// $GooglePlus->Like();
	// $GooglePlus->totalLike();

	// $Medsos = new Medsos();
	// $Medsos->compareMedsos($Facebook, $Twitter, $GooglePlus);
?>
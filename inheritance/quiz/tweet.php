<?php  namespace twet;

interface Likeable {
		public function Like();
		public function totalLike();
		public function getLike();
	}
class favorTwet implements Likeable
{
	var $like = 0;

	public function Like () { $this->like++; }

	public function getLike () { return $this->like; }
 	
 	public function totalLike () { echo "Total Favorite Twet = " . $this->like . "\n"; }	
}

?>
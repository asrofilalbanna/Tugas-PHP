<?php  namespace gplus;


interface Likeable {
		public function Like();
		public function totalLike();
		public function getLike();
	}
class plusG implements Likeable
{
	var $like = 0;

	public function Like () { $this->like++; }

	public function getLike () { return $this->like; }
 	
 	public function totalLike () { echo "Total Plus Google = " . $this->like . "\n"; }	
}

?>
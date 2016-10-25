<?php  
namespace fb;
interface Likeable {
		public function Like();
		public function totalLike();
		public function getLike();
	}

class likeFB implements Likeable {
	var $like = 0;

	public function Like () { $this->like++; }

	public function getLike () { return $this->like; }
 	
 	public function totalLike () { echo "Total Like FB = " . $this->like . "\n"; }	
}

?>
<?php
class foobar {

	public static $foo = 'foo';

	public function staticValue() 
	{
		return self::$foo();
	}
}

class bar extends foobar {
	public function fooStatic(){
		return parent::$foo;
	}
}
print foobar::$foo;

$Foobar = new foobar;
print $Foobar->staticValue();

?>
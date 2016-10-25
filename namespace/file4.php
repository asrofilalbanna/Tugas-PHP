<?php 
namespace fub;
include 'file1.php';
include 'file2.php';
include 'file3.php';
include 'file6.php';
include 'lib\file5.php';

use foo as feline;
use foo2 as feline2;
use bar;
use animate;
use lib\man as wom;

$cat   = new feline\cat;
$cat2   = new feline2\cat;
$woman = new wom\woman;
$bar = new bar\dog;

echo $cat->says("aas") . "\n"; //public
echo $cat2->says() . "\n"; //public
echo $bar::says('ass') . "\n"; //static
echo animate\animal::breathe() . "\n";
echo $woman->walk() . "\n";
 ?>
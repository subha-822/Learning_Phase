<?php
# PRINTING & COMMENT LINES
echo "Hello World!<br>"; #printing text
//single-line comment
# single-line comment
/*multiple-lines comment*/

# STRING VARIABLE DECLARATION
$name="Subha Rajagopal";
echo"I am $name !<br>";
echo"I am ".$name."!<br>";

# INTEGER VARIABLE DECLARATION
$x=5; #variable declare
$y=4;
echo $x+$y;
echo "<br>";

# SCOPE(GLOBAL,LOCAL)
$z=2; # global scope
function myTest() {
    $z=10;//local scope
    echo $z; // error
    echo "<br>";
}
myTest();
echo $z;
echo "<br>";

# GLOBAL KEYWORD
$a = 5;
$b = 10;
function myTest1() {
  global $a, $b; #global Keyword
  $b = $a + $b;}
myTest1();
echo $b; 
echo "<br>";

# LOCAL KEYWORD
function myTest2(){
    static $x=0; #static keyword
    echo $x;
    $x++;echo "<br>";}
myTest2();

# DATA TYPES
$x="Hello"; #string(5)
$y=10.365;  #float(10.365)
$z=26; #int(26)
$a=False; #bool(false)   Object  Resource
$names = array("subha","deepa","selvi"); #array(3) { [0]=> string(5) "subha" [1]=> string(5) "deepa" [2]=> string(5) "selvi" }
$x=Null; #NULL
var_dump($names);
echo "<br>";

# STRING FUNCTIONS
$x="Subha Rajagopal";
$a=strlen($x);
$b=str_word_count($x);
$c=strrev($x);
$d=strpos($x,"op");
$e=str_replace("Subha","Deepa",$x);
echo "Length of the String is: ".$a;
echo "<br>";
echo "The Word count is: ",$b;
echo"<br>";
echo "The Reverse word: ",$c;
echo"<br>";
echo "The position word: ",$d;
echo"<br>";
echo "The position word: ",$e;

# MATH RELATED FUNCTIONS
$math1=pi();
$math2=min(0, 150, 30, 20, -8, -200);
$math3=max(0, 150, 30, 20, -8, -200);
$math4=abs(-6.7);
$math5=sqrt(144);
$math6=round(5.60);
//$math7=rand();
$math7=rand(1,10);
echo"<br>";
echo $math1;echo"<br>";
echo $math2;echo"<br>";
echo $math3;echo"<br>";
echo $math4;echo"<br>";
echo $math5;echo"<br>";
echo $math6;echo"<br>";
echo $math7;echo"<br>";




?>
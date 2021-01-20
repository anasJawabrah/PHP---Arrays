<?php 

// // Q1 
echo("<h2>Q1</h2>");
$color = array('white', 'green', 'red', 'blue', 'black');


$str="The memory of that scene for me is like a frame of film forever frozen at that
moment: the $color[3] carpet, the $color[1] lawn, the $color[0] house,";

echo($str);
echo('<br/><hr/><br/>');
// //-------------------------------
// //Q2
echo("<h2>Q2</h2>");
$color2 = array('white', 'green', 'red');
foreach($color2 as $a){
    echo($a.",");
}
echo("<br/>");
sort($color2);

echo("<ul>");
foreach($color2 as $a){
    echo("<li>".$a."</li>");
}
echo("</ul>");

echo('<br/><hr/><br/>');
// //-------------------------------

// //Q3
echo("<h2>Q3</h2>");

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;

echo("<ul>");

foreach ($cities as $key => $value) {

    echo("<li> The capital of $key is $value. </li>");
}
echo("</ul>");



echo('<br/><hr/><br/>');
// //-------------------------------


// //Q 4
echo("<h2>Q4</h2>");
$x = array(1, 2, 3, 4, 5);
print_r($x);
echo('<br/>');
 unset($x[3]);
 $x = array_values($x);
 print_r($x);
 
 echo('<br/><hr/><br/>');
//  //-------------------------------
 
//  //Q5
echo("<h2>Q5</h2>");

$color3 = array(4 => 'white', 6 => 'green', 11=> 'red');
echo($color3[4]);

echo('<br/><hr/><br/>');
//  //-------------------------------
 
// //  //Q6
 echo("<h2>Q6</h2>");
 echo('<br/><hr/><br/>');
// //-------------------------------
function printArray($arr){
    $str="";
    foreach ($arr as $key => $value) {
    $str.="$value ";
    }
    echo $str;
}
function printArray2($arr){
    $str="";
    foreach ($arr as $key => $value) {
    $str.="$key : $value ";
    }
    echo $str;
}
//-------------------------------

// //Q7
echo("<h2>Q7</h2>");
$o_array=[1,2,3,4,5];
printArray($o_array);
echo('<br/>');
array_splice($o_array,3,0,'$');
printArray($o_array);


echo('<br/><hr/><br/>');
//-------------------------------
//Q8
echo("<h2>Q8</h2>");
$persons=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

//sort acc the keys;
echo " ascending order sort by key :<br/>";
ksort($persons);
printArray2(($persons));
echo('<br/>');
echo('<br/>');

//sort acc the values
echo " Ascending order sort by value : <br/>";
asort($persons,true);
printArray2(($persons));
echo('<br/>');
echo('<br/>');

//sort des the value
echo " Descending order sorting by Value : <br/>";
$ages=[...array_values($persons)];
rsort($ages);
printArray(($ages));
echo('<br/>');
echo('<br/>');

//sort des the value
echo " Descending order sorting by Value : <br/>";
$names=[...array_keys($persons)];
rsort($names);
printArray(($names));
echo('<br/>');
echo('<br/>');



echo('<br/><hr/><br/>');
//-------------------------------
//Q9
echo("<h2>Q9</h2>");
$temp=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];

sort($temp);
echo "  Lowest 5 points:";
printArray((array_slice($temp,0,5))); 
echo "<br/> the AV =";
echo(array_sum(array_slice($temp,0,5))/5); 

echo "<br/>";
echo "<br/>";
rsort($temp);
echo " Highest 5 points:";
printArray((array_slice($temp,0,5))); 
echo "<br/> the AV =";
echo(array_sum(array_slice($temp,0,5))/5); 

echo('<br/><hr/><br/>');
// //-------------------------------
// //Q11

echo("<h2>Q10</h2>");
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");

function margeArray($arr1,$arr2){
    return [$arr1,$arr2];
}
$margedArray=margeArray($array1,$array2);
var_dump($margedArray);

//-------------------------------



//Q12
echo("<h2>Q12</h2>");
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function ArrayToUpperCase($str){
    return strtoupper($str);
}
$upperCaseArray=array_map("ArrayToUpperCase",$color);

var_dump($upperCaseArray);

echo('<br/><hr/><br/>');
//-------------------------------



//Q13
echo("<h2>Q13</h2>");
for ($i=200; $i <250 ; $i++) { 
    echo((!($i%4==0))?(''):"$i ,");
}


echo('<br/><hr/><br/>');
//-------------------------------




//Q14
echo("<h2>Q14</h2>");

$strings=["abcd","abc","de","hjjj","g","wer"];
$minStrLen=100;
foreach ($strings as $str) {
    $len=strlen($str);
    (!($len <$minStrLen))?null:$minStrLen=$len;
}
echo " $minStrLen";

echo('<br/><hr/><br/>');
//-------------------------------




//Q15
echo("<h2>Q15</h2>");
$range=range(11,20);
shuffle($range);

foreach ($range as $num) {
    echo " $num  ";
}


echo('<br/><hr/><br/>');
//-------------------------------




//Q16
echo("<h2>Q16</h2>");
$nums=[2=>'dd',3=>'332'];
$numsKey=[];
foreach ($nums as $key => $value) {
    array_push($numsKey,$key);
}
echo(max($numsKey));



echo('<br/><hr/><br/>');
//-------------------------------




//Q17
echo("<h2>Q17</h2>");
$nums=[2,1,3.2,6,1.2,0,0.2];
$nums2=[];

foreach ($nums as $num) {
    (!(is_Int($num)&&$num!==0))?null:array_push($nums2,$num);
}
echo(min($nums2));



echo('<br/><hr/><br/>');

// -------------------------------

//Q18
echo("<h2>Q18</h2>");

$num= -323.234;
echo(number_format($num, 2));
echo('<br/><hr/><br/>');
//-------------------------------

//Q19
echo("<h2>Q19</h2>");
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

$red=$color["color"]["a"];
$s=$color["holes"]["5"];

echo("$s $red ");

echo('<br/><hr/><br/>');
//-------------------------------



//Q20
echo("<h2>Q20</h2>");


function common($a, $b)
{
    sort($a);
    sort($b);
    $intersectEl= array_intersect($a,$b);
    $difEl1=array_diff($a,$b);
    $difEl2=array_diff($b,$a);
    return [ ...$intersectEl,...$difEl1,...$difEl2];
}

$a = array(3, 6, 1,0);
$b = array(3, 6, 1,22,2,2,2,45);

$c=common($a,$b);
printArray($c);


echo('<br/><hr/><br/>');
//-------------------------------



//Q24
echo("<h2>Q24</h2>");

$name = array(
    "nani3", "nani", "nani2", "Nani"
);
sort($name, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($name as $key => $val) {
    echo "name[$key] = $val <br/>" ;
}


echo('<br/><hr/><br/>');
//-------------------------------

?>
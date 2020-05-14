Portfolio

<h1> PHP Data types </h1>

<?php 

// NULL

// Boolean

// Integer

// Float

// String

// Array

// Object

// Resource

$name = 'Dima';

$a = 'Hello  $name!';

$b = "Hello \$name,  $name, $name!";

$source = 'Dima:Vova:Timur';

$my_array = explode(':',$source);

$source2 = implode('||', $my_array);

$f = 2==3;

// echo $f;

// var_dump($my_array);

function mylog($arg){
    echo '<pre>', var_dump($arg), '</pre>';
};

$a = 'Super string!!!';

// определяем массив

$myarr = [
    'key1' => 'one', 
    'key2' => 'two', 
    'key3' => 'three',
    'key4' => [
        1,2,3
    ]
];


$find = array_search('two', $myarr);

mylog($find);

// echo $a;

// echo $b;


// $a = 4;
// $b = 7;

// echo pow($a,2);

// $mf = function ($a, $b) {
//     $result = $a*$b;
//     return $result;
// };

// $d = $mf(3,4);

// var_dump($mf)

// echo $d;

// $my_null = NULL;

// var_dump($my_null);

// $my_logic = false;

// echo $my_logic;

// var_dump($my_logic);


?>
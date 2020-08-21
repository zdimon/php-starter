Portfolio page

<h1>PHP Data types</h1>

<?php

// NULL
$my_null = NULL;
echo $my_ull;
var_dump($my_null);
echo '<br>';

// Boolean
$my_logic = false;
echo $my_logic;
var_dump($my_logic);

$f = 2 == 3;

echo mylog($f);

// Integer
$a = 4;
$b = 7;
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo pow($a, 2) . '<br>';

// Float
$f_a = 21.23;

// String
$name = 'Kostiantyn';
$str = 'Hello $name!';
$str2 = "Hello \$name, $name, $name!";

echo $str . '<br>';
echo $str2 . '<br>';

$source = 'Dima:Vova:Timur';
$my_array = explode(':', $source);

// var_dump($my_array);
mylog($my_array);
// echo '<br>';
print_r($my_array);
echo '<br>';
// echo '<br>', '<pre>', var_dump($my_array), '</pre>';

$source2 = implode('||', $my_array);
mylog($source2);

$str_a = '     Super string!!!';
$str_b = ltrim($str_a);
mylog(ltrim($str_a));
mylog(substr($str_b, 0, 5));
mylog(strstr($str_b, 'str'));
mylog(strpos($str_b, 'str'));
mylog(substr_replace($str_b, 'replace', 3));
mylog(substr_replace($str_b, 'replace', 3, 2));

// Array
$myArr = ['one', 'two', 'tree'];
mylog($myArr);

$myArr2 = [
  'key1' => 'one',
  'key2' => 'two',
  'key3' => 'tree',
  'key4' => [1, 2, 4, 5]
];
mylog($myArr2);

myLog($myArr2['key1']);
myLog($myArr[0]);
myLog($myArr2['key4'][1]);

array_push($myArr2, 45);
myLog($myArr2);

$find = array_search('two', $myArr2);
myLog($find);

// Object

// Resource

// function
function add($a, $b)
{
  $result = $a + $b;

  return $result;
}

echo add($a, $b) . '<br>';

$mf = function ($a, $b) {
  $result = $a + $b;

  return $result;
};

echo $mf($a, $b) . '<br>';
var_dump($mf);
echo '<br>';

function myLog($arg)
{
  echo '<pre>', var_dump($arg), '</pre>';
}

//  Домашнее задание
$strHomeWork = 'one;two;three;four';
// 1
$arrHomeWork = explode(';', $strHomeWork);

foreach ($arrHomeWork as &$item) {
  $item = mb_convert_case($item, MB_CASE_TITLE);
}
unset($item);

myLog(implode(';', $arrHomeWork));

// 2
$arrHomeWork = explode(';', $strHomeWork);

for ($i = 0; $i < count($arrHomeWork); $i++) {
  $count = $i + 1;
  $arrHomeWork[$i] = "$count-" . $arrHomeWork[$i];
}

mylog(implode(';', $arrHomeWork));

// 3
$arrHomeWork = explode(';', $strHomeWork);

$arrHomeWork = array_reverse($arrHomeWork);

myLog(implode('-', $arrHomeWork))

?>
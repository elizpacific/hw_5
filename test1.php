<?php
/** task 1.1 */

$ArrayForNumber = range(1, 10);
shuffle($ArrayForNumber);
print_r($ArrayForNumber);

/**
 * @param $ArrayForNumber
 *
 * @return mixed|null
 */

function MaxArrayNumb($ArrayForNumber){
    $MaxNumb = null;
    foreach ($ArrayForNumber as $ValueNumb){
        if($ValueNumb > $MaxNumb){
            $MaxNumb = $ValueNumb;
        }
    }
    return $MaxNumb;
}
print_r("Max number:".MaxArrayNumb($ArrayForNumber).PHP_EOL);

/** task 1.2 */

$ArrayForString = [
  '0' => 'q',
  '1' => 'qw',
  '2' => 'qwe',
  '3' => 'qwer',
  '4' => 'qwert',
  '5' => 'qwerty',
];

/**
 * @param $ArrayForString
 *
 * @return mixed|string
 */

function MaxArrayString($ArrayForString){
    $MaxString = '';
    foreach ($ArrayForString as $ValueForString){
        if($ValueForString > $MaxString){
            $MaxString = $ValueForString;
        }
    }
    return $MaxString;
}
print_r($ArrayForString);
print_r('Max string:'.MaxArrayString($ArrayForString).PHP_EOL);
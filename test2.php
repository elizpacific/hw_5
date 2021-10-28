<?php
$ArrayString = file($argv[1]);
/**
 * @param $ArrayString
 *
 * @return array
 */
function StringCount($ArrayString){
    $ArrayCount = array();
    foreach ($ArrayString as $value){
        $TrimmedValue = trim($value);
        $ArrayCount[] = strlen($TrimmedValue);
    }
    return $ArrayCount;
}
print_r(StringCount($ArrayString));
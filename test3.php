<?php
/**
 * @param $stringForFBHandle
 *
 * @return string
 */
function stringHandlerFB ($stringForFBHandle) {
    $arrayToHandle = explode(" ", $stringForFBHandle);

    $fizz = $arrayToHandle[0];
    $buzz = $arrayToHandle[1];
    $number3 = $arrayToHandle[2];

    $answerStringFB = '';
    $check = 1;
    while($number3 >= $check){
        if($check % $fizz == 0){
            $answerStringFB .= 'F';
            if($check % $buzz ==0){
                $answerStringFB .= 'B';
            }
        }
        if($check % $buzz == 0){
            $answerStringFB .= 'B';
        }
        if($check % $fizz != 0 && $check % $buzz != 0){
            $answerStringFB .= "$check";
        }
        $check++;
    }

    return $answerStringFB . "\n";
}

/**
 * @param $descriptorForRead
 *
 * @return array
 */
function fileReader($descriptorForRead) {
    $arrayWithAllStrings = array();

    while (!feof($descriptorForRead)) {
        $arrayWithAllStrings[] = fgets($descriptorForRead);
    }
    fclose($descriptorForRead);

    return $arrayWithAllStrings;
}

/**
 * @param $descriptorForWrite
 * @param $arrayWithAllNecessaryStrings
 */
function fileWriter($descriptorForWrite, $arrayWithAllNecessaryStrings) {
    foreach ($arrayWithAllNecessaryStrings as $necessaryString) {
        fwrite($descriptorForWrite, $necessaryString);
    }
    fclose($descriptorForWrite);
}

/**
 * @param $pathToReadFB
 * @param $pathToWriteFB
 *
 * @return bool
 */
function read( $pathToReadFB, $pathToWriteFB)
{
    $descriptorForReadFB = fopen($pathToReadFB, 'r');

    $descriptorForWriteFB = fopen($pathToWriteFB, 'w+');

    if ($descriptorForReadFB) {
        /** task 3 FB */
        $arrayWithAllStrings = fileReader($descriptorForReadFB);
        $arrayWithAllFB = array_map('stringHandlerFB',$arrayWithAllStrings);
        fileWriter($descriptorForWriteFB, $arrayWithAllFB);

        return true;
    } else {
        echo "Ошибка\n";

        return false;
    }
}

read(
    'C:\Users\User\Desktop\PHP\hw_5\ForRead.txt',
    'C:\Users\User\Desktop\PHP\hw_5\ForWrite.txt'
);

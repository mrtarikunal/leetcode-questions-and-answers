<?php
/**
 * @param String $s
 * @return Boolean
 */
function isValid($s) {
    $pars = str_split($s);
    $result = [];
    $cnt = count($pars);

    if($cnt == 0) {
        return true;
    }

    for($i = 0; $i < $cnt; $i++) {
        if( $cnt[$i] === '(' || $cnt[$i] === '[' || $cnt[$i] === '{' ){
            $result[] = $cnt[$i];
        } else if ( ($cnt[$i] === ')' && count($result) !== 0 && $result[count($result) - 1] === '(') ||
            ($cnt[$i] ===  '}' && count($result) !== 0 && $result[count($result) - 1] ===  '{') ||
            ($cnt[$i] ===  ']' && count($result) !== 0 && $result[count($result) - 1] ===  '[')
        ){
            array_pop($result);
        } else {
            return false;
        }
    }

    if(count($result) == 0) {
        return true;
    }
    return false;

}
isValid("()[]");

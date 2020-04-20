<?php

const ROUND_BRACKETS = 1;
const SQUARE_BRACKETS = 2;
const BRACES = 3;

function checkBracket($string)
{
    $newStack = new SplStack();
    for ($i = 0; $i < strlen($string); $i++) {
        switch ($string[$i]) {
            case "(":
                $newStack->push(ROUND_BRACKETS);
                break;
            case "[":
                $newStack->push(SQUARE_BRACKETS);
                break;
            case "{":
                $newStack->push(BRACES);
                break;
            case ")":
                if($newStack->isEmpty()){
                    return false;
                }else{
                    if ($newStack->pop() != ROUND_BRACKETS)
                        return false;
                }
                break;
            case "]":
                if($newStack->isEmpty()){
                    return false;
                }else{
                    if ($newStack->pop() != SQUARE_BRACKETS)
                        return false;
                }
                break;
            case "}":
                if($newStack->isEmpty()){
                    return false;
                }else{
                    if ($newStack->pop() != BRACES)
                        return false;
                }
                break;
        }
    }
    return $newStack->isEmpty();
}



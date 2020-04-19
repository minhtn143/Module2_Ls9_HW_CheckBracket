<?php

const FALSE_MESSAGE = "Incorrect";
const TRUE_MESSAGE = "Correct";
const ROUND_BRACKETS = 1;
const SQUARE_BRACKETS = 2;
const BRACES = 3;

function checkBracket($string)
{
    $newStack = new Stack();
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
                if ($newStack->pop() != ROUND_BRACKETS)
                    return FALSE_MESSAGE;
                break;
            case "]":
                if ($newStack->pop() != SQUARE_BRACKETS)
                    return FALSE_MESSAGE;
                break;
            case "}":
                if ($newStack->pop() != BRACES)
                    return FALSE_MESSAGE;
                break;
        }
    }
    return TRUE_MESSAGE;
}



<?php


class Stack
{
    const LIMIT =100;
    protected $stack;
    protected $size;

    public function __construct($size = self::LIMIT)
    {
        $this->stack = [];
        $this->size = $size;
    }

    public function push($element)
    {
        if ($this->isFull()){
            return "STACK IS FULL";
        }else{
            array_push($this->stack, $element);
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return "STACK IS EMPTY!";
        } else {
            return array_pop($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull()
    {
        return count($this->stack) > $this->size;
    }

}
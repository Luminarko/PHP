<?php
interface Pushable{
    public function push(mixed $value);
    public function pop(): mixed;
}

class Fifo implements Pushable{

    private $fifo;

    public function __construct(){
        $this->fifo = [];
    }
    public function push(mixed $value){
        array_push($this->fifo, $value);
        return $this;
    }
    public function pop():mixed{
        echo array_shift($this->fifo)." ";
        array_values($this->fifo);
        return $this;
    }
}

$array = (new Fifo)->push(4)->push(5)->push(6)->pop()->push(10)->pop();
var_dump($array);
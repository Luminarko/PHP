<?php
interface Pushable{
    public function push(mixed $value);
    public function pop(): mixed;
}
class Lifo implements Pushable{
    private $lifo;

    public function __construct(){
        $this->lifo = [];
    }
    public function push(mixed $value){
        array_push($this->lifo, $value);
        return $this;
    }
    public function pop():mixed{ 
        echo array_pop($this->lifo);
        array_values($this->lifo);
        return $this;
    }
} 
$array = (new Lifo)->push(4)->push(5)->push(6)->pop();

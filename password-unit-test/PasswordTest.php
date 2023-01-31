<?php

class Test{
    private $password;

    public function __construct(string $value){
        $this->password = str_split($value);
        $this->small = range("a","z");
        $this->big = range("A", "Z");
        $this->num = range("0", "9");
        $this->special = preg_split('//', "%/-=!()&#[]{}?:.@$^*\~`<>°", -1, PREG_SPLIT_NO_EMPTY);
    }
    private function has_small(){
        $small = range("a","z");
        if(array_intersect($this->password, $this->small) != NULL){
            return true;
        }else{
            return false;
        }
        
    }
    private function has_big(){
        $big = range("A", "Z");
        if(array_intersect($this->password, $this->big) != NULL){
            return true;
        }else{
            return false;
        }
    }
    private function has_number(){
        $small = range("a","z");
        if(array_intersect($this->password, $this->num) != NULL){
            return true;
        }else{
            return false;
        }
    }
    private function has_special(){
        if(array_intersect($this->password, $this->special) != NULL){
            return true;
        }else{
            return false;
        }
    }
    public function is_usable(){
        if($this->has_small() == true && $this->has_big() == true && $this->has_number() == true){
            if($this->has_special() == true){
                echo "Tvoje heslo je perfektní <3";
            }else{
                echo "Tvoje heslo je velice dobré, ale ne perfektní <3";
            }
        }else{
            echo "Tvé heslo je na tom velice špatně... Je čas využít funkci upgrade_old() z classy Password.";
        }
    }
}

$test = (new Test("93ffo6CYEW#"))->is_usable();

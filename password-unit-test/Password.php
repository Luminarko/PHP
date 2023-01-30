<?php

class Password{

    private $password, $nums, $big, $small, $special, $all_chars, $all_chars_special;
    
    public function __construct(){

        $this->nums = implode("",range("0", "9"));
        $this->big = implode("",range("A", "Z"));
        $this->small = implode("",range("a","z")); 
        $this->special = "%/-=!()&#[]{}?:.@$^*\~`<>°";
        $this->all_chars = $this->nums.$this->big.$this->small;
        $this->all_chars_special = $this->all_chars.$this->special;
        $this->password = [];
        $this->password = $this->nums[mt_rand(0, strlen($this->nums)-1)];
        $this->password .= $this->small[mt_rand(0, strlen($this->small)-1)];
        $this->password .= $this->big[mt_rand(0, strlen($this->big)-1)];
    }  
    public function gene(int $lenght, int $mode){
        if($mode == 0){
            for($i = 3; $i < $lenght; $i++){
                $this->password .= $this->all_chars[mt_rand(0, strlen($this->all_chars))];
            }
            $this->password = str_shuffle($this->password);
            return $this;
        }
        else{
            $this->password .= $this->special[mt_rand(0, strlen($this->special)-1)];
            for($i = 4; $i < $lenght; $i++){
                $this->password .= $this->all_chars_special[mt_rand(0, strlen($this->all_chars_special))];
            }
            $this->password = str_shuffle($this->password);
            return $this;
        }
    }
    public function upgrade_old(string $old, int $new_lenght){
        $new = "";
        for($i = 0; $i < ($new_lenght - strlen($old)); $i++){
            $new .= $this->all_chars_special[mt_rand(0, strlen($this->all_chars_special)-1)];
        }
        echo str_shuffle($old.$new);
    }
    public function get(int $lenght, int $mode){
        $this->gene($lenght, $mode);
        echo $this->password;
    }
}
$new = (new Password)->get(10, 0);
echo "\n";
$new2 = (new Password)->upgrade_old("O3YH7O1WOg", 15);
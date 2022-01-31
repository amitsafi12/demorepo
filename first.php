<?php
class Myclass
{
    public $a,$b;
    function __construct($name,$last)
    {
        echo $this->a=$name;
        echo $this->b=$last;
        
    }
}
$p1=new Myclass("amit","safi");
?>
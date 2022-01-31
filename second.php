<?php
class A 
{
    public $d,$c,$g;

    function __construct($last,$roll,$sec)
    {
        echo $this->d=$last."\n";
        echo $this->c=$roll."\n";
        echo $this->g=$sec;

    }
}
class B 
{
       function __construct($name,$age)
    {
        echo $this->d=$name."\n";
        
        
        echo $this->c=$age;
    }

}
 $p=new B("amit",23);
 $p1=new A("safi",002,"A");
?>
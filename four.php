<?php
abstract class Vechicle
{
      protected $number_of_tyre;
    abstract function show();
}
class maruti extends Vechicle
{
     protected $number_of_tyre=5;
    
    function show()
    {
        echo "number of tyre=".$this->number_of_tyre;
        echo "maruti class";
    }

}
class dustra extends Vechicle
{
    //$number_of_tyre=53;
   
    function show()
    {
        //echo "number of tyre=".$this->number_of_tyre;
        echo "dustra class";
    }

}
$p=new maruti();
$p->show();
?>
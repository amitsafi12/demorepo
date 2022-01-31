<?php
class A 
{
   public function show1()
    {
        echo "class A";
    }
}
 class B extends A 
{
   public function show($s)
    {
        echo "class B";
    }
}
$p=new B();
$p->show(2);
$p->show1();

?>
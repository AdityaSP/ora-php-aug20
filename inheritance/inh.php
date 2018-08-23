<?php
class A{
    private $v1=500;
    public function __construct(){
        $this->v1 = 100;
    }
    public function sayhi(){
        echo "Hi from A<hr>" . $this->v1;
    }
}

class B extends A{
    private $v2;
    public function __construct(){
        parent::__construct();
        $this->v2 = 200;
    }
    public function sayhi(){
        parent::sayhi();
        echo "Hi from B<hr>" . $this->v2;
    }
}

$b = new B();
$b->sayhi();
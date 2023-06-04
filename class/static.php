<?php

class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
   /* foo() will be copied to B, hence its scope will still be A and
    * the call be successful */
}

class C extends A {
    private function foo() {
        echo "Unsuccess!\n";    
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test();   //fails
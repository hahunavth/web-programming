<?php

class Counter {
    private static $count = 0;
    const VERSION = 2.0;
    function __construct() {
        self::$count++;
    }
    function __destruct() {
        self::$count--;
    }
    static function getCount () {
        return self::$count;
    }

}
$c1 = new Counter;
print(Counter::getCount());

$c2 = new Counter;
print(Counter::getCount());

$c2 = null;

print( $c1->getCount() . "<br/>");
print "Version used: " . Counter::VERSION . "<br/>\n";
<?php
require('./vendor/autoload.php');

use DesignPatterns\Singleton\BookSingleton;

class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function testFirstTime()
    {
        // assertions
        $book = BookSingleton::borrowBook();
    }
}
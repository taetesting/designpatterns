<?php
namespace DesignPatterns\Singleton;

class BookSingleton
{
    private $title  = 'Clean Code';
    private $author = 'Uncle Bob';
    private static $book;
    private static $isLoaned = false;

    private function __construct()
    {
        
    }

    public function borrowBook()
    {
        if (false === self::$isLoaned) {
            if (null === self::$book) {
                self::$book = new self;
            }
            self::$isLoaned = true;
            return self::$book;
        } else {
            return null;
        }
    }

    public function getBookInfo()
    {
        $info['title'] = $this->title;
        $info['author'] = $this->author;
        return $info;
    }

    public function returnBook()
    {
        self::$isLoaned = false;
    }
}
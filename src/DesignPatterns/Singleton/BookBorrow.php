<?php
namespace DesignPatterns\Singleton;

use DesignPatterns\Singleton\BookSingleton;

class BookBorrow
{
    private $haveBook = false;
    private $borrowedBook;

    public function getAuthorAndTitle()
    {
        if (false === $this->haveBook) {
            return 'I don\'t have any book.';
        } else {
            $info = $this->borrowedBook->getBookInfo();
            return "The Title: {$info['title']}, Author: {$info['author']}";
        }
    }

    public function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();
        if (null === $this->borrowedBook) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }

    public function returnBook()
    {
        $this->borrowedBook->returnBook();
        $this->haveBook = false;
    }
}
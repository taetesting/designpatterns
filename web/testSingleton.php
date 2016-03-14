<?php
require('vendor/autoload.php');

use DesignPatterns\Singleton\BookBorrow;

$case1 = new BookBorrow();
$case2 = new BookBorrow();

$case1->borrowBook();
writeln('BookBorrower1 asked to borrow the book');
writeln('BookBorrower1 Author and Title: ');
writeln($case1->getAuthorAndTitle());
writeln('');

$case2->borrowBook();
writeln('BookBorrower2 asked to borrow the book');
writeln('BookBorrower2 Author and Title: ');
writeln($case2->getAuthorAndTitle());
writeln('');

$case1->returnBook();
writeln('BookBorrower1 returned the book');
writeln('BookBorrower1 Author and Title: ');
writeln($case1->getAuthorAndTitle());
writeln('');

$case2->borrowBook();
writeln('BookBorrower2 asked to borrow the book');
writeln('BookBorrower2 Author and Title: ');
writeln($case2->getAuthorAndTitle());
writeln('');

function writeln($line_in) {
    echo $line_in.PHP_EOL;
}
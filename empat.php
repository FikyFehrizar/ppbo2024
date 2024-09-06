<?php 
require_once "Author.php";
require_once "Publisher.php";
require_once "Book.php";

$author = new Author("Henry Manampiring", "seorang penulis dari buku Filosofi Teras");
$publisher = new Publisher("PT. Kompas Media Nusantara", "Jakarta", "123456789");
$book = new Book(9786233463034, "Filosofi Teras", "sebuah buku filosofi stoic", "filosofi", "Indonesia", 346, $author, $publisher);

echo " Informasi buku ";
print_r($book->showAll());
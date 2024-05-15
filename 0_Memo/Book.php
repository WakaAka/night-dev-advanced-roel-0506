<?php

class Book{
    #
    #
private $title;
private $author;
private $genre;
private $year_published;

    #
    #

    #
public function displayDetails(){
    #
    echo "Title: " . $this->title . "<br>";

    #
    echo "Author: " . $this->author . "<br>";
}

#
#
public function setTitle($new_title){
    $this->title = $new_title;
}

public function setAuthor($new_author){
    $this->author = $new_author;
}

public function setGenre($new_genre){
    $this->genre = $new_genre;
}

public function setYearPublished($new_year_published){
    $this->year_published = $new_year_published;
}

#
#

public function getTitle(){
    return $this->title;
}

public function getAuthor(){
    return $this->author;
}

public function getGenre(){
    return $this->genre;
}

public function getYearPublished(){
    return $this->year_published;
}
}

#
#

$first_book = new Book;

$first_book->author = "Walt Disney Productions";
$first_book->title = "The Jungle Book";

#
$first_book-> displayDetails();


$secind_book = new Book;

$second_book->setAuthor ("Lewis Carroll");
$second_book->setTitle ("Alice in Wonderland");
$second_book->setGenre ("Fantasy");
$second_book->setYearPublished ("1865");
?>
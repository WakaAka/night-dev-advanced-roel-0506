<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Oop</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="author" id="author" placeholder="Enter Author">
        <br>
        <input type="text" name="title" id="title"placeholder="Enter Titlr">
        <br>
        <input type="text" name="genre" id="genre" placeholder="Enter Genre">
        <br>
        <input type="text" name="year" id="year"placeholder="Enter Year Published">
        <br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>

</body>
</html>

<?php
    include "Book.php";
    
    if(isset($_POST['btn_submit'])){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $year = $_POST['year'];


        //
        $book =new Book;

        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setGenre($genre);
        $book->setYearPublished($year);


         echo "<br>Author: " . $book->getAuthor() ."<br>";
         echo "<br>Title: " . $book->getTitle() ."<br>";
         echo "<br>Genre: " . $book->getGenre() ."<br>";
         echo "<br>Year Published: " . $book->getYearPublished() ."<br><br>";
    }
?>
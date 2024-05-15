<?php 

    class Book {
        # Properties -> variables
        # Properties represents the characteristics or attributes of a class.
        var $title; # var -> public 
        public $author;
        private $genre;
        private $year_published;

        # Methods -> functions
        # Methods represents the actions or behaviors that a class can perform.

        #Constructor
        public function __construct($new_title,$new_author,$new_genre,$new_year_published){
            $this->title = $new_title;
            $this->author = $new_author;
            $this->genre = $new_genre;
            $this->year_published = $new_year_published;
        }


        # A function to display the details of the book
        public function displayDetails() {
            # Display the Title
            echo "Title: " . $this->title . "<br>";

            # Display the Author
            echo "Author: " . $this->author . "<br>";
        }

        # Setters
        # Methods used to asssign values to the class properties
        //public function setTitle($new_title) {
        //    $this->title = $new_title;
       // }

        //public function setAuthor($new_author) {
        //    $this->author = $new_author;
       // }

        //public function setGenre($new_genre) {
        //    $this->genre = $new_genre;
       // }

        //public function setYearPublished($new_year_published) {
        //    $this->year_published = $new_year_published;
        //}

        # Getters
        # Methods used to retrieve the values of a class properties.
        public function getTitle() {
            return $this->title;
        }

        public function getAuthor() {
            return $this->author;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function getYearPublished() {
            return $this->year_published;
        }
    }

    # Instantiation of a class
    # Instantiate is creating a new copy of the class.

    //$first_book = new Book;

    //$first_book->author = "Walt Disney Productions";
    //$first_book->title = "The Jungle Book";

    # Displaying the book details
    //$first_book->displayDetails();


    //$second_book = new Book;
    
    //$second_book->setAuthor("Lewis Carroll");
    //$second_book->setTitle("Alice in Wonderland");
    //$second_book->setGenre("Fantasy");
    //$second_book->setYearPublished(1865);

    //echo "<br>Author: " . $second_book->getAuthor() ."<br>";
    //echo "<br>Title: " . $second_book->getTitle() ."<br>";
    //echo "<br>Genre: " . $second_book->getGenre() ."<br>";
    //echo "<br>Year Published: " . $second_book->getYearPublished() ."<br><br>";
    
    $third_book =new Book("Alice in Wonderland","Lewis Carroll","Fantasy",1865);
    echo "<br>Author: " . $third_book->getAuthor() ."<br>";
    echo "<br>Title: " . $third_book->getTitle() ."<br>";
    echo "<br>Genre: " . $third_book->getGenre() ."<br>";
    echo "<br>Year Published: " . $third_book->getYearPublished() ."<br><br>";
?>
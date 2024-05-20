<?php
class Movie {

    //* Dihiaro le variabili


    public $title;
    public $director;
    public $genre;
    public $year;

    //* Dichiaro il contruttore
    public function __construct($_title, $_director, $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }
    //* Creare il method
    public function getNameMovie() {
        return $this->title;
    }
}

// Crea nee objects
$inception = new Movie('Inception', 'Christopher Nolan', 'fantascienza');
$inception->year = '2010';

$theTrumanShow = new Movie('The Truman Show', 'Peter Weir', 'drammatico');
$theTrumanShow->year = '1998';

$movies = [
    $inception,
    $theTrumanShow
];
?>


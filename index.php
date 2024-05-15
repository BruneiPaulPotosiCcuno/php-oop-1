<?php
class Movie {
    //* Dihiaro le variabili

    
    public $title;
    public $year;
    public $genre;

    //* Dichiaro il contruttore


    public function __construct($title, &$genre, &$year)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    //* Creare il method


    public function getTitle() {
        return $this->title;
    }
    public function getGenre() {
        return $this->genre;
    } 
    public function getYear() {
        return $this->year;
    }

}
?>

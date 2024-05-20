<?php
class Movie
{

    //* Dihiaro le variabili


    public $title;
    public $director;
    public $genre;
    public $year;

    //* Dichiaro il contruttore
    public function __construct($_title, $_director, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }
    //* Creare il method
    public function getNameMovie()
    {
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

<!-- TEMPLATE -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($movies as $film) { ?>
        <div>
            <div>
                <h1>Film:</h1>
                <?php echo $film->getNameMovie() ?>
            </div>
            <div>Genere: <?php echo $film->genre ?></div>
            <div>Anno: <?php echo $film->year ?></div>
            <hr>
        </div>
    <?php } ?>
</body>

</html>
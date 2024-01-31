<?php
    // Definita la classe Movie
    class Movie{

        // Dichiarate le variabili d'istanza
        public $title;
        public $genre;
        public $year;
        public $lang;

        // Definito un costruttore
        function __construct($_title, $_genre, $_year, $_lang){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->lang = $_lang;
        }

        // Definisco un metodo
        public function printedFilm(){
            return "<div>".$this->title.". Genere: ".implode('/', $this->genre).". Anno di uscita: ".$this->year.". Lingua originale: ".$this->lang."</div>";
        }
    }

    // Creo le istanze della classe Movie
    $movie_1 = new Movie("Inception", ["Azione", "Sci-fi"], 2010, "Inglese");
    $movie_2 = new Movie("La vita è bella", ["Drammatico", "Guerra"], 1997, "Italiano");
    $movie_3 = new Movie("Quasi amici - Intouchables", ["Commedia", "Drammatico"], 2011, "Francese");

    $movieArray = [
        $movie_1,
        $movie_2,
        $movie_3
    ]
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Php OOP</title>
</head>
<body>
    <h1 class="text-center my-5">Movie Card</h1>
    <div class="container">
        <div class="row">
            <?php foreach($movieArray as $movie) { ?>
                <div class="col-4">
                    <div class="card text-center">
                        <div class="card-title">
                            <h3><?php echo $movie->title ?></h3>
                        </div>
                        <p><?php echo "Genere: ".implode('/', $movie->genre) ?></p>
                        <p><?php echo "Anno di uscita: ".$movie->year ?></p>
                        <p><?php echo "Lingua originale: ".$movie->lang ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
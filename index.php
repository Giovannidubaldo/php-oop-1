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
            return "<div>".$this->title.". Genere: ".$this->genre.". Anno di uscita: ".$this->year.". Lingua originale: ".$this->lang."</div>";
        }
    }

    // Creo le istanze della classe Movie
    $movie_1 = new Movie("Inception", "Sci-fi", 2010, "Inglese");
    $movie_2 = new Movie("La vita è bella", "Commedia", 1997, "Italiano");
    $movie_3 = new Movie("Quasi amici - Intouchables", "Commedia", 2011, "Francese");

    echo $movie_1->printedFilm();
    echo $movie_2->printedFilm();
    echo $movie_3->printedFilm();
    
?>
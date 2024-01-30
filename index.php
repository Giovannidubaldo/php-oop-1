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
            $this->$title = $_title;
            $this->$genre = $_genre;
            $this->$year = $_year;
            $this->$lang = $_lang;
        }

        // Definisco un metodo
        public function printedFilm(){
            return $this->title.", Genere: ".$this->genre", Anno di uscita: ".$this->year.", Lingua: ".$this->lang;
        }
    }

    
?>
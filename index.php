<!-- 
    è definita una classe 'Movie'
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
 -->
<?php 
class Movie{
    public $title;
    public $genre= array();
    public $director;
    public $duration;

   // definizione del costruttore
   public function __construct($_title, $_genre, $_director, $_duration="unknown")
   {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->director = $_director;
    $this->duration = $_duration;
   }

   // definizione di un metodo per aggiungere un genere
   public function addGenre($newGenres) {
    if (is_array($newGenres)) {
        $this->genre = array_merge($this->genre, $newGenres);
    } else {
        array_push($this->genre, $newGenres);
    }
}


   public function getSummary() {
    $genreString = implode(", ", $this->genre);
    return "{$this->title}, diretto da {$this->director}, durata {$this->duration} minuti e di genere:({$genreString}).";
   }
}

// istanziazione oggetti Movie
$ritorno_al_futuro = new Movie("Ritorno al Futuro", array("Avventura", "Fantascienza"), "Robert Zemeckis", 116);

// aggiungi il genere "Commedia"
$ritorno_al_futuro->addGenre("Commedia");

$pulp_fiction = new Movie("Pulp Fiction", array("Azione"), "Quentin Tarantino", 154);
$pulp_fiction->addGenre(["Thriller"]);


// stampa a schermo dei valori delle proprietà
echo $ritorno_al_futuro->getSummary() . "<br>";
echo "<hr>";
echo $pulp_fiction->getSummary() . "<br>";

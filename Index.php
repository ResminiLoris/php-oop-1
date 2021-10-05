<?php 
class Movie {
    public $title;
    public $releaseDate;
    public $director;
    public $rRated = false;

    public function __construct($_title){
        $this->title = $_title;
    }

    public function print(){
        echo "<strong>" . ($this->title) . "</strong>" . "<br>";
        echo ($this->releaseDate) . "<br>";
        echo ($this->director) . "<br>";
    }
     
    public function isRated(){
        if ($this->rRated){
            echo ("questo film non è adatto ai minori");
        }
    }
}

$movie1 = new Movie("Braveheart");
$movie1->releaseDate = 1995;
$movie1->director = "Mel Gibson";
$movie1->print();
$movie1->isRated();

$movie2 = new Movie("Il Gladiatore");
$movie2->releaseDate = 2000;
$movie2->director = "Ridley Scott";
$movie2->rRated = true;
$movie2->print();
$movie2->isRated();


<?php
class Movie
{
    public $movie;
    public $date;
    public $stars;
    public $rate;

    public function __construct($movie, $date, $stars)
    {
        $this->movie = $movie;
        $this->date = $date;
        $this->stars = $stars;
    }
    public function checkRate($rate, $stars)
    {
        $this->rate = $rate;
        $rate = $stars / 5;
    }

}
$avatar = new Movie('Avatar', "2010", 10);
$Ritorno = new Movie('Ritorno al Futuro', '1985', 8);


var_dump($avatar);
var_dump($Ritorno);


?>
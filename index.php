<?php

require __DIR__ . '/Models/Genre.php';
class Movie
{
    public $title;
    public $description;
    public $link;
    public $sconto = 0;
    public $genre;

    public function __construct(string $title, string $description, string $link, array $genre)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->genre = $genre;
    }

    public function setDiscount($age)
    {
        if ($age > 45) {
            $this->sconto = 20;
        } else if ($age < 18) {
            $this->sconto = 50;
        }
    }

    public function getDiscount()
    {
        return $this->sconto;
    }
}


$Genres = [
    new Genre("Fantasy"),
    new Genre("Horror")
];


$avatar = new Movie("Avatar", "lorem ipsum", "www.avatar.com", $Genres);
$avatar->setDiscount(16);
$scontoAvatar = $avatar->getDiscount();
var_dump($scontoAvatar);

$matrix = new Movie("Matrix", "lorem ipsum 2", "ww.matrix.com", $Genres);
$matrix->setDiscount(70);
$scontomatrix = $matrix->getDiscount();
var_dump($scontomatrix);

var_dump($avatar->title);
var_dump($matrix->title);

var_dump($avatar->genre);

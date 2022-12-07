<?php

class Movie
{
    public $title;
    public $description;
    public $link;
    public $sconto = 0;

    public function __construct(string $title, string $description, string $link)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
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


$avatar = new Movie("Avatar", "lorem ipsum", "www.avatar.com");
$avatar->setDiscount(16);
$scontoAvatar = $avatar->getDiscount();
var_dump($scontoAvatar);

$matrix = new Movie("Matrix", "lorem ipsum 2", "ww.matrix.com");
$matrix->setDiscount(70);
$scontomatrix = $matrix->getDiscount();
var_dump($scontomatrix);

var_dump($avatar->title);
var_dump($matrix->title);

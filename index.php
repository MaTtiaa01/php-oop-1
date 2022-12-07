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

    public static function getDiscount($age)
    {
    }
}


$avatar = new Movie("Avatar", "lorem ipsum", "www.avatar.com");
$matrix = new Movie("Matrix", "lorem ipsum 2", "ww.matrix.com");

echo Movie::getDiscount(40);
var_dump($avatar);
var_dump($matrix);

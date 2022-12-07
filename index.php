<?php

require __DIR__ . '/Models/Genre.php';
class Movie
{
    public $title;
    public $description;
    public $link;
    public $discount = 0;
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
            $this->discount = 20;
        } else if ($age < 18) {
            $this->discount = 50;
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}


$Genres = [
    new Genre("Fantasy"),
    new Genre("Horror")
];


$avatar = new Movie("Avatar", "lorem ipsum", "www.avatar.com", $Genres);
$avatar->setDiscount(16);
$discountAvatar = $avatar->getDiscount();
var_dump($discountAvatar);

$matrix = new Movie("Matrix", "lorem ipsum 2", "ww.matrix.com", $Genres);
$matrix->setDiscount(70);
$discountmatrix = $matrix->getDiscount();
var_dump($discountmatrix);

var_dump($avatar->title);
var_dump($matrix->title);

var_dump($avatar->genre);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
            <div class="col">
                <h2>Title</h2>
                <ul>
                    <li>
                        <?php echo $avatar->title; ?>
                    </li>
                    <li>
                        <?php echo $matrix->title; ?>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h2>Description</h2>
                <ul>
                    <li>
                        <?php echo $avatar->description; ?>
                    </li>
                    <li>
                        <?php echo $matrix->description; ?>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h2>Link</h2>
                <ul>
                    <li>
                        <?php echo $avatar->link; ?>
                    </li>
                    <li>
                        <?php echo $matrix->link; ?>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h2>discount</h2>
                <ul>
                    <li>
                        <?php echo $avatar->discount; ?>
                    </li>
                    <li>
                        <?php echo $matrix->discount; ?>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h2>Genre</h2>
                <ul>
                    <li>

                    </li>
                    <li>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
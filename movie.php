<?php
class MovieCard {
    public $movieName;
    public $movieDate;
    public $movieDescription;
    public $movieOriginalLanguage;
    
    // function construct + control array
    function __construct(array $movieDetails) {
        $this->movieName = $movieDetails["movieName"];    
        $this->movieDate = date_format(date_create($movieDetails["movieDate"]), "Y");    
        $this->movieDescription = $movieDetails["movieDescription"];    
        $this->movieOriginalLanguage = $movieDetails["movieOriginalLanguage"];    
    }

    // function stamp to return data in html
    public function stamp() {
        return "<div class='ms_card'><h2>Title: " . $this->movieName . "</h2>" . 
                "<span>Language: " . $this->movieOriginalLanguage . "</span>" . 
                "<p>Year: " . $this->movieDate . "</p>" . 
                "<p>Plot-Summary: " . $this->movieDescription . "</p></div>";
    }
}

// singoli object in array
$firstMovie = new MovieCard([
    "movieName" => "Spider-Man: No Way Home",
    "movieDate" => "15-12-2021",
    "movieDescription" => "With Spider-Man's identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.",
    "movieOriginalLanguage" => "EN"
]);

$secondMovie = new MovieCard([
    "movieName" => "The Eternals",
    "movieDate" => "03-11-2021",
    "movieDescription" => "Following the events of Avengers: Endgame (2019), an unexpected tragedy forces the Eternals, ancient aliens who have been living on Earth in secret for thousands of years, out of the shadows to reunite against mankind's most ancient enemy, the Deviants.",
    "movieOriginalLanguage" => "EN"
]);

$thirdMovie = new MovieCard([
    "movieName" => "Shang-chi & The Legend of the Ten Rings",
    "movieDate" => "02-09-2021",
    "movieDescription" => "Shang-Chi, the master of weaponry-based Kung Fu, is forced to confront his past after being drawn into the Ten Rings organization.",
    "movieOriginalLanguage" => "EN"
]);

// creation of an array for every instance
$movieList = array($firstMovie, $secondMovie, $thirdMovie);

?>

<!-- ------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-OOP</title>
</head>
<body>
    <header>
        <h1 class="m-0">Movie List</h1>
    </header>
    <main class="py-4">
        <div class="container">
            <div class="row">
                <!-- cicle for to repeat the data -->
                <?php 
                    for($i = 0; $i < count($movieList); $i++) {
                        echo $movieList[$i]->stamp();
                    }
                ?>
            </div>
        </div>
    </main>    
</body>
</html>
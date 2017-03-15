<!DOCTYPE html>
<html>
    <!-- CSCB20 Assignment 2: Fresh Tomatoes Web page
    Made by: Alexander Berdichevskiy (1002665760)-->
    <head>
        <?php $movie = $_REQUEST["film"];
        $movie_title = "{$movie[0]} - Rancid Tomatoes";
        ?>
        <title><?= $movie_title ?></title>
    </head>
    <body>
        TEST
        <?php echo $movie;?>
    </body>
</html>

<?

$info_file = file("$movie/info.txt");
$picture_path = "$movie/overview.png";
$overview_file = file("$movie/overview.txt");
$reviews = glob("$movie/review*.txt");

$page_title = "{$movie[0]} - Rancid Tomatoes";
if ((int) $movie[3] < 60) {
    $rating_pic = "rottenbig.png";
}
else {
    $rating_pic = "freshbig.png";
}

$movie_title = "{$movie[0]}({$movie[1]})";

?>
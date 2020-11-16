<html>
 <head>
  <title>Greetings Earthling</title>
 </head>
 <body>
<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


echo '<h3>' . $_POST['name'] . '<br>movie rating:' . $_POST['greeting'] . '/5</h3>'. $_POST['comment'];
$name = $_POST['name'];
$date = $_POST['date'];
$comment = $_POST['comment'];
$greeting = $_POST['greeting'];

 $query = <<<ENDSQL
        INSERT INTO reviews
        (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
        VALUES
        (review_movie_id,"$date","$name","$comment","$greeting")
ENDSQL;
        mysqli_query($db,$query) or die(mysqli_error($db));
        echo "<br>";
        echo 'Se ha creado el comentario';
?>
 </body>
</html>
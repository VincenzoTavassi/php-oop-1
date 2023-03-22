<?php
require_once __DIR__ . "./data/db.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP OOP 1</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center my-4">Lista di film</h1>
        <div class="row justify-content-center align-items-center g-5">
            <?php foreach ($movies as $movie) : ?>
                <?php include __DIR__ . "./template/MoviesTemplate.php" ?>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>
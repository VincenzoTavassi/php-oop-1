<?php

include_once __DIR__ . "/../models/Movie.php";
include_once __DIR__ . "/../models/Genere.php";

$azione = new Genere(1, "Azione");
$avventura = new Genere(2, "Avventura");
$fantasy = new Genere(3, "Fantasy");
$thriller = new Genere(4, "Thriller");

$movies = [
    new Movie(1, "Lord of the Rings", "Lorem ipsum dolor sit amet consectetur adipisicing elit.", [$fantasy, $avventura, $azione], "https://static.posters.cz/image/750webp/104633.webp"),
    new Movie(2, "Harry Potter", "Lorem ipsum dolor sit amet consectetur adipisicing elit.", [$fantasy, $avventura], "https://static.posters.cz/image/1300/art-photo/harry-potter-la-pietra-filosofale-i105089.jpg"),
    new Movie(3, "Collateral Damage", "Lorem ipsum dolor sit amet consectetur adipisicing elit.", [$azione, $thriller], "https://static.posters.cz/image/750webp/142196.webp")
];

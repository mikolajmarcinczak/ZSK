<?php
    $text = <<< TEKST
        zsk - Zespół
        Szkół
        Komunikacji
    TEKST;

    echo "Przed wywołaniem funkcji nl2br: <br> $text";
    echo "<br>Po wywołaniem funkcji nl2br: <br>";
    echo nl2br($text),'<br>';

    $test = 'jANuSz';

    echo strtolower($test), '<br>';
    echo strtoupper($test), '<br>';

    $test = 'janUsz Tomasz agata';

    echo ucfirst($test), '<br>';

    echo ucwords($test), '<br>';

    ##############################################################

    $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente provident similique maiores earum deleniti deserunt? Vel, reiciendis inventore facere, rerum ex adipisci excepturi amet deleniti recusandae obcaecati ipsa corporis ipsam fuga! Quibusdam molestias, aut nihil natus architecto incidunt voluptates veniam.';

    echo ucwords($lorem), '<br>';
?>
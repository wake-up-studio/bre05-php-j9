<?php

    require "Character.php";

    $character = new Character(42);
    
    echo $character-> getFullName();

    $character -> setFirstName("Sarah");
    $character -> setLastName("Connor");
    
    echo $character-> getFullName();
?>
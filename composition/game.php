<?php

    require "Character.php";
    
    $character = new Character("Ragnar");
    $character -> getWeapon() -> setName("Sword");
    $character -> getWeapon() -> setDamages(10);
    
    echo $character->getName();
    echo $character -> getWeapon() -> getName();
    echo $character -> getWeapon() -> getDamages();

?>
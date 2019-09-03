<?php

require_once('Character.class.php');
require_once('DBManager.class.php');

try {
    $character = Character::randomCharacter();

    $returnArray = array(
        "success" => true,
        "error" => false,
        "character" => json_encode($character)
    );
} catch (Exception $e) {
    $returnArray array(
        "success" => false,
        "error" => "There was an error creating your character, please try again later.",
        "character" => false
    );
}

echo json_encode($returnArray);
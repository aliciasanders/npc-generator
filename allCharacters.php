<?php

require_once('Character.class.php');
require_once('DBManager.class.php');

try {
    $characters = Character::getAllCharacters();

    $returnArray = array(
        "success" => true,
        "error" => false,
        "characters" => json_encode($characters)
    );
} catch (Exception $e) {
    $returnArray array(
        "success" => false,
        "error" => "There was an error loading your characters, please try again later.",
        "character" => false
    );
}

echo json_encode($returnArray);
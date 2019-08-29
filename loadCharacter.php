<?php

require_once('Character.class.php');
require_once('DBManager.class.php');

try {
    $character = Character::loadCharacter($_POST['characterID']);

    $returnArray = array(
        "success" => true,
        "error" => false,
        "character" => json_encode($character)
    );
} catch (Exception $e) {
    $returnArray array(
        "success" => false,
        "error" => "There was an error loading your character, please try again later.",
        "character" => false
    );
}

echo json_encode($returnArray);
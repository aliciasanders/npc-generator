<?php

require_once('Character.class.php');
require_once('DBManager.class.php');

try {
    $character = Character::loadCharacter($_POST['characterID']);
    $character->delete();

    $returnArray = array(
        "success" => true,
        "error" => false
    );
} catch (InvalidArgumentException $e) {
    $returnArray = array(
        "success" => false,
        "error" => $e->getMessage()
    );
} catch (Exception $e) {
    $returnArray = array(
        "success" => false,
        "error" => "There was an error saving your character, please try again later."
    );
}

echo json_encode($returnArray);
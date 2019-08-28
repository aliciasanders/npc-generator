<?php

require_once(Character.class.php);
require_once(DBManager.class.php);

try {
    $character = Character::loadJSON($_POST['characterData']);
    $character->save();

    $returnArray = array(
        "success" => true,
        "error" => false,
        "character" => json_encode($character)
    );
} catch (InvalidArgumentException $e) {
    $returnArray array(
        "success" => false,
        "error" => $e->getMessage(),
        "character" => false
    );
} catch (Exception $e) {
    $returnArray array(
        "success" => false,
        "error" => "There was an error saving your character, please try again later.",
        "character" => false
    );
}

echo json_encode($returnArray);
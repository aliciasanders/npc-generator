<?php

require_once('Character.class.php');
require_once('DBManager.class.php');

try {
    echo json_encode( Character::randomCharacter() );
} catch (Exception $e) {
    echo "\0";
}
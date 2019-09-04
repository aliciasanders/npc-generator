<?php
require_once('Character.class.php');
require_once('DBManager.class.php');
require_once('CharacterGenerator.class.php');

$characterGenerator = new CharacterGenerator();
?>

<html> 
<head> 
    <title>NPC Generator</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="/style.css"></link>
</head> 
<body> 

    <div class="content-wrapper">

        <!-- Contains character selector, generate new character button, save button, and delete button -->
        <div class="generator-header">
            <?php $characterGenerator->characterSelector(); ?>
            <?php $characterGenerator->newCharacterButton(); ?>
            <?php $characterGenerator->saveCharacterButton(); ?>
            <?php $characterGenerator->deleteCharacterButton(); ?>
        </div> <!-- end header -->

        <!-- Contains all character atributes -->
        <div class="character-info-container">

            <!-- Contains name, race, age, and gender information -->
            <div class="basic-info">
                <?php $characterGenerator->characterNameField(); ?>
                <?php $characterGenerator->characterRaceField(); ?>
                <?php $characterGenerator->characterAgeField(); ?>
                <?php $characterGenerator->characterGenderField(); ?>
            </div> <!-- end basic info -->

            <!-- Contains physical and personality traits -->
            <div class="traits">
                <?php $characterGenerator->characterPhysicalTraitsField(); ?>
                <?php $characterGenerator->characterPersonalityTraitsField(); ?>
            </div> <!-- end traits -->

            <!-- Contains personal goals -->
            <div class="goals">
                <?php $characterGenerator->characterGoalsField(); ?>
            </div> <!-- end goals -->

        </div> <!-- end info container -->
        
    </div> <!-- end wrapper -->

</body> 
</html>
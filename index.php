<?php
require_once(Character.class.php);
require_once(DBManager.class.php);
require_once(CharacterGenerator.class.php);

$characterGenerator = new CharacterGenerator();
?>

<html> 
<head> 
    <title>NPC Generator</title>
</head> 
<body> 

    <div class="content-wrapper">

        <!-- Contains character selector, generate new character button, and save button -->
        <div class="generator-header">
            <?php $characterGenerator->characterSelector(); ?>
            <?php $characterGenerator->newCharacterButton(); ?>
            <?php $characterGenerator->saveCharacterButton(); ?>
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
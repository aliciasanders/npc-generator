<?php

require_once('Character.class.php');
require_once('DBManager.class.php');

class CharacterGenerator {

    private $dbManager;

    /** 
     * Constructor establishes connection to database
     */
    function __construct() {
        $this->dbManager = new DBManager();
    }

    /**
     * HTML Generator functions
     * 
     * The following functions all generate html for the character fields, used in index.php
     */


    public function characterSelector() {
        $characters = Character::getAllCharacters(); ?>

        <select>
        <?php foreach ($characters as $id => $character) : ?>
            <option value="<?php echo $id; ?>"><?php echo $character; ?></option>
        <?php endforeach; ?>
        </select>
        <button class="loadCharacter">Load</button>

    <?php }

    public function newCharacterButton() { ?>
        <button class="newCharacter">New</button>
    <?php }

    public function saveCharacterButton() { ?>
        <button class="newCharacter">New</button>
    <?php }

    public function characterNameField() { ?>
        <label for="name">Name</label>
        <input type="text" name="name" id="nameField">
    <?php }

    public function characterRaceField() { ?>
        <label for="race">Race</label>
        <select name="race" id="raceField">
        <?php $raceOptions = $this->dbManager->getOptions('race'); ?>
        <?php foreach ($raceOptions as $id => $race) : ?>
            <option value="<?php echo $id; ?>"><?php echo $race; ?></option>
        <?php endforeach; ?>
        </select>
    <?php }

    public function characterAgeField() { ?>
        <label for="age">age</label>
        <input type="number" name="age" id="ageField">
    <?php }

    public function characterGenderField() { ?>
        <label for="gender">Gender</label>
        <select name="gender" id="genderField">
        <?php $genderOptions = $this->dbManager->getOptions('gender'); ?>
        <?php foreach ($genderOptions as $id => $gender) : ?>
            <option value="<?php echo $id; ?>"><?php echo $gender; ?></option>
        <?php endforeach; ?>
        </select>
    <?php }

    public function characterPhysicalTraitsField() { ?>
        <label for="physicalTraits">Physical Traits</label>
        <textarea rows="6" cols="50" name="physicalTraits" id="physicalTraitsField"></textarea>
    <?php }

    public function characterPersonalityTraitsField() { ?>
        <label for="PersonalityTraits">Personality Traits</label>
        <textarea rows="6" cols="50" name="PersonalityTraits" id="personalityTraitsField"></textarea>
    <?php }

    public function characterGoalsField() { ?>
        <label for="goals">Goals</label>
        <textarea rows="6" cols="100" name="goals" id="goalsField"></textarea>
    <?php }

}
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
        <select name="characterSelect" id="characterSelectField">
        <option value="0">New Character</option>
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
        <button class="saveCharacter">Save</button>
    <?php }

    public function deleteCharacterButton() { ?>
        <button class="deleteCharacter">Delete</button>
    <?php }

    public function characterNameField() { ?>
        <label for="name">Name</label>
        <input type="text" name="name" id="nameField">
    <?php }

    public function characterRaceField() { ?>
        <label for="race">Race</label>
        <select name="race" id="raceField">
        <option value="0">Select Race</option>
        <?php $raceOptions = $this->dbManager->getOptions('race'); ?>
        <?php foreach ($raceOptions as $id => $race) : ?>
            <option value="<?php echo $race; ?>"><?php echo $race; ?></option>
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
        <option value="0">Select Gender</option>
        <?php $genderOptions = $this->dbManager->getOptions('gender'); ?>
        <?php foreach ($genderOptions as $id => $gender) : ?>
            <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
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
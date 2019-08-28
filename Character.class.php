<?php

class Character {

    private $id;

    /* Caracter attributes */
    private $name;
    private $race;
    private $gender;
    private $age;
    private $physical_traits;
    private $personality_traits;
    private $goals;

    /* database manager object, allows for access to available character options stored in the database for validation */
    private $dbManager;

    /** 
     * Character constructor
     * Accepts array of character data
     */
    function __construct( $characterData ) {
        $this->id = isset($characterData['id']) ? $characterData['id'] : uniqid();

        $this->setName( isset($characterData['name']) ? $characterData['name'] : null );
        $this->setRace( isset($characterData['race']) ? $characterData['race'] : null );
        $this->setGender( isset($characterData['gender']) ? $characterData['gender'] : null );
        $this->setAge( isset($characterData['age']) ? $characterData['age'] : null );
        $this->setPhysical_traits( isset($characterData['physical_traits']) ? $characterData['physical_traits'] : null );
        $this->setPersonality_traits( isset($characterData['personality_traits']) ? $characterData['personality_traits'] : null );
        $this->setGoals( isset($characterData['goals']) ? $characterData['goals'] : null );

        $this->dbManager = new DBManager();
    }
    
    /**
     * Getter functions
     * Character attributes will be encoded to json and returned to the front end for display
     */
    public function getID() {
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getRace(){
        return $this->race;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getAge(){
        return $this->age;
    }
    public function getPhysicalTraits(){
        return $this->physical_traits;
    }
    public function getPersonalityTtraits(){
        return $this->personality_traits;
    }
    public function getGoals(){
        return $this->goals;
    }

    /**
     * Setter Functions
     * These are primarily used internally for constructor validation
     */
    public function setName( $name ){
        $this->name = $name;
    }
    public function setRace( $race ){
        $raceOptions = $dbManager->getOptions('race');
        if ( in_array( $race, $raceOptions ) ) {
            $this->race = $race;
        } else {
            throw new InvalidArgumentException('race should be selected from the avalable options');
        }
    }
    public function setGender( $gender ){
        $genderOptions = $dbManager->getOptions('gender');
        if ( in_array( $gender, $genderOptions ) ) {
            $this->gender = $gender;
        } else {
            throw new InvalidArgumentException('gender should be selected from the avalable options');
        }
    }
    public function setAge( $age ){
        $this->age = (int) $age;
    }
    public function setPhysicalTraits( $physical_traits ){
        $this->physical_traits = $physical_traits;
    }
    public function setPersonalityTtraits( $personality_traits ){
        $this->personality_traits = $personality_traits;
    }
    public function setGoals( $goals ){
        $this->goals = $goals;
    }

    /**
     * This function save the character data to the session
     */
    public function save() {
        session_start();
        $characters = isset($_SESSION['characters'[ ? $_SESSION['characters'] : array();
        $characters[$this->id] = json_encode($this);
        $_SESSION['characters'] = $characters;
    }

    /** 
     * Returns a character object built from JSON data
     * JSON should be an array with keys corresponding to the Character attributes
     */
    public static function loadJSON( $jsonString ) {
        $characterData = json_decode( $jsonString );
        return new Character($characterData);
    }

    /**
     * Returns a character object loaded from session data
     * uses passed id to find character
     */
    public static function loadCharacter( $id ) {
        session_start();
        if ( isset( $_SESSION['characters'] ) && isset($_SESSION['characters'][$id]) ) {
            return Character::loadJSON($_SESSION['characters'][$id]);
        }
        else { 
            return null;
        }
    }

    /**
     * Returns an array of all character ids and names
     */
    public static function getAllCharacters() {
        session_start();
        $characters = array();
        if ( isset( $_SESSION['characters'] ) ) {
            foreach( $_SESSION['characters'] as $characterID => $characterData ) {
                $characters['$characterID'] = json_decode($characterData)['name'];
            }
        }
        return $characters;
    }

    /**
     * Returns a randomly generated character with options from database
     */
    public static function randomCharacter() {
        $dbManager = new DBManager()
        $attributes = array();
        $attributes['name'] = $dbManager->randomOption('name');
        $attributes['race'] = $dbManager->randomOption('race');
        $attributes['gender'] = $dbManager->randomOption('gender');
        $attributes['age'] = $dbManager->randomOption('age');
        $attributes['physical_traits'] = $dbManager->randomOption('physical_traits');
        $attributes['personality_traits'] = $dbManager->randomOption('personality_traits');
        $attributes['goals'] = $dbManager->randomOption('goals');
        return new Character($attributes);
    }

}

?>
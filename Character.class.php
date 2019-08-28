<?php

class Character {

    /* Caracter attributes */
    private $name;
    private $race;
    private $gender;
    private $age;
    private $physical_traits;
    private $personality_traits;
    private $goals;

    /** 
     * Character constructor
     * Accepts array of character data
     */
    function __construct( $characterData ) {
        $this->setName( isset($characterData['name']) ? $characterData['name'] : null );
        $this->setRace( isset($characterData['race']) ? $characterData['race'] : null );
        $this->setGender( isset($characterData['gender']) ? $characterData['gender'] : null );
        $this->setAge( isset($characterData['age']) ? $characterData['age'] : null );
        $this->setPhysical_traits( isset($characterData['physical_traits']) ? $characterData['physical_traits'] : null );
        $this->setPersonality_traits( isset($characterData['personality_traits']) ? $characterData['personality_traits'] : null );
        $this->setGoals( isset($characterData['goals']) ? $characterData['goals'] : null );
    }
    
    /**
     * Getter functions
     * Character attributes will be encoded to json and returned to the front end for display
     */
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
        $this->race = $race;
    }
    public function setGender( $gender ){
        $this->gender = $gender;
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
     * Returns a character object built from JSON data
     * JSON should be an array with keys corresponding to the Character attributes
     */
    public static function loadJSON( $jsonString ) {
        $characterData = json_decode( $jsonString );
        return new Character($characterData);
    }

}

?>
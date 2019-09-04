$(document).ready(function() {

    /**
     * Initial Setup
     */
     
    // if there is at least one existing character option (other than 'new character') load the first character option
    if ($('#characterSelectField option').length > 2) {
        var character = $('#characterSelectField option:nth-child(2)').val();
        $('#characterSelectField').val(character);
        loadCharacter();
    } 
    // Otherwise create a new generated character
    else {
        newCharacter();
    }

    // Attach function triggers
    $('.loadCharacter').click( loadCharacter );
    $('.newCharacter').click( newCharacter );
    $('.saveCharacter').click( saveCharacter );
    $('.deleteCharacter').click( deleteCharacter );

});

/**
 * Load a saved character
 */
function loadCharacter() {

    var ID = $('#characterSelectField').val();
    if ( ID !== '0' ) {  // if there is a character currently selected

        // Load the selected character and display the character's data
        $.post( '/loadCharacter.php',
        {characterID: ID},
        function( dataString ) {
            var data = JSON.parse(dataString);
            if (data.success) {
                var characterData = JSON.parse(data.character);
                displayCharacterData( characterData );
            } else {
            }
        });

    }


}

/**
 * Load a new character and display in form options
 */
function newCharacter() {
    $.post( '/newCharacter.php',
    {},
    function( dataString ) {
        data = JSON.parse(dataString);
        if (data.success) {
            $('#characterSelectField').val(0);
            displayCharacterData( JSON.parse( data.character ) );
        } else {

        }
    });
}

/**
 * Save the current character
 */
function saveCharacter () {

    characterDataObject = {};

    // Name
    characterDataObject.name = $('#nameField').val();
    // Race
    characterDataObject.race = $('#raceField').val();
    // Age
    characterDataObject.age = $('#ageField').val();
    // Gender
    characterDataObject.gender = $('#genderField').val();
    // Physical Traits
    characterDataObject.physical_traits = $('#physicalTraitsField').val();
    // Personality Traits
    characterDataObject.personality_traits = $('#personalityTraitsField').val();
    // Goals
    characterDataObject.goals = $('#goalsField').val();

    $.post( '/saveCharacter.php',
    {characterData: JSON.stringify(characterDataObject)},
    function( dataString ) {
        data = JSON.parse(dataString);
        if (data.success) {
            var characterData = JSON.parse(data.character);
            $('#characterSelectField').append('<option value="'+characterData.id+'">'+characterData.name+'</option>');
            $('#characterSelectField').val(characterData.id);
            displayCharacterData( characterData );
        } else {
        }
    });

}

function deleteCharacter () {

    var ID = $('#characterSelectField').val();
    if ( ID !== '0' ) {  // if there is a character currently selected

        // Delete the selected character and either load the default or generate a new one.
        $.post( '/deleteCharacter.php',
        {characterID: ID},
        function( dataString ) {
            var data = JSON.parse(dataString);
            if (data.success) {
                $('#characterSelectField option[value="'+ID+'"]').remove(); // Remove the character from the select list
                if ($('#characterSelectField option').length > 1) { // If there is another character, select it and load it
                    var nextChar = $('#characterSelectField option:nth-child(2)').val();
                    $('#characterSelectField').val(nextChar);
                    loadCharacter();
                } else { // Otherwise generate a new character
                    newCharacter();
                }
            } else {
            }
        });

    }


}

/**
 * Display a character in form options
 */
function displayCharacterData( characterData ) {

    // Name
    $('#nameField').val(characterData.name);
    // Race
    $('#raceField').val(characterData.race);
    // Age
    $('#ageField').val(characterData.age);
    // Gender
    $('#genderField').val(characterData.gender);
    // Physical Traits
    $('#physicalTraitsField').val(characterData.physical_traits);
    // Personality Traits
    $('#personalityTraitsField').val(characterData.personality_traits);
    // Goals
    $('#goalsField').val(characterData.goals);

}

<?php

class DBManager {

    /* Use database connection infornation from config.php file included in index.php */
    private $hostname = DB_HOSTNAME;
    private $user = DB_USER;
    private $pass = DB_PASS;
    
    /* mysqli connection object */
    private $conn;

    public function __construct() {
        $conn = new mysqli( $this->hostname, $this->user, $this->pass, 'character_options' );
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $this->conn = $conn;
        }
    }
    
    public function __destruct() {
        $this->conn->close();
    }

    /**
     * This function gets the available options for different character attributes, where options are available
     */
    public function getOptions( $attribute ) {
        $options = array();
        $sql = "SELECT 'id', 'option' FROM {$attribute}Options;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while( $row = $result->fetch_assoc() ) {
                $options[$row["id"]] = $row["option"] );
            }
        }
        return $options;
    }

    /**
     * This function gets a random option from the table of attribute options
     */
    public function randomOption( $attribute ) {
        $sql = "SELECT 'option' FROM {$attribute}Options ORDER BY RAND() LIMIT 1;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while( $row = $result->fetch_assoc() ) {
                $option = $row["option"] );
            }
        }
        return $option;
    }

}
<?php
/*
 * Mysql database class - only one connection alowed
*/
class DBConnection {

    private $_connection;
    private static $_instance; // The single instance
    private $_host = "localhost";
    private $_port = 3306; // Define port separately
    private $_username = "root";
    private $_password = '1234';
    private $_database = "velvet_db";

    // Get an instance of the Database
    public static function getInstance() {
        if (!self::$_instance) { // If no instance, create one
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database, $this->_port);

        // Error handling
        if ($this->_connection->connect_error) {
            trigger_error("Failed to connect to MySQL: " . $this->_connection->connect_error, E_USER_ERROR);
        }
    }

    // Prevent duplication of connection
    private function __clone() { }

    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
}
?>
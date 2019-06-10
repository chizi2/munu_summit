<?php

// MySQLi database; only one connection is allowed.
class database {
    private $_connection;

// Store the single instance.
    private static $_instance;
    private static  $_last_query;

// Get an instance of the Database.
// @return database
    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

// Constructor
    public function __construct() {

        $this->_connection = new mysqli("127.0.0.1", "root", "", 'summit');
        // Error handling.
        if (mysqli_connect_error()) {
            trigger_error('Failed to connect to the database: ' . mysqli_connect_error(), E_USER_ERROR);
        }
    }

// Empty clone magic method to prevent duplication.
    private function __clone() {

    }

// Get the mysqli connection.
    public function getConnection() {
        return $this->_connection;
    }

// Query Database using current instance
    public static function performQuery($sql) {
        $db = database::getInstance();
        $mysqli = $db->getConnection();
        self::$_last_query = $sql;
        $result = $mysqli->query($sql);
        self::confirm_query($result);
        return $result;
    }

// Prepare data to be inserted
    public static function prepData($data)
    {
        $db = self::getInstance();
        $mysqli = $db->getConnection();
        $data = $mysqli->real_escape_string($data);
        $data = addslashes($data);
        return $data;
    }

// Get confirmation that the query was processed
    public static function confirm_query($result) {
        if (!$result) {
            //	echo " Internal server problem.<br />";
            echo "<pre>".self::$_last_query."<pre><br />";
            //	echo $result->error();
        }
    }

    public static function getLastInsertID()
    {
        $db = database::getInstance();
        $mysqli = $db->getConnection();
        return $mysqli->insert_id;
    }

}

//Create new Database object and store it in $db
$database = database::getInstance();
$database = $database->getConnection();
$db =&$database;

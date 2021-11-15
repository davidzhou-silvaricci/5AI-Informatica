<?php


class Connection
{

    const DB = "demo";
    const DB_HOST = "127.0.0.1";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    private $db_connection;

    function __construct(){
        $this->db_connection = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB);
        
        if ($this->db_connection->connect_error) {
         die("Si è verificato un errore: " . $this->db_connection->connect_error);
        }
        return $this->db_connection;
    }

    function query($query){
        return $this->db_connection->query($query);
    }

    function close(){
        $this->db_connection->close();

    }

} 
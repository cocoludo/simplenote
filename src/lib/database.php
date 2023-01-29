<?php

class DatabaseConnection
{
    public ?PDO $database = null;


    public function getConnection(): PDO 
    {
        
        if ($this->database === null) {
            $this->database = new PDO('mysql:host=localhost;dbname=simplenote;charset=utf8', 'simplenote', 'jaimelagalette');
        }

        return $this->database;

    }   
}
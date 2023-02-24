<?php

class DatabaseConnection
{
    public ?PDO $database = null;

    public function getConnection(): PDO
    {
        if($this->database ===null) {
            $this ->database = new PDO('mysql:host=127.0.0.1;dbname=website_recipe;charset=utf8','root', '');
        }
        return $this->database;
    }
}
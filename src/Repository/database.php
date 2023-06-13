<?php

namespace App\Repository;

class Database {
    public static function getConnection() {
        return new \PDO("mysql:host=localhost;dbname=projeteugenie", "root", "1234");
    }
}
?>
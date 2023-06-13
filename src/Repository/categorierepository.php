<?php


namespace App\Repository;
use App\Entity\categorie;

class CategorieRepository
{

public function persist(categorie $categorie) {
    $connection = Database::getConnection();

    $query = $connection->prepare("INSERT INTO categorie (label) VALUES (:label)");
    $query->bindValue(':label', $categorie->getLabel());

    $query->execute();

    $categorie->setId($connection->lastInsertId());
}
public function findAll(): array
    {
        $list = [];
        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM categorie");

        $query->execute();

        foreach ($query->fetchAll() as $line) {
            $list[] = new categorie($line["label"],$line["id"]);
        }

        return $list;
    }
}
?>
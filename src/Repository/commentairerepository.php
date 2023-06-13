<?php


namespace App\Repository;
use App\Entity\commentaire;

class CategorieRepository
{

public function persist(commentaire $commentaire) {
    $connection = Database::getConnection();

    $query = $connection->prepare("INSERT INTO commentaire (surfacecom, id_article) VALUES (:surfacecom, :id_article)");
    $query->bindValue(':surfacecom', $commentaire->getCommentaire());
    $query->bindValue(':id_article', $commentaire->getId_article());

    $query->execute();

    $commentaire->setId($connection->lastInsertId());
}
public function findAll(): array
    {
        $list = [];
        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM commentaire");

        $query->execute();

        foreach ($query->fetchAll() as $line) {
            $list[] = new commentaire($line["id_article"], $line["surfacecom"], $line["id"]);
        }

        return $list;
    }
}
?>
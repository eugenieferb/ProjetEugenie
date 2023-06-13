<?php


namespace App\Repository;
use App\Entity\article;

class ArticleRepository
{
public function findAll($page = 1, $pageSize = 10): array
    {
        $list = [];
        $connection = Database::getConnection();
        $offset = ($page-1) * $pageSize ;
        $query = $connection->prepare("SELECT * FROM article LIMIT :pageSize OFFSET :page");
        $query->bindValue('pageSize', $pageSize, \PDO::PARAM_INT);
        $query->bindValue('page', $offset, \PDO::PARAM_INT);
        $query->execute();

        foreach ($query->fetchAll() as $line) {
            $list[] = new Article(
                $line["id"], 
                $line["title"], 
                $line["description"], 
                $line["user"],
                $line["img"],
                $line["id_categorie"]
            );
        }

        return $list;
    }
    public function persist(article $article) {
        $connection = Database::getConnection();

        $query = $connection->prepare("INSERT INTO article (user, title, description, img) VALUES (:user,:title,:description, :img)");
        $query->bindValue(':user', $article->getUser());
        $query->bindValue(':title', $article->getTitle());
        $query->bindValue(':description', $article->getDescription());
        $query->bindValue(':img', $article->getImg());

        $query->execute();

        $article->setId($connection->lastInsertId());
    }

    public function findById(int $id):?Article {
        $connection = Database::getConnection();
        $query = $connection->prepare("SELECT * FROM article WHERE id=:id ");
        $query->bindValue(":id", $id);
        $query->execute();

        foreach ($query->fetchAll() as $line) {
            return new Article(
                $line["id"], 
                $line["title"], 
                $line["description"], 
                $line["user"],
                $line["img"],
                $line["id_categorie"]
            );
        }
        return null;

    }

    public function delete(int $id):void {
        $connection = Database::getConnection();

        $query = $connection->prepare("DELETE FROM article WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
    }

    public function update(Article $article):void {
        
        $connection = Database::getConnection();

        $query = $connection->prepare("UPDATE article 
                SET title=:title, 
                description=:description, 
                user=:user, 
                img=:img, 
                categorie=:categorie
                WHERE id=:id");
        $query->bindValue(':title', $article->getTitle());
        $query->bindValue(':description', $article->getDescription());
        $query->bindValue(':user', $article->getUser());
        $query->bindValue(':img', $article->getImg());
        $query->bindValue(':categorie', $article->getId_categorie());
        $query->bindValue(':id', $article->getId());
        $query->execute();
    }
};
?>
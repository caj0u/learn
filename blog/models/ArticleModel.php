<?php
class ArticleModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllArticles() {
        $sql = "SELECT * FROM articles ORDER BY created_at DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id) {
        $sql = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

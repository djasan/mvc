<?php
// ArticleModel.php

class ArticleModel {
    private $db;

    // Connexion à la base de données dans le constructeur
    public function __construct() {
        // À remplacer par vos propres informations de connexion
        $dsn = 'mysql:host=127.0.0.1;dbname=blog;charset=utf8mb4';
        $username = 'votre_nom_utilisateur';
        $password = 'votre_mot_de_passe';

        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    // Récupérer tous les articles depuis la base de données
    public function getAllArticles() {
        try {
            $query = "SELECT * FROM post";
            $statement = $this->db->query($query);

            // Récupérer les résultats sous forme de tableau associatif
            $articles = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $articles;
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des articles : ' . $e->getMessage());
        }
    }
}

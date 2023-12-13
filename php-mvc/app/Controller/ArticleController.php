<?php
// ArticleController.php

require_once 'ArticleModel.php';

class ArticleController {
    public function listerArticles() {
        // Instancier le modèle
        $model = new ArticleModel();

        // Obtenir tous les articles
        $articles = $model->getAllArticles();

        // Charger la vue
        include 'articleListView.php';
    }
}

// Instancier le contrôleur et appeler la méthode pour lister les articles
$controller = new ArticleController();
$controller->listerArticles();

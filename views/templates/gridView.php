<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<h2>Edition des articles</h2>

<div class="sorting-options">
    <span>Trier par date : </span>
    <a href="index.php?action=showGridView&sort=date&order=asc">⬆️ Plus ancien</a> | 
    <a href="index.php?action=showGridView&sort=date&order=desc">⬇️ Plus récent</a>
</div>
<div class="adminArticle">
    <?php foreach ($articles as $article) { ?>
        <div class="articleLine">
            <div class="title"><?= $article->getTitle() ?></div>
            <div class="views"><?= $article->getViews() ?> vues</div>
            <div class="views"><?= $article->getCommentCount() ?> commentaires</div>
             <div class="views"><?= $article->getDateCreation()->format('d/m/Y') ?></div>
           
        </div>
    <?php } ?>
</div>

<a class="submit" href="index.php?action=admin">Admin</a></br>
<a class="submit" href="index.php?action=showGridView">Vue d'ensemble</a>
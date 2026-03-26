<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<h2>Edition des articles</h2>

<div class="sorting-options">
    <span>Trier par date : </span>
    <a href="index.php?action=showGridView&sort=date_creation&order=ASC">⬆️ Plus ancien</a> | 
    <a href="index.php?action=showGridView&sort=date_creation&order=DESC">⬇️ Plus récent</a>
</div>
<div class="adminList">
    <?php foreach ($articles as $article) { ?>
        <div class="adminArticle">
            <div class="articleLine">
                <div class="title"><?= $article->getTitle() ?></div>
                <div class="views"><?= $article->getViews() ?> <?= $article->getViews() > 1 ? ' vues' : ' vue'; ?></div>
                <div class="views"><?= $article->getCommentCount() ?><?= $article->getCommentCount() > 1 ? ' commentaires' : ' commentaire'; ?></div>
                <div class="views"><?= $article->getDateCreation()->format('d/m/Y') ?></div>
            
                </div>
            </div>
            <?php } ?>
</div>
    

<a class="submit" href="index.php?action=admin">Admin</a></br>
<a class="submit" href="index.php?action=showGridView">Vue d'ensemble</a>
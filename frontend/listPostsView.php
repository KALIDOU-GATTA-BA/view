
<?php $title = 'Jean Forteroche'; 
require_once('secureForm.php');?>
<?php ob_start(); ?>
<img src="view/frontend/public/alaska.jpg">
<h1>Jean Forteroche</h1>
<div class="title"><p>Billet simple pour l'Alaska</p></div>
<div class="container">
    <div class="col-md-12 col-xs-12 col-lg-12">
        <div class="row">
<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= secureForm($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(secureForm($data['chapter'])) .' [...]'?>
            <br />
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><button>Lire la suite</button></a>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?></div></div></div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
require('footer.php') ;?>

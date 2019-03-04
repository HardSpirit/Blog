<?php session_start();?>
<?php $titre = 'Moderation'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $titre ?></title>
        <link href="../public/css/style.css" rel="stylesheet" />
    </head>

    <body>
<a href="index.php?action=deconnect">Deconnexion</a>
<h1>Mon super blog !</h1>
<p>Modifier Un Post :</p>
<a href='index.php'>Retour Menu Administration </a>

    <div class="news">
        <form action="index.php?action=updatePost&amp;id=<?= $post->getId();?>" method="post" >
          Auteur : <?= $post->getAuthor(); ?>
        </br></br>
          Titre : <input type="text" name="title" value="<?= $post->getTitle(); ?>" />
        </br></br>
          Contenu :</br> <textarea name="content"> <?= $post->getContent(); ?> </textarea>
        </br>
          <input type="submit" value="Envoyer" name="Envoyer"/>
        </form>
    </div>

</body>
</html>

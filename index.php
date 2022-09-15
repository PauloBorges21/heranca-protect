<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <?php
require_once ('classes/post.class.php');
    ?>
</head>
<body>
<?php
$foto = new Foto(12);
$foto->setLikes(50);
$foto->setUrl("http://imagem.com.br");

echo "ID-Foto: ".$foto->getId()." - ".$foto->getLikes()." likes - URL: ".$foto->getUrl();
?>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>ConnectLife</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <?php foreach($stylesheets as $stylesheet):?>
            <link rel="stylesheet" href="Public/CSS/<?=$stylesheet?>.css">
        <?php endforeach; ?>
        <script src="https://kit.fontawesome.com/cfd8c0e27d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?= $content ?>
    </body>
</html>

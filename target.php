<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bonjour
    <?php
        // echo  htmlspecialchars($_POST['prenom']);
        echo  strip_tags($_POST['prenom']);
    ?>
    ,fais comme chez toi !</p>
    <p>
        <?php 
            // echo htmlspecialchars($_POST['prenom']);
            echo  strip_tags($_POST['prenom']);
        ?>
    ? J'ai du mal comprendre!
    </p>
    <p> clique <a href="index.php">ici</a>pour retaper ton prenom </p>
</body>
</html>
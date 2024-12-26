<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nom = $_POST['nom'];
    if (isset($_POST['choix'])) {
        echo "$nom a choisit:<br>";
        $choix = $_POST['choix'];
        for ($i = 0; $i < count($choix); $i++)
            echo $choix[$i]."<br>";
    } 
    else echo "$nom a choisit:Null";
    ?>
</body>

</html>
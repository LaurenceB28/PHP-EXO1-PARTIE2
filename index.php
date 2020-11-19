<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1phpP2</title>
</head>
<body>
    <p>
<?php

$age = 18;
 
if ($age >= 18) // SI l'âge est superieur ou égal à 18

{
    $majeur = true;
    echo "Vous êtes Majeur";
}

else if ($age <= 18) // SI l'âge est superieur ou égal à 18
{
    echo "Vous êtes Mineur";
    $majeur = false;
}
// else // SINON
// {
//     echo "Indiquez votre age";
// }

?>
</p>
</body>
</html>
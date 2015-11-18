<?php
function _getKfactors($scoreA,$scoreB)
{
    switch(TRUE)
    {
    case ($scoreA < 2100):
        $KfactorA = 32;
        break;
    case ($scoreA < 2400):
        $KfactorA = 24;
        break;
    default:
        $KfactorA = 16;
    }

    switch(TRUE)
    {
    case ($scoreB < 2100):
        $KfactorB = 32;
        break;
    case ($scoreB < 2400):
        $KfactorB = 24;
        break;
    default:
        $KfactorB = 16;
    }

    return array (
        'a' => $KfactorA,
        'b' => $KfactorB
    );
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>

<form action="kfactor.php" method="post">
Score 'A': <input type="number" name="scoreA"><br>
Score 'B': <input type="number" name="scoreB"><br>
<input type="submit">
</form>

<?php
    /*$scoreA = 2000;
    $scoreB = 2200;*/

    $Kfactors = _getKfactors($_POST["scoreA"], $_POST["scoreB"]);

    echo $Kfactors['a'];
    echo $Kfactors['b'];
?>
    </body>
</html>

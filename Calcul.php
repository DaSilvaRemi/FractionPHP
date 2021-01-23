<?php
require "Fraction.php";


$num1 = $_POST['num1'];
$denom1 = $_POST['denom1'];

$num2 = $_POST['num2'];
$denom2 = $_POST['denom2'];




$Frac1 = new Fraction($num1, $denom1);
$Frac2 = new Fraction($num2, $denom2);

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css" media="screen" type="text/css" />
    <title>Résultat Fraction</title>
</head>

<body>
    <div id="container">
        <h1>Les Fractions :</h1><br />
        <table>
            <tr>
                <th class="rien"></th>
                <th>Fraction N1</thd>
                <th>Fraction N2</th>
            </tr>
            <tr>
                <td>Fractions non simplifiée</td>
                <td><?php echo ($Frac1->Affichage()); ?></td>
                <td><?php echo ($Frac2->Affichage()); ?></td>
            </tr>

            <?php
            $Frac1->SimplifierFraction();
            $Frac2->SimplifierFraction();
            ?>

            <tr>
                <td>Fractions simplifiée</td>
                <td><?php echo ($Frac1->Affichage()); ?></td>
                <td><?php echo ($Frac2->Affichage()); ?></td>
            </tr>
        </table>

        <table>
            <?php if ($_POST['addmult'] == 'add') {
                $Frac3 = $Frac1->Addition($Frac2);
            ?>

                <tr>
                    <th class="rien"></th>
                    <th>Résultat addition</th>
                </tr>
                <tr>
                    <td>Fraction non simplifiée</td>
                    <td><?php echo ($Frac3->Affichage()); ?></td>
                </tr>

                <?php
                $Frac3->SimplifierFraction();
                ?>

                <tr>
                    <td>Fraction simplifiée</td>
                    <td><?php echo ($Frac3->Affichage()); ?></td>
                </tr>
            <?php } else {
                $Frac4 = $Frac1->Multiplication($Frac2);
            ?>

                <tr>
                    <th class="rien"></th>
                    <th>Résultat Multiplication</th>
                </tr>
                <tr>
                    <td>Fraction non simplifiée</td>
                    <td><?php echo ($Frac4->Affichage()); ?></td>
                </tr>

                <?php
                $Frac4->SimplifierFraction();
                ?>

                <tr>
                    <td>Fraction simplifiée</td>
                    <td><?php echo ($Frac4->Affichage()); ?></td>
                </tr>

            <?php } ?>
            <tr>
                <td><?php echo ("Frac 1 et Frac 2 sont elles égales ? "); ?></td>
                <td><?php echo($Frac1->compare($Frac2));?></td>
            </tr>
        </table>
    </div>
</body>

</html>
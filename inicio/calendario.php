<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><?php echo " titulo dentro do h1 com php" ?></h1>

    <?php
    function linha($semana)
    {
        echo "
            <tr>
                <th>{$semana[0]}</th>
                <th>{$semana[1]}</th>
                <th>{$semana[2]}</th>
                <th>{$semana[3]}</th>
                <th>{$semana[4]}</th>
                <th>{$semana[5]}</th>
                <th>{$semana[6]}</th>
            </tr>
            ";
    }
    function calendario()
    {
        $dia = 1;
        $semana = array();
        while ($dia <= 31) {
            array_push($semana, $dia);
            if (count($semana) == 7) {
                linha($semana);
                $semana = array();
            }
            $dia++;
        }
    }


    ?>

    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
        </tr>


        <?php linha(); ?>
        <?php linha(); ?>
        <?php linha(); ?>
        <?php linha(); ?>
        <?php linha(); ?>
    </table>
</body>

</html>
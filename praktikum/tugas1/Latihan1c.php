<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>

    <style>
        .bulat {
            width: 40px;
            height: 40px;
            background-color: #baf797;
            border-radius: 50%;
            line-height: 40px;
            text-align: center;
            display: inline-block;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="bulat"><?= $i ?></div>
        <?php endfor; ?>
        <?= "<br>" ?>
    <?php endfor; ?>

</body>

</html>
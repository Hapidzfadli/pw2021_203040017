<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>

    <style>
        .tabel-content {
            border: 1px solid black;
            padding: 10px;
            width: 300px;
        }

        td {
            width: 30px;
            height: 30px;

        }

        .warna1 {
            background-color: lightblue;
        }

        .warna2 {
            background-color: salmon;
        }
    </style>
</head>

<body>
    <div class="tabel-content">
        <table border="1" cellspacing="0" cellpadding="10">

            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <tr>
                    <?php for ($j = 1; $j <= 6; $j++) : ?>
                        <?php if ($i % 2 == 0) : ?>
                            <?php if ($j % 2 == 1) : ?>
                                <td class="warna2"></td>
                            <?php else : ?>
                                <td class="warna1"></td>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if ($j % 2 == 1) : ?>
                                <td class="warna1"></td>
                            <?php else : ?>
                                <td class="warna2"></td>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

        </table>
    </div>
</body>

</html>
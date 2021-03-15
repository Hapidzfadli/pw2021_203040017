<?php

$jawabanIsset = "Fungsi isset () memeriksa apakah sebuah variabel disetel, yang berarti ia harus dideklarasikan dan tidak NULL. Fungsi ini mengembalikan nilai true jika variabel ada dan tidak NULL, jika tidak maka mengembalikan false.<br>";

$jawabanEmpty = "Fungsi empty () memeriksa apakah suatu variabel kosong atau tidak. Fungsi ini mengembalikan nilai false jika variabel ada dan tidak kosong, jika tidak maka mengembalikan nilai true.";

function exam()
{
    //example
    $a = 0;

    // True because $a is empty
    if (empty($a)) {
        echo "Variable 'a' is empty.<br>";
    }

    // True because $a is set
    if (isset($a)) {
        echo "Variable 'a' is set";
    }
}

function soal($style, $jawaban)
{
    return "<div class='$style'>$jawaban</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>

    <style>
        .style {
            font-size: 18px;
            font-family: Arial, sans-serif;
            color: #8c782d;
        }
    </style>
</head>

<body>
    <?= soal("style", "Isset() adalah = $jawabanIsset"); ?>
    <br>
    <?= soal("style", "Empty() adalah = $jawabanEmpty"); ?>
    <br>

    <p>Contoh: </p>
    <pre><code>
    //example
    $a = 0;

    // True because $a is empty
    if (empty($a)) {
        echo "Variable 'a' is empty.<br>";
    }

    // True because $a is set
    if (isset($a)) {
        echo "Variable 'a' is set";
    }
    </code></pre>

    <?= exam(); ?>
</body>

</html>
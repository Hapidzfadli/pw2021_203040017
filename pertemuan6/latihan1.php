<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
        width: 50px;
        height: 50px;
        background-color: greenyellow;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        transition: 0.5s;

        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>


<?php 
$angka = [[1,2,3],[4,5,6],[7,8, 9]];
?>


<!-- <?php foreach($angka as $a) :?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?> -->

<?php foreach ( $angka as $a ) : ?>
    <div class="kotak"><?= $a[0]; ?></div>
    <!-- <div class="kotak"><?= $a[1]; ?></div> -->
    <div class="kotak"><?= $a[2]; ?></div>
<?php endforeach; ?>

<div class="clear"></div>
<?php foreach($angka as $a) :?>
    <?php foreach($a as $b) :?>
    <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>
<div class="clear"></div>

<div class="kotak"><?= $angka[2][0] ?></div>


</body>
</html>
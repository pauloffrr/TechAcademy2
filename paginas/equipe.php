<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$url = "https://onsetgamess.000webhostapp.com/api/equipeapi.php";
$dados = file_get_contents($url);

$dados = json_decode($dados);
?>

<div class="grid-container">
    <div class="card">
        <?php
        foreach ($dados as $equipee) {
        ?>
            <div class="grid-container">
                <div class="card d-block d-lg-none d-xl-none">
                    <img src="<?= $equipee->foto ?>" alt="" <?= $equipee->nome ?> class="100">
                    <p>
                        <strong><?php echo $equipee->nome; ?></strong>
                    </p>
                    <p>
                        <strong><?php echo $equipee->cargo; ?></strong>
                    </p>
                    <p>
                        <strong><?php echo $equipee->descricao; ?></strong>
                    </p>
                </div>
            </div>
    </div>
</div>
<?php
        }
?>

<section class="grid-container_desk">
    <?php
    foreach ($dados as $equipee) {
    ?>
        <div class="card d-none d-lg-block">
            <img src="<?= $equipee->foto ?>" alt="" <?= $equipee->nome ?> class="100">
            <p>
                <strong><?php echo $equipee->nome; ?></strong>
            </p>
            <p>
                <strong><?php echo $equipee->cargo; ?></strong>
            </p>
            <p>
                <strong><?php echo $equipee->descricao; ?></strong>
            </p>
        </div>
    <?php
    }
    ?>
</section>
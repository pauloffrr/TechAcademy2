<div class="grid-container">
    <div class="card">
        <?php
            $url = "http://localhost/onseet/api/equipeapi.php";
         $dados = file_get_contents($url);

        $dados = json_decode($dados);

        foreach ($dados as $equipee) {
        ?>
            <div class="grid-container">
                <div class="card">
                     <img src="<?= $equipee->foto ?>" alt=""<?= $equipee->nome ?> class="100">
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
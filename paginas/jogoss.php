<div class="grid-container">
    <div class="card">
        <?php
            $url = "http://localhost/onseet/api/jogo.php";
         $dados = file_get_contents($url);

        $dados = json_decode($dados);

        foreach ($dados as $gaames) {
        ?>
            <div class="grid-container">
                <div class="card">
                     <img src="<?= $gaames->imagem ?>" alt=""<?= $gaames->nome ?> class="100">
                    <p>
                         <strong><?php echo $gaames->nome; ?></strong>
                    </p>
                    <p>
                         <strong><?php echo $gaames->descricao; ?></strong>
                    </p>
                     <p>
                        <strong><?php echo $gaames->instrucoes; ?></strong>
                    </p>
                </div>
            </div>         
    </div>
</div>
    <?php 
            }
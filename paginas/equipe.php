<div class="grid-container">
    <div class="card">
<<<<<<< HEAD
        <img src="membro1.jpg" alt="Foto do Membro 1">
        <h3>Fulano de Tal</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <div class="card">
        <img src="membro2.jpg" alt="Foto do Membro 2">
        <h3>Ciclano de Almeida</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <div class="card">
        <img src="membro2.jpg" alt="Foto do Membro 2">
        <h3>Ciclano de Almeida</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <div class="card">
        <img src="membro2.jpg" alt="Foto do Membro 2">
        <h3>Ciclano de Almeida</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <div class="card">
        <img src="membro2.jpg" alt="Foto do Membro 2">
        <h3>Ciclano de Almeida</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <div class="card">
        <img src="membro2.jpg" alt="Foto do Membro 2">
        <h3>Ciclano de Almeida</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <div class="card">
        <img src="membro2.jpg" alt="Foto do Membro 2">
        <h3>Ciclano de Almeida</h3>
        <p>Cargo</p>
        <p>Breve descrição do membro da equipe.</p>
    </div>
    <!-- Repetir para os demais membros -->
</div>
=======
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
>>>>>>> ae26f24 (segundocommit)

<main class="content">
    <?php
        renderTitle(
            'Registrar Ponto',
            'Mantenha seu ponto consistente!',
            'icofont-check-alt'
        );
        include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?> </h3>
            <p class="mb-0">Seus batimentos efetuados hoje:</p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">1º Entrada: <?= $workingHours->time1 ?? '---' ?></span>
                <span class="record">1º Saída: <?= $workingHours->time2 ?? '---' ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">2º Entrada: <?= $workingHours->time3 ?? '---' ?></span>
                <span class="record">2º Saída: <?= $workingHours->time4 ?? '---' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="innout.php" class="btn btn-warning btn-lg">
                <i class="icofont-check mr-1"></i>
                Bater Ponto
            </a>
        </div>
    </div>
    <!-- <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input type="text" name="forcedTime" class="form-control" placeholder="Informe a hora para simular o batimento.">
            
            <button class="btn btn-danger ml3">
                Simular Ponto
            </button>
        </div>
    </form> -->
  
</main>
<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Convênios</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Convênios</h1>
                <p class="font-17 color-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nesciunt aliquid ab molestias hic, accusamus quod eum nemo asperiores earum autem ut quas cupiditate, modi quo adipisci dolorum impedit! Distinctio.</p>
            
                <form action="">
                    <div class="row gx-2">
                        <div class="col-12 col-lg-3 mb-2 mb-lg-0">
                            <select class="form-select font-14" aria-label="Busque por Cidade">
                                <option disabled selected>Busque por Cidade</option>
                                <option value="1">Opção 1</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <select class="form-select font-14" aria-label="Busque por Categoria">
                                <option disabled selected>Busque por Categoria</option>
                                <option value="1">Opção 1</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-3 mt-lg-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="convenios-interna.php" class="text-decoration-none">
                        <img src="img/convenios/convenio1.png" alt="Balanço Da Manifestação De 29 De Maio De 2021" class="img-fluid rounded w-100 mb-2">
                    </a>
                    <p class="font-14 color-red mb-1">Campo Grande</p>
                    <h2 class="font-22 color-black">Escola de Idiomas</h2>
                    <a href="convenios-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="convenios-interna.php" class="text-decoration-none">
                        <img src="img/convenios/convenio2.png" alt="Balanço Da Manifestação De 29 De Maio De 2021" class="img-fluid rounded w-100 mb-2">
                    </a>
                    <p class="font-14 color-red mb-1">Dourado</p>
                    <h2 class="font-22 color-black">Cursinho Pré-Vestibular</h2>
                    <a href="convenios-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="convenios-interna.php" class="text-decoration-none">
                        <img src="img/convenios/convenio3.png" alt="Balanço Da Manifestação De 29 De Maio De 2021" class="img-fluid rounded w-100 mb-2">
                    </a>
                    <p class="font-14 color-red mb-1">Campo Grande</p>
                    <h2 class="font-22 color-black">Locação de Carros</h2>
                    <a href="convenios-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="convenios-interna.php" class="text-decoration-none">
                        <img src="img/convenios/convenio4.png" alt="Balanço Da Manifestação De 29 De Maio De 2021" class="img-fluid rounded w-100 mb-2">
                    </a>
                    <p class="font-14 color-red mb-1">Corumbá</p>
                    <h2 class="font-22 color-black">Material Esportivo</h2>
                    <a href="convenios-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Galeria de Vídeos</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Galeria de Vídeos</h1>
            </div>
        </div>

        <div class="row mt-3 mt-lg-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a data-fancybox href="https://www.youtube.com/watch?v=OY6oHOa3uBU&ab_channel=Deck" class="text-decoration-none">
                        <div class="card galeria mb-4">
                            <img src="img/artigos/artigo1.png" class="card-img" alt="Reunião do Conselho Universitário da UFMS para debater o Future-se" class="img-fluid rounded w-100 mb-4">
                            <div class="card-img-overlay">
                                <i class="bi bi-play-circle font-60 color-light"></i>
                            </div>
                        </div>
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021</p>
                    <h2 class="font-22 color-black">Reunião do Conselho Universitário da UFMS para debater o Future-se</h2>
                    <a href="galeria-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a data-fancybox href="https://www.youtube.com/watch?v=OY6oHOa3uBU&ab_channel=Deck" class="text-decoration-none">
                        <div class="card galeria mb-4">
                            <img src="img/artigos/artigo2.png" class="card-img" alt="Decisão da justiça derruba decreto e devolve 120 cargos comissionados para" class="img-fluid rounded w-100 mb-4">
                            <div class="card-img-overlay">
                                <i class="bi bi-play-circle font-60 color-light"></i>
                            </div>
                        </div>
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021</p>
                    <h2 class="font-22 color-black">Decisão da justiça derruba decreto e devolve 120 cargos comissionados para</h2>
                    <a href="galeria-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a data-fancybox href="https://www.youtube.com/watch?v=OY6oHOa3uBU&ab_channel=Deck" class="text-decoration-none">
                        <div class="card galeria mb-4">
                            <img src="img/artigos/artigo3.png" class="card-img" alt="Audiência Pública sobre o Future-se e o financiamento das " class="img-fluid rounded w-100 mb-4">
                            <div class="card-img-overlay">
                                <i class="bi bi-play-circle font-60 color-light"></i>
                            </div>
                        </div>
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021</p>
                    <h2 class="font-22 color-black">Audiência Pública sobre o Future-se e o financiamento das </h2>
                    <a href="galeria-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a data-fancybox href="https://www.youtube.com/watch?v=OY6oHOa3uBU&ab_channel=Deck" class="text-decoration-none">
                        <div class="card galeria mb-4">
                            <img src="img/artigos/artigo4.png" class="card-img" alt="Debate sobre o Future-se e o financiamento de pesquisas no Brasil" class="img-fluid rounded w-100 mb-4">
                            <div class="card-img-overlay">
                                <i class="bi bi-play-circle font-60 color-light"></i>
                            </div>
                        </div>
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021</p>
                    <h2 class="font-22 color-black">Debate sobre o Future-se e o financiamento de pesquisas no Brasil</h2>
                    <a href="galeria-interna.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
            <?php } ?>
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link font-17 color-black" href="#">1</a></li>
                    <li class="page-item"><a class="page-link font-17 color-black" href="#">2</a></li>
                    <li class="page-item"><a class="page-link font-17 color-black" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link font-17 color-light bg-red" href="#">Continue</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
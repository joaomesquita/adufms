<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Artigos</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Artigos</h1>
            </div>
        </div>

        <div class="row mt-3 mt-lg-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/artigos/artigo1.png" alt="Carta aberta ao Sr. Milton Ribeiro" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Carta aberta ao Sr. Milton Ribeiro</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/artigos/artigo2.png" alt="Os efeitos da reforma administrativa para a sociedade brasileira" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Os efeitos da reforma administrativa...</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/artigos/artigo3.png" alt="Abril: cesta básica aumenta em 15 capitais" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Abril: cesta básica aumenta em 15 capitais</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/artigos/artigo4.png" alt="Balanço Da Manifestação De 29 De Maio De 2021" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Balanço Da Manifestação De 29 De Maio De 2021</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
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
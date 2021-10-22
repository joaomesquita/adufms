<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Notícias</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Notícias</h1>
            </div>
        </div>

        <div class="row mt-3 mt-lg-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/post1.png" alt="Tarcísio Meira morre de Covid aos 85 anos" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Tarcísio Meira morre de Covid aos 85 anos</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/post2.png" alt="Barroso anuncia medidas para dar 'ainda mais' transparência ao sistema..." class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Barroso anuncia medidas para dar 'ainda mais'...</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/post3.png" alt="Entenda o que muda com a MP que libera a venda direta de etanol para os ... postos" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Entenda o que muda com a MP que libera a venda...</h2>
                    <a href="post.php" class="font-14 color-red text-decoration-none">Continue lendo <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php">
                        <img src="img/post4.png" alt="Em centenário de Paulo Freire, AL-MS homenageará professores e entidades" class="img-fluid rounded mb-2 w-100">
                    </a>
                    <p class="font-14 color-black mb-1">12 AGO, 2021 <a href="#" class="color-red text-decoration-none">Categoria</a></p>
                    <h2 class="font-22 color-black">Em centenário de Paulo Freire...</h2>
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
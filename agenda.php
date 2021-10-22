<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Agenda</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Agenda</h1>
                <p class="font-17 color-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nesciunt aliquid ab molestias hic, accusamus quod eum nemo asperiores earum autem ut quas cupiditate, modi quo adipisci dolorum impedit! Distinctio.</p>
            
                <form action="">
                    <div class="row gx-2">
                        <div class="col-12 col-lg-3 mb-2 mb-lg-0">
                            <input type="date" class="form-select font-14">
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
            <?php for ($i = 1; $i < 13; $i++) { ?>
                <div class="col-12 col-lg-3 mb-3 mb-lg-5">
                    <a href="post.php" class="text-decoration-none">
                        <div class="bg-gray rounded p-4">
                            <h1 class="font-60 color-black mb-0"><?php echo $i ?></h1>
                            <h2 class="font-22 color-black">Novembro</h2>

                            <p class="font-14 color-red mt-4 mb-1">Campo Grande</p>
                            <h2 class="font-18 color-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h2>
                        </div>
                    </a>
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
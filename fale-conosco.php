<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Contato</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Endereço</h1>
                <p class="font-17 color-black">Avenida Senador Filinto Müller, 559, esquina com Rua das Guianas, Vila Ipiranga<br>Campo Grande Mato Grosso do Sul, 79080-190, Brasil</p>
                <a href="#" target="_blank" class="btn bg-black color-light px-4 py-3">Ver no Mapa</a>
            </div>
        </div>

        <div class="row justify-content-center text-center mt-5">
            <div class="col-12 col-lg-10">
                <h1 class="font-40 color-black fw-bold">Contato</h1>
                <form action="" class="mt-5">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <input type="text" class="form-control font-17 py-3" id="name" placeholder="Nome *">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control font-17 py-3" id="telefone" placeholder="Telefone *">
                            </div>
                            <div class="mb-3 mb-lg-0">
                                <input type="email" class="form-control font-17 py-3" id="email" placeholder="E-mail *">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <textarea class="form-control font-17 py-3" id="mensagem" placeholder="Mensagem *"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3">
                            <button class="btn bg-red color-light px-5 py-3 mt-4">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
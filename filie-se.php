<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '•';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item font-14"><a href="index.php" class="color-red text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item font-14" aria-current="page">Filie-se</li>
                    </ol>
                </nav>
                <h1 class="font-40 color-black fw-bold">Faça o seu Pré-cadastro</h1>
                <p class="font-17 color-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed ipsum ligula. Nulla condimentum enim non</p>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-4">
                <form action="" class="mt-5">
                    <div class="mb-3">
                        <input type="text" class="form-control font-17 py-3" id="name" placeholder="Nome *">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control font-17 py-3" id="telefone" placeholder="Telefone *">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control font-17 py-3" id="email" placeholder="E-mail *">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control font-17 py-3" id="cpf" placeholder="CPF *">
                    </div>
                    <div class="mb-3">
                        <select class="form-select font-17 py-3" aria-label="Estado *">
                            <option disabled selected>Estado *</option>
                            <option value="1">Opção 1</option>
                        </select>
                    </div>
                    <div class="mb-3 mb-lg-0">
                        <select class="form-select font-17 py-3" aria-label="Cidade *">
                            <option disabled selected>Cidade *</option>
                            <option value="1">Opção 1</option>
                        </select>
                    </div>
                    <button class="btn bg-red color-light px-5 py-3 mt-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
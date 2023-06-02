<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A melhor lanchonete de Marília">
    <meta name="keywords" content="Lanchonete, Hamburguer, Burguer, Queijo, Pão, Molho especial, porções, pizzas, chopp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/icones/icones.css">
    <title>Lanchonete Burguer</title>
</head>
<body>
    <header id="cabecalho">
        <div id="barra-topo">
            <div id="btn-menu" >
                <i class="icon-botao-hamburguer"></i>
            </div>
            <div id="logotipo">
                <img src="/img/exports/logotipo-2.svg" alt="Lanchonete burguer" height="40">
            </div>

            <nav id="menu-principal">
                <div id="menu-principal-topo">
                    <div id="btn-close" class="icon-menu-fechar">
                        <i class="icon-close"></i>
                    </div>
                    <img src="/img/exports/logotipo-2.svg" alt="Lanchonete burguer" height="35">
                </div>

                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Lanchonete</a></li>
                    <li><a href="#">Localização</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div id="overlay"></div>
            <div id="usuario">
                <h1>
                    <img src="/img/profile/usuario1.jpg" class="formato-bolinha" alt="Usuário" height="40">
                </h1>
            </div>
        </div>
        <!-- Fim da barra superior -->

        <!-- Início da barra de pesquisa -->
            <div id="pesquisar">
            <form action="" method="get">
                <input type="search" name="pesquisar" placeholder="Quer comer o que?">
                <button type="submit">
                    <i class="icon-lupa"></i>
                </button>
            </form>
        </div>
    </header>
    <!-- Fim do cabecalho -->

    <main id="conteudo">
        @yield('conteudo')
    </main>
    <!-- Fim do conteúdo principal -->

    <!-- Rodapé -->
    <footer>
        <nav id="menu-rodape">
            <ul>
                <li><a href="#"><i class="icon-house"></i></a></li>
                <li><a href="#"><i class="icon-cesta"></i></a></li>
                <li><a href="#"><i class="icon-pedido"></i></a></li>
                <li><a href="#"><i class="icon-favoritos"></i></a></li>
                <li><a href="#"><i class="icon-user1"></i></a></li>
            </ul>
        </nav>
    </footer>

    <script src="/js/main.js"></script>
</body>
</html>

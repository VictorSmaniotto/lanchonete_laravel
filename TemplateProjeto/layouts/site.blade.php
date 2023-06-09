<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous" />
    <title>@yield('titulo') :: Burger</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-secondary">
            <div class="container">
                <a class="navbar-brand"
                   href="#"><img src="/images/logo.png"
                         alt="Burger" /></a>
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                     id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="noticias.html">Noticias</a>
                        </li>
                    </ul>
                    <form class="d-flex"
                          role="search">
                        <input name="pesquisar"
                               class="form-control me-2"
                               type="search"
                               placeholder="Pesquisar Notícias..." />
                        <button class="btn btn-primary"
                                type="submit">
                            Pesquisar
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main id="conteudo-main">

        @yield('conteudo')

    </main>

    <footer class="bg-dark-subtle py-3 text-center mt-auto">
        <div class="container">
            <p>Copyright &copy;2023 - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>

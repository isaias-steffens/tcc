
<header class="main-header">

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logotipo e nome -->
            <a class="navbar-brand" href="<?php echo $base; ?>index.php">
                <i class="bi bi-printer-fill"></i>
                <span>ControlPRINT</span>
            </a>

            <!-- Botão para dispositivos móveis -->
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarControlPrint"
                    aria-controls="navbarControlPrint"
                    aria-expanded="false"
                    aria-label="Abrir menu">

                <i class="bi bi-list"></i>
            </button>

            <!-- Links de navegação -->
            <div class="collapse navbar-collapse" id="navbarControlPrint">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base; ?>index.php">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base; ?>paginas/introducao.php">
                            Projeto
                        </a>
                    </li>

                    <!-- Menu de desenvolvimento -->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#"
                           role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Desenvolvimento
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="<?php echo $base; ?>paginas/painel.php">
                                    Painel administrativo
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?php echo $base; ?>paginas/impressoras.php">
                                    Impressoras em rede
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?php echo $base; ?>paginas/gastos.php">
                                    Controle de gastos
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?php echo $base; ?>paginas/hospedagem.php">
                                    Hospedagem e infraestrutura
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base; ?>paginas/linhas.php">
                            Linhas de pesquisa
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base; ?>paginas/cronograma.php">
                            Cronograma
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base; ?>paginas/referencias.php">
                            Referências
                        </a>
                    </li>

                    <!-- Acesso ao sistema -->
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-access"
                           href="http://controlprint.ceedo.com.br"
                           target="_blank" rel="noopener noreferrer">

                            <i class="bi bi-box-arrow-up-right"></i>
                            Acessar sistema

                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

</header>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Introdução | ControlPRINT</title>

    <!----------------head ------------------>
    <?php include "../includes_site/head.php"?>
    <!--------------------------------------->
    
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!----------------header------------------>
    <?php include "../includes_site/header.php"?>
    <!---------------------------------------->

    <main>

        <!-- Título da página -->
        <section class="page-banner">
            <div class="container">
                <span class="section-subtitle">APRESENTAÇÃO DO PROJETO</span>
                <h1>Introdução</h1>
                <p>
                    Conheça a proposta, os objetivos e a importância do
                    desenvolvimento do ControlPRINT para a instituição.
                </p>
            </div>
        </section>

        <!-- Conteúdo da introdução -->
        <section class="content-section">
            <div class="container">

                <article class="content-card">

                    <h2>Contextualização</h2>

                    <p>
                        O gerenciamento dos serviços de impressão em instituições
                        de ensino pode apresentar dificuldades quando não existe
                        um controle centralizado sobre os equipamentos, os usuários
                        e os documentos enviados para impressão. A ausência desse
                        gerenciamento pode dificultar o acompanhamento do consumo
                        de papel, tinta e toner, além de tornar menos organizada
                        a utilização das impressoras disponíveis.
                    </p>

                    <p>
                        Diante dessa situação, surgiu a proposta de desenvolver
                        um sistema de gerenciamento de impressões para o Colégio
                        Estadual Dr. Dorvalino Luciano de Souza, localizado em
                        Cerro Grande - RS. O projeto busca utilizar os recursos
                        tecnológicos disponíveis na instituição para organizar
                        os serviços de impressão e facilitar sua administração.
                    </p>

                    <h2>Justificativa</h2>

                    <p>
                        A implantação de um sistema de gerenciamento permite
                        melhorar a organização das impressões realizadas pelos
                        diferentes integrantes da comunidade escolar. Com o
                        acompanhamento dos trabalhos enviados, torna-se possível
                        identificar o consumo individual, estabelecer limites
                        de utilização e administrar os recursos destinados
                        aos serviços de impressão.
                    </p>

                    <p>
                        Dessa forma, o projeto também busca contribuir para
                        a redução de desperdícios e para uma utilização mais
                        consciente dos materiais, oferecendo à instituição
                        uma ferramenta que auxilie no controle e na organização
                        de suas atividades.
                    </p>

                    <h2>Objetivo geral</h2>

                    <p>
                        Desenvolver um sistema de gerenciamento de impressões
                        capaz de centralizar a administração das impressoras,
                        organizar os usuários e acompanhar os trabalhos
                        realizados na rede escolar do Colégio Estadual Dr.
                        Dorvalino Luciano de Souza.
                    </p>

                    <h2>Objetivos específicos</h2>

                    <ul>
                        <li>
                            Implementar um painel administrativo para
                            gerenciamento dos usuários e das impressoras.
                        </li>

                        <li>
                            Organizar os usuários em grupos, permitindo
                            estabelecer permissões e limites de impressão.
                        </li>

                        <li>
                            Integrar diferentes impressoras à estrutura
                            de rede da instituição.
                        </li>

                        <li>
                            Acompanhar o consumo de páginas e os custos
                            relacionados aos trabalhos de impressão.
                        </li>

                        <li>
                            Hospedar o sistema localmente, utilizando
                            a infraestrutura tecnológica disponível na escola.
                        </li>
                    </ul>

                </article>

                <!-- Navegação entre páginas -->
                <div class="page-navigation">

                    <a href="../index.php" class="btn btn-outline-success">
                        <i class="bi bi-arrow-left"></i>
                        Página inicial
                    </a>

                    <a href="painel.php" class="btn btn-success">
                        Próxima etapa
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>
        </section>

    </main>

    <!----------------footer------------------>
    <?php include "../includes_site/footer.php"?>
    <!---------------------------------------->

</body>
</html>

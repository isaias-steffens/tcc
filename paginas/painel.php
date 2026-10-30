
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Painel Administrativo | ControlPRINT</title>

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

        <!-- Apresentação da página -->
        <section class="page-banner">
            <div class="container">

                <span class="section-subtitle">
                    DESENVOLVIMENTO DO SISTEMA
                </span>

                <h1>Painel administrativo</h1>

                <p>
                    Organização dos usuários, gerenciamento das impressoras
                    e controle das atividades de impressão por meio de uma
                    interface administrativa centralizada.
                </p>

            </div>
        </section>


        <!-- Conteúdo principal -->
        <section class="content-section">
            <div class="container">

                <article class="content-card">

                    <h2>Como funciona o painel administrativo?</h2>

                    <p>
                        Para realizar o gerenciamento das impressões, foi
                        utilizado o SavaPage, uma plataforma que permite
                        administrar usuários, impressoras e trabalhos enviados
                        para impressão. Por meio de seu painel administrativo,
                        é possível acompanhar as atividades realizadas no
                        sistema e configurar diferentes opções de utilização.
                    </p>

                    <p>
                        A plataforma centraliza as principais funções de
                        gerenciamento, permitindo que o administrador tenha
                        acesso às informações dos usuários, aos trabalhos
                        de impressão e às configurações dos equipamentos
                        conectados ao serviço.
                    </p>


                    <h2>Gerenciamento de usuários</h2>

                    <p>
                        A organização dos usuários é uma das partes
                        fundamentais do sistema. Para facilitar a administração,
                        foram definidos grupos de utilização de acordo com
                        os integrantes da comunidade escolar, principalmente
                        alunos e professores.
                    </p>

                    <p>
                        Essa divisão permite organizar os usuários conforme
                        suas respectivas categorias, facilitando a aplicação
                        de permissões e regras de utilização. Cada usuário
                        possui seu próprio acesso ao sistema, possibilitando
                        identificar os trabalhos de impressão realizados
                        individualmente.
                    </p>

                    <h2>Organização por grupos</h2>

                    <p>
                        Os grupos permitem estabelecer configurações
                        específicas para diferentes categorias de usuários.
                        No ControlPRINT, essa organização foi planejada
                        considerando as necessidades de alunos e professores,
                        permitindo administrar separadamente as condições
                        de utilização dos serviços de impressão.
                    </p>

                    <ul>
                        <li>
                            <strong>Alunos:</strong> usuários organizados
                            em um grupo próprio para controle e acompanhamento
                            das impressões.
                        </li>

                        <li>
                            <strong>Professores:</strong> usuários organizados
                            separadamente, permitindo aplicar regras e limites
                            específicos de utilização.
                        </li>
                    </ul>


                    <h2>Controle de permissões e créditos</h2>

                    <p>
                        O gerenciamento também envolve a definição de limites
                        e créditos para utilização dos serviços. Por meio das
                        configurações disponíveis no SavaPage, o administrador
                        pode estabelecer valores de referência para os grupos
                        e acompanhar o consumo realizado pelos usuários.
                    </p>

                    <p>
                        Esse modelo permite organizar a utilização dos
                        recursos de impressão, considerando as regras
                        estabelecidas pela instituição. Também possibilita
                        acompanhar a necessidade de concessão de créditos
                        adicionais quando necessário.
                    </p>


                    <h2>Acompanhamento dos trabalhos</h2>

                    <p>
                        Os trabalhos enviados para impressão ficam registrados
                        no sistema, permitindo acompanhar informações sobre
                        as atividades realizadas. Esse acompanhamento auxilia
                        na identificação do consumo individual e na
                        administração dos serviços disponibilizados pela escola.
                    </p>

                    <p>
                        Dessa maneira, o painel administrativo funciona
                        como o ponto central de gerenciamento do ControlPRINT,
                        reunindo recursos necessários para organizar os
                        usuários e acompanhar a utilização das impressoras.
                    </p>

                </article>


                <!-- Navegação entre páginas -->
                <div class="page-navigation">

                    <a href="introducao.php" class="btn btn-outline-success">
                        <i class="bi bi-arrow-left"></i>
                        Etapa anterior
                    </a>

                    <a href="impressoras.php" class="btn btn-success">
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

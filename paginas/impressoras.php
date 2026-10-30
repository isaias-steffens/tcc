
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Impressoras em Rede | ControlPRINT</title>

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

                <h1>Impressoras em rede</h1>

                <p>
                    Integração dos equipamentos à rede escolar e configuração
                    dos serviços responsáveis pelo gerenciamento dos trabalhos
                    de impressão.
                </p>

            </div>
        </section>


        <!-- Conteúdo principal -->
        <section class="content-section">
            <div class="container">

                <article class="content-card">

                    <h2>Como conectar e configurar várias impressoras em rede?</h2>

                    <p>
                        Para permitir que diferentes computadores utilizem
                        os equipamentos disponíveis na instituição, é
                        necessário integrar as impressoras à rede local.
                        Essa conexão possibilita que os dispositivos sejam
                        identificados pelo servidor e utilizados sem a
                        necessidade de conexão direta com cada computador.
                    </p>

                    <p>
                        No desenvolvimento do ControlPRINT, foi considerada
                        a utilização de impressoras conectadas por meio de
                        Ethernet ou Wi-Fi, desde que possuam suporte à
                        comunicação em rede. Cada equipamento pode ser
                        identificado por seu endereço IP, facilitando sua
                        localização e configuração no servidor.
                    </p>


                    <h2>Utilização do CUPS</h2>

                    <p>
                        O CUPS (Common UNIX Printing System) é o serviço
                        responsável pelo gerenciamento das impressoras
                        e das filas de impressão no servidor Linux. Ele
                        permite cadastrar equipamentos, configurar suas
                        opções de funcionamento e receber trabalhos
                        enviados pelos usuários.
                    </p>

                    <p>
                        Por meio do CUPS, o administrador pode adicionar
                        impressoras, selecionar os drivers ou arquivos
                        de configuração compatíveis e realizar testes
                        para verificar se a comunicação com os equipamentos
                        está funcionando corretamente.
                    </p>


                    <h2>Integração com o SavaPage</h2>

                    <p>
                        Após a configuração das impressoras no CUPS,
                        os equipamentos podem ser integrados ao SavaPage.
                        Essa integração permite que a plataforma utilize
                        os serviços de impressão disponibilizados pelo
                        servidor, centralizando o acesso dos usuários
                        aos equipamentos cadastrados.
                    </p>

                    <p>
                        Dessa forma, o CUPS atua na comunicação e no
                        gerenciamento das filas de impressão, enquanto
                        o SavaPage oferece os recursos de administração
                        dos usuários, acompanhamento dos trabalhos
                        e controle de utilização.
                    </p>


                    <h2>Configuração dos equipamentos</h2>

                    <p>
                        A configuração de cada impressora depende de suas
                        características e dos protocolos de comunicação
                        disponíveis. Durante esse processo, é necessário
                        identificar o equipamento na rede, verificar
                        sua compatibilidade com o sistema e selecionar
                        a configuração adequada para seu funcionamento.
                    </p>

                    <p>
                        Também é importante realizar testes de impressão
                        após o cadastro, verificando se os trabalhos
                        são recebidos corretamente pelo equipamento.
                        Essa etapa permite identificar possíveis
                        problemas de comunicação ou incompatibilidade
                        de configuração.
                    </p>


                    <h2>Administração centralizada</h2>

                    <p>
                        Com as impressoras integradas ao servidor,
                        o gerenciamento passa a ser realizado de forma
                        centralizada. Isso facilita a administração
                        dos equipamentos, pois as configurações e
                        o acompanhamento dos trabalhos ficam concentrados
                        na infraestrutura do ControlPRINT.
                    </p>

                    <p>
                        A utilização dessa estrutura também permite
                        que diferentes usuários acessem os serviços
                        de impressão pela rede escolar, respeitando
                        as configurações e as permissões estabelecidas
                        no sistema.
                    </p>


                    <h2>Equipamento utilizado no projeto</h2>

                    <p>
                        Durante a configuração da infraestrutura,
                        foi utilizado como equipamento de referência
                        uma impressora Samsung CLP-350 Series PCL6,
                        conectada à rede Ethernet e identificada
                        por seu próprio endereço IP.
                    </p>

                    <p>
                        Para sua integração ao servidor, foram
                        verificadas as opções de configuração
                        disponíveis no CUPS, incluindo os arquivos
                        PPD compatíveis com o modelo. Essa etapa
                        permitiu preparar o equipamento para os
                        testes de comunicação e impressão.
                    </p>

                </article>


                <!-- Navegação entre páginas -->
                <div class="page-navigation">

                    <a href="painel.php" class="btn btn-outline-success">
                        <i class="bi bi-arrow-left"></i>
                        Etapa anterior
                    </a>

                    <a href="gastos.php" class="btn btn-success">
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


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Hospedagem e Infraestrutura | ControlPRINT</title>

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

                <h1>Hospedagem e infraestrutura</h1>

                <p>
                    Montagem, configuração e disponibilização do ControlPRINT,
                    utilizando equipamentos reaproveitados e serviços de
                    hospedagem e gerenciamento de domínio.
                </p>

            </div>
        </section>


        <!-- Conteúdo principal -->
        <section class="content-section">
            <div class="container">

                <article class="content-card">

                    <h2>Montagem do servidor</h2>

                    <p>
                        O servidor do ControlPRINT foi construído utilizando
                        peças antigas do servidor do CEEDO, incluindo o
                        monitor, o teclado e o mouse, que foram reaproveitados
                        para sua montagem.
                    </p>


                    <h2>Hospedagem do sistema</h2>

                    <p>
                        A hospedagem foi realizada por meio da plataforma
                        Hostinger, ferramenta utilizada para criar, hospedar
                        e gerenciar sites, lojas virtuais e aplicações na
                        internet. Nela, foi configurado o subdomínio
                        ceedo.com.br, pertencente ao domínio oficial do site
                        da escola.
                    </p>


                    <h2>Configuração inicial de acesso</h2>

                    <p>
                        Inicialmente, o acesso ao site do ControlPRINT era
                        realizado diretamente pelo endereço IP do servidor,
                        acompanhado de sua respectiva porta. No entanto,
                        essa configuração apresentava uma questão de
                        segurança, pois deixava o endereço IP do servidor
                        exposto a todos os usuários que acessassem o site.
                    </p>


                    <h2>Configuração do endereço IP fixo</h2>

                    <p>
                        Após a montagem e configuração inicial do servidor,
                        foi definido um endereço IP fixo para ele. Essa
                        configuração foi necessária para garantir que o
                        servidor mantivesse sempre o mesmo endereço dentro
                        da rede, evitando alterações que poderiam comprometer
                        o acesso ao sistema.
                    </p>


                    <h2>Configuração do DNS</h2>

                    <p>
                        Em seguida, foi realizada a configuração do DNS por
                        meio da ONT (terminal de rede óptica) da conexão de
                        fibra óptica. Nessa etapa, foi criado um registro
                        do tipo <strong>Classe A</strong>, responsável por
                        associar um nome de domínio a um endereço IPv4.
                        Dessa forma, o domínio utilizado pelo ControlPRINT
                        foi direcionado ao endereço IP fixo configurado
                        anteriormente no servidor.
                    </p>

                    <p>
                        Com essa configuração, quando um usuário acessa
                        o endereço do ControlPRINT pelo navegador, o DNS
                        realiza a resolução do domínio, identificando o
                        endereço IP correspondente ao servidor. Assim,
                        o acesso deixa de depender da digitação direta
                        do endereço IP e da porta, tornando a utilização
                        do sistema mais simples e organizada.
                    </p>

                    <p>
                        Essa implementação também facilitou o gerenciamento
                        do acesso ao ControlPRINT, pois, caso fosse necessário
                        alterar o endereço IP do servidor no futuro, bastaria
                        atualizar o registro DNS correspondente, mantendo
                        o mesmo domínio de acesso para os usuários.
                    </p>


                    <h2>Sistema operacional do servidor</h2>

                    <p>
                        O servidor foi configurado utilizando o Ubuntu
                        Server, uma distribuição Linux desenvolvida
                        para ambientes de servidores. Esse sistema
                        oferece ferramentas para administrar serviços
                        de rede, instalar aplicações e controlar
                        os recursos utilizados pela infraestrutura.
                    </p>

                    <p>
                        Sua utilização permite manter os serviços
                        necessários ao funcionamento do ControlPRINT
                        centralizados em um único equipamento,
                        facilitando tarefas de configuração,
                        manutenção e administração.
                    </p>


                    <h2>Instalação do SavaPage e do CUPS</h2>

                    <p>
                        Após a preparação do sistema operacional,
                        foram instalados e configurados os serviços
                        responsáveis pelo gerenciamento das impressões.
                        O SavaPage funciona como a plataforma de
                        administração, disponibilizando o painel
                        utilizado pelos usuários e administradores.
                    </p>

                    <p>
                        O CUPS complementa essa estrutura, sendo
                        responsável pelo gerenciamento das filas
                        de impressão e pela comunicação com os
                        equipamentos cadastrados no servidor.
                        A integração entre os dois serviços permite
                        centralizar o funcionamento do sistema.
                    </p>


                    <h2>Disponibilização na rede escolar</h2>

                    <p>
                        Para permitir o acesso ao sistema, o servidor
                        é conectado à rede local e identificado por
                        um endereço IP. Dessa forma, os computadores
                        que possuem acesso à mesma rede podem
                        estabelecer comunicação com os serviços
                        disponibilizados pelo equipamento.
                    </p>

                    <p>
                        O acesso ao painel do ControlPRINT é realizado
                        por meio de um navegador, utilizando o endereço
                        configurado para o servidor. Isso permite
                        que os usuários utilizem a plataforma sem
                        precisar instalar o SavaPage individualmente
                        em seus computadores.
                    </p>


                    <h2>Arquitetura da infraestrutura</h2>

                    <p>
                        A estrutura do ControlPRINT é organizada
                        de maneira centralizada. O servidor mantém
                        os serviços de gerenciamento, enquanto
                        os computadores acessam a plataforma
                        pela rede e enviam os trabalhos de impressão
                        aos equipamentos disponíveis.
                    </p>

                    <p>
                        A representação a seguir será utilizada
                        para demonstrar a organização da infraestrutura
                        e o relacionamento entre seus componentes.
                    </p>

                    <!-- Imagem da infraestrutura -->
                    <div class="network-image">

                        <img src="../midias/rede-controlprint.png"
                             alt="Diagrama da infraestrutura de rede do ControlPRINT">

                        <span>
                            Figura 1 – Representação da infraestrutura
                            de rede do ControlPRINT.
                        </span>

                    </div>


                    <h2>Funcionamento da estrutura</h2>

                    <p>
                        De maneira geral, os computadores acessam
                        o painel do sistema por meio da rede escolar.
                        Quando um trabalho é enviado para impressão,
                        o SavaPage realiza o gerenciamento da solicitação
                        e utiliza os serviços do CUPS para encaminhar
                        o trabalho à impressora correspondente.
                    </p>

                    <p>
                        Essa organização permite concentrar
                        o gerenciamento dos usuários, dos trabalhos
                        e dos equipamentos no servidor, tornando
                        a administração das impressões mais
                        organizada e facilitando o acompanhamento
                        das atividades realizadas na instituição.
                    </p>


                    <h2>Vantagens da hospedagem e infraestrutura</h2>

                    <ul>
                        <li>
                            Reaproveitamento de equipamentos antigos
                            para a montagem do servidor.
                        </li>

                        <li>
                            Utilização de domínio próprio para facilitar
                            o acesso ao sistema.
                        </li>

                        <li>
                            Configuração de endereço IP fixo para manter
                            a estabilidade da conexão.
                        </li>

                        <li>
                            Associação do domínio ao endereço IP por meio
                            da configuração DNS.
                        </li>

                        <li>
                            Centralização dos serviços de impressão
                            em um único servidor.
                        </li>

                        <li>
                            Facilidade para administrar usuários,
                            equipamentos e trabalhos de impressão.
                        </li>

                        <li>
                            Maior organização dos serviços e dos
                            recursos utilizados pela escola.
                        </li>
                    </ul>

                </article>


                <!-- Navegação entre páginas -->
                <div class="page-navigation">

                    <a href="gastos.php" class="btn btn-outline-success">
                        <i class="bi bi-arrow-left"></i>
                        Etapa anterior
                    </a>

                    <a href="linhas.php" class="btn btn-success">
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

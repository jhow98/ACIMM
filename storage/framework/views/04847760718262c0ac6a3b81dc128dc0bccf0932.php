<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->
    <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body>
        <div class="pre-loader">
            <div class="load-con">
                <img src="<?php echo e(url('img/logo/logo_acimm.gif')); ?>" class="animated fadeInDown" alt="">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- Wrap all page content here -->
        <div id="wrap" class="home">
            <header>
                <!-- Fixed navbar -->
                <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!--/.navbar -->
            </header>            <section class="well well-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Serviços para você</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h1>SCPC</h1>
                                <h4>Uma agenda repleta de eventos com os mais diversos temas para aprimorar seu enriquecimento pessoal e profissional.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center sp-effect5 animated fadeInUp">
                                    <img class="img-responsive img-rounded" src="<?php echo e(url('img/samples/servicos/scpc.jpg')); ?>" alt="Imagem">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 scrollpoint sp-effect4">
                                    <img src="<?php echo e(url('img/samples')); ?>" class="img-responsive img-center" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="media vertical scrollpoint sp-effect5">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo e(url('img/icons/icone-valores.png')); ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Análise de crédito</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media vertical scrollpoint sp-effect5">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo e(url('img/icons/icone-valores.png')); ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Prospecção de clientes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media vertical scrollpoint sp-effect5">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo e(url('img/icons/icone-valores.png')); ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Cobrança</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="divider">  </span>
                        </div>
                        <br>
                        <div class="col-md-5">
                            <img src="<?php echo e(url('img/imagens/scpc-1.png')); ?>" alt="SCPC">
                        </div>

                        <div class="col-md-7">
                            <h2>Soluções inteligentes</h2>
                            <p>
                                A ACIMM oferece um completo bureau de crédito, com soluçõe  s inteligentes para a tomada de decisões de crédito e gestão de negócios.
                                O banco de dados do SCPC - Serviço Central de Proteção de Crédito, conta com mais de 350 milhões de informações comerciais sobre consumidores e 42 milhões de registros de transações entre empresas. Sua rede nacional conta com mais de 2,2 mil entidades representativas do varejo em todas as regiões do Brasil. A riqueza de informações do banco de dados permite ao SCPC oferecer soluções inteligentes para auxiliar o processo de tomada de decisões de negócios de seus cerca de 1,2 milhão de clientes diretos e indiretos em todos os segmentos da economia.
                            </p>
                            <h2>Segurança</h2>
                            <p>Segurança é a palavra-chave para realizar qualquer operação de crédito. Antecipar o comportamento do seu consumidores e avaliar o seu histórico de pagamento no mercado são diferenciais importantes nas ações da sua empresa. Confira as nossas soluções para todos os ciclos de crédito.

                                Antes de fazer negócios com pessoas ou empresas, consulte sempre o SCPC, suas vendas agradecem e seu faturamento também!
                            </p>
                            <p>A Boa Vista SCPC é segura. No mercado desde de 2010, é resultado da união da Associação Comercial de São Paulo, do fundo brasileiro de investimentos TMG Capital, da Equifax Inc., do Clube de Diretores Lojistas do Rio de Janeiro, da Associação Comercial do Paraná e da Câmara de Dirigentes Lojistas de Porto Alegre.</p>

                        </div>
                        <div class="col-md-12">



                            <div>


                                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                                    <ul class="nav nav-tabs" id="myTabs" role="tablist">




                                        <li role="presentation" class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Principal </font></font><span class="caret"></span></a> 
                                            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                <li class=""><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pessoa Física</font></font></a></li>
                                                <li><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pessoa Jurídica</font></font></a></li>
                                                <li><a href="#dropdown3" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown3" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Certocar</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li role="presentation" class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Serviços </font></font><span class="caret"></span></a> 
                                            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                <li class=""><a href="#dropdown4" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown4" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Radar Pessoal</font></font></a></li>
                                                <li><a href="#dropdown5" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown5" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SOS Cheques e Documentos</font></font></a></li>
                                                <li><a href="#dropdown6" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown6" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recuperação de Crédito</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li role="presentation" class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Orientações </font></font><span class="caret"></span></a> 
                                            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                <li class=""><a href="#dropdown7" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown7" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meios de acesso as consultas</font></font></a></li>
                                                <li><a href="#dropdown8" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown8" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Consultas Anteriores</font></font></a></li>
                                                <li><a href="#dropdown9" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown9" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modelos de Documentos</font></font></a></li>
                                                <li><a href="#dropdown10" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown10" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Manutenção - Registro de Débitos</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li role="presentation" class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cheques </font></font><span class="caret"></span></a> 
                                            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                <li class=""><a href="#dropdown11" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown11" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Como evitar o recebimento de cheques falsos</font></font></a></li>
                                                <li><a href="#dropdown12" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown12" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registro de cheques falsos</font></font></a></li>
                                                <li><a href="#dropdown13" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown13" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alineas de cheques</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li role="presentation" class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Links Úteis </font></font><span class="caret"></span></a> 
                                            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                <li><a href="https://www.receita.fazenda.gov.br/Aplicacoes/SSL/ATCTA/CPF/ConsultaSituacao/ConsultaPublica.asp" >Situação CPF</a></li>
                                                <li><a href="https://www.consumidorpositivo.com.br/cadastro-positivo/">Cadastro consumidor positivo</a></li>
                                            </ul>
                                        </li>


                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active in" role="tabpanel" id="dropdown1" aria-labelledby="dropdown1-tab">
                                            <div class="container">
                                                <h2><strong>Pessoa Física</strong></h2>
                                                <h3 style="color: #22a3df">Consulta Básica: </h3>
                                                <h4><strong>Acerta SCPC</strong></h4>
                                                <p>Informa: Dados Cadastrais e de localização, Registros de débitos em nível Nacional,
                                                    títulos protestados (Estado SP), informações de cheques, e dados comportamentais como:
                                                    Consultas Anteriores e traz um modelo de Score. <strong>Abrangência Nacional.
                                                        Obs: caso opte por verificar mais um tipo de Score, terá custo adicional(ver site). (opção: 309)</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Consulta Intermediária: </h3>
                                                <h4><strong>Acerta Essencial</strong></h4>
                                                <p>Informa: Dados Cadastrais e de localização, Registros de débitos, títulos protestados em nível Nacional,
                                                    informações de cheques, e dados comportamentais como: Consultas Anteriores e Score.
                                                    <strong>Traz também links para consultar mais dados, porém com custos (ver site) adicionais, como:
                                                        Sugestão de Valor de Parcela, Sugestão de Recomenda/Não Recomenda a negociação, e Score Adicional.
                                                        Abrangência Nacional. (opção: 310)</strong>
                                                </p>
                                                <h4><strong>Acerta Mais</strong></h4>
                                                <p>Informa: Dados Cadastrais e de localização, Registros de débitos,
                                                    títulos protestados em nível Nacional, confirma participante,
                                                    traz informações de cheques, e dados comportamentais como: Consultas Anteriores e Score.
                                                    <strong>Traz também links para consultar mais dados, porém com custos (ver site) adicionais, como:
                                                        Sugestão de Limite de Parcela, e mais um Score Adicional.  Abrangência Nacional.(opção: 311)</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Consulta Avançada: </h3>
                                                <h4><strong>Acerta Completo</strong></h4>
                                                <p>É a consulta mais completa para Pessoa Física do Menu, traz dados cadastrais e de localização,
                                                    traz registro de débitos, títulos protestados, informações de cheques,  ações, informações de falência,
                                                    os últimos consultantes e a participação do CPF consultado em empresas e em falências,
                                                    informações inteligentes como: <strong>RECOMENDA/NÃO RECOMENDA a negociação a ser realizada,
                                                        SUGERE LIMITE DE VALOR DE PARCELA, SCORE, INFORMA RENDA MENSAL PRESUMIDA.
                                                        Traz também a opção de consultar mais um tipo de SCORE, porém com cobrança adicional (ver site).(opção: 312)</strong>
                                                </p>
                                                <h4><strong>SCPC/Relatório Imobiliário Nacional</strong></h4>
                                                <p>Informa: Síntese Cadastral, registros de débitos do SCPC, títulos protestados, cheques sem fundos,
                                                    alerta sobre documentos roubados/extraviados,<strong> ações cíveis</strong>, consultas anteriores,
                                                    <strong>consulta indicada para ramo imobiliário, caracterizando fiadores e inquilinos profissionais.</strong>
                                                    Abrangência Nacional. <strong>Traz link para consultar participação em empresa com custo adicional.
                                                        (opção: 840)  </strong>
                                                </p>
                                                <h3 style="color: #22a3df">Consulta Cheques: </h3>
                                                <h4><strong>SCPC/CHEQUE (físico e jurídico) - Somente informação bancária -</strong></h4>
                                                <p>Informa: Devoluções de Cheques sem fundos, Cheques sustado ou extraviado, confirmação do endereço a
                                                    partir do fornecimento do número do telefone, consultas anteriores realizadas para o CPF nos últimos
                                                    15 dias, e os dados da Síntese Cadastral.<strong> Abrangência Nacional. (opção: 906) </strong>
                                                </p>
                                                <h3 style="color: #22a3df">Produtos para localização e análise cadastral: </h3>
                                                <h4><strong>SCPC/FONE (obs: não traz débitos)</strong></h4>
                                                <p><strong>Informando apenas o CPF:</strong> traz Síntese Cadastral e até 3 tel. vinculados ao CPF
                                                    (indicando end. da instalação dos telefones).</p>
                                                <p><strong>Informando apenas o telefone:</strong> Endereço de instalação do telefone.</p>
                                                <p> <strong>Informando o CPF + Telefone:</strong> Síntese Cadastral, até 3 tel. vinculados ao CPF (indicando o end. da
                                                    instalação dos telefones).</p>
                                                <p><strong>Informando o CPF + Telefone + CEP: </strong>Síntese Cadastral, até 3 telefones vinculados ao CPF
                                                    (indicando o end. De instalação dos telefones) e endereço do CEP informado de acordo com os Correios.
                                                    <strong>Abrangência Nacional. (opção 820)</strong>
                                                </p>
                                                <h4><strong>SCPC/FONE + (obs: não traz débitos)</strong></h4>
                                                <p>Informação que traz o histórico dos números dos telefones passados pelo consumidor em todas as
                                                    suas negociações de crédito dos últimos 36 meses. Solução que orienta na tomada de decisão na
                                                    hora do fornecimento de crédito ao consumidor.<strong> Abrangência Nacional. (opção: 730)</strong>
                                                </p>
                                                <h4><strong>Acerto PF (obs: não traz débitos)</strong></h4>
                                                <p>Ferramenta que auxilia na validação de <strong>dados cadastrais e na obtenção de endereço e telefone.</strong>
                                                    A opção certa para atuar em ações de <strong>COBRANÇA, MARKETING E PROSPECÇÃO DE NOVOS CLIENTES.
                                                        Abrangência Nacional. (opção: 428)</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Produto classificação de risco: </h3>
                                                <h4><strong>SCPC/SCORE PF (obs: não traz débitos)</strong></h4>
                                                <p>Consulta indicada para assessorar na decisão de liberação de crédito ao consumidor. Ela traz dados
                                                    que podem determinar o comportamento futuro desse consumidor, avaliando assim a propensão de
                                                    risco em negociar com o cliente em questão.  <strong>(opção: 319)  </strong>
                                                </p>
                                                <h4><strong>Meios de acesso</strong></h4>
                                                <p><strong>- INTERNET/SITE:</strong>  www.acillimeira.com.br
                                                </p>
                                                <p><strong>- DÚVIDAS</strong> ligar: <strong>(19) 3404-4949</strong>
                                                </p>
                                                <p><strong>- MÁQUINAS</strong> de Consultas:<strong> Pertochek</strong> (consulta e preenche) e <strong>Micro Terminal</strong> com leitor e sem leitor deCMC7.
                                                </p>
                                                <p><strong>- ATENDENTE- 0800.707 4024 ou 0800.777 4024</strong>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane2" id="dropdown2" aria-labelledby="dropdown2-tab">
                                            <div class="container">
                                                <h2><strong>Pessoa Jurídica</strong></h2>
                                                <h3 style="color: #22a3df">Consulta Básica: </h3>
                                                <h4><strong>Consulte PJ (básica com opções a complementar)</strong></h4>
                                                <p>Informa: Dados de Identificação, localização, telefone, capital social, alerta de fraude,
                                                    pendências e restrições financeiras, informações de cheques sem fundos/sustados, e cheques
                                                    informados por usuários, títulos protestados, ações judiciais, falências e recuperações
                                                    judiciais.<strong> Traz vários links complementares para consultar com custos adicionais descritos no
                                                        site.(opção: 120)</strong>
                                                </p>
                                                <h4><strong>SCPC/NET PJ (opção de filtrar protestos por estado)</strong></h4>
                                                <p>Informa: Registros de débitos, títulos protestados (opção de escolher o estado), cheques devolvidos,
                                                    alerta de documentos roubados/extraviados, consultas anteriores, síntese cadastral, endereço a
                                                    partir do fornecimento no nº de telefone. Nacional. <strong>Traz link para consultar SCORE com custo
                                                        adicional descrito no site. (opção: 298)</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Consulta Intermediária: </h3>
                                                <h4><strong>SCPC/Relatório sintético nacional</strong></h4>
                                                <p>Todos os dados do Cadastro Sintético, títulos protestados, falências e concordatas, ações cíveis, cheques
                                                    sem fundos, registros de débitos (SCPC-E), consultas anteriores,<strong> alerta sobre empresas com tendências a
                                                        atuação fraudulenta no mercado.- Abrangência Nacional –Traz link para consultar participação”proprietário”
                                                        e  SCORE   com custo adicional (verificar site). (opção: 881)</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Consulta Avançada: </h3>
                                                <h4><strong>SCPC/Relatório analítico estadual ou nacional</strong></h4>
                                                <p>Todos os dados Cadastrais, títulos protestados, falências e concordatas, ações cíveis,
                                                    cheques sem fundos, registros de débitos, mais dados da empresa junto ao órgão oficial,
                                                    informações positivas sobre a empresa coletadas na mídia, cruzamento com outras empresas
                                                    com as quais os sócios, diretores ou a própria empresa façam parte e respectivas
                                                    restrições, títulos protestados, cheques sem fundos (PF e PJ) e registros de débitos (PF)
                                                    em nome dos sócios. <strong>Alertas sobre empresas com tendências a atuação fraudulenta no
                                                        mercado</strong>, documentos roubados/extraviados. Abrangência:</p>
                                                <p><strong>ESTADUAL (opção: 882)</strong></p>
                                                <p><strong>NACIONAL (opção: 987)</strong></p>
                                                <strong>Obs:A consulta Nacional traz links para consultar SCORE e o “Proprietário” Participante com custo adicional</strong>
                                                <h4><strong>Empresarial Gold</strong></h4>
                                                <p>É a consulta mais completa do Menu para Pessoa Jurídica, traz todos os dados do Cadastro Sintético,
                                                    títulos protestados, falências e concordatas, ações cíveis, cheques sem fundos, registros de
                                                    débitos (SCPC-E), consultas anteriores,<strong> alerta sobre empresas com tendências a atuação fraudulenta
                                                        no mercado, Faturamento presumido, títulos a vencer, principais fornecedores e tempo de
                                                        relacionamento com eles, scoragem.</strong></p>
                                                <p><strong>Abrangência Nacional (opção: 140)</strong></p>
                                                <p><strong>OBS:traz links opcionais SCORE/ Extras Protestos/ Pendências/Ações com seus valores adicionais descritos no site
                                                    </strong></p>
                                                <h4><strong>Empresarial Platinum</strong></h4>
                                                <p>Informa: Dados de Identificação, localização, telefone, capital social, alerta de fraude, pendências
                                                    e restrições financeiras, informações de cheques sem fundos/sustados, e cheques informados por
                                                    usuários, títulos protestados, ações judiciais, falências e recuperações judiciais, análise
                                                    setorial, representante legal, relatório detalhado dos sócios com apontamento de restrições
                                                    consultas anteriores <strong>Traz links adicionais para consultar com custos adicionais descritos no site.
                                                        (opção: 181)</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Consulta Cheques: </h3>
                                                <h4><strong>SCPC/CHEQUE (físico e jurídico) - somente informação bancária -</strong></h4>
                                                <p>Devoluções de Cheques sem fundos, Cheques sustado ou extraviado, confirmação do endereço a partir do
                                                    fornecimento do número do telefone, consultas anteriores realizadas para o CPF nos últimos 15 dias,
                                                    e os dados da Síntese Cadastral. <strong>Abrangência Nacional. (opção: 906)</strong></p>
                                                <h3 style="color: #22a3df">Produtos para Localização e Análise Cadastral: </h3>
                                                <h4><strong>SCPC/Relatório fone jurídico (obs: não traz débitos)</strong></h4>
                                                <p>Confirma os seguintes dados informando apenas: <strong>CNPJ</strong> (traz R. Social, Fantasia, endereço e até 5
                                                    telefones) , com <strong>CNPJ + Telefone</strong> (traz R. Social, Fantasia, endereço e até 5 telefones e endereço de
                                                    instalação do telefone) com <strong>CNPJ+Telefone+Cep</strong> (traz R. Social, Fantasia, endereço e até 5 telefones
                                                    e endereço de instalação do telefone e endereço do CEP). <strong>Abrangência Nacional (opção: 839)</strong>
                                                </p>
                                                <h4><strong>Acerto PJ (obs: não traz débitos)</strong></h4>
                                                <p> Traz um relatório de informações cadastrais sobre a empresa consultada, fornecendo dados como:
                                                    identificação, localização, composição societária e participação da empresa consultada em outras
                                                    empresas. <strong>Abrangência Nacional. (opção: 467) com links adicionais</strong>
                                                </p>
                                                <h3 style="color: #22a3df">Produto Classificação de Risco: </h3>
                                                <h4><strong>SCPC Score PJ (obs: não traz débitos)</strong></h4>
                                                <p>Com essa nova opção "SCPC Score Crédito PJ", você pode ter muito mais segurança nas suas operações de
                                                    concessão de crédito. A ferramenta mede a <strong>PROBABILIDADE</strong> de uma empresa se tornar inadimplente nos próximos
                                                    12 meses, cruzando informações sobre a empresa e seus sócios. O resultado deste cálculo classifica o grau
                                                    de risco de crédito em negociar com a empresa em <strong>ALTO, MÉDIO E BAIXO (opção: 320)</strong>
                                                </p>
                                                <h4><strong>Meios de Acesso</strong></h4>
                                                <p><strong>- INTERNET/SITE: scpc-limeira.spcn.com.br</strong>  (sem o www) ou www.acillimeira.com.br</p>
                                                <p><strong>- DÚVIDAS</strong> ligar: <strong>(19) 3404-4949</strong></p>
                                                <p><strong>- MÁQUINAS</strong> de Consultas: <strong>Pertochek</strong> (consulta e preenche) e <strong>Micro Terminal</strong> com leitor e sem leitor de CMC7.</p>
                                                <p><strong>- ATENDENTE- 0800.707 4024 ou 0800.777 4024</strong></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane3" id="dropdown3" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Certocar</strong></h2>
                                                <h3 style="color: #22a3df">Consulta de Veículo: </h3>
                                                <h4><strong>RENAVAM</strong></h4>
                                                <p>Descrevem as características do veículo (Ex: Marca/Modelo, Cor, Potência, Tração, etc...),
                                                    restrições (Ex: alienação, arrendamento, etc...) e Alerta de Roubo / Furto. (opção: 236)
                                                </p>
                                                <h4><strong>Débitos Estaduais</strong></h4>
                                                <p>Descrevem as características do veículo (Ex: Marca/Modelo, Cor, Potência, Tração, etc...), restrições
                                                    (Ex: alienação, arrendamento, etc...) e Alerta de Roubo / Furto e a existência de Débitos de Multas
                                                    e IPVA, sem expressão de valores. (opção: 242)
                                                </p>
                                                <h4><strong>Roubo e Furto</strong></h4>
                                                <p>Descrevem as características do veículo e detalha as informações de Roubo / Furto (Ex: data e
                                                    município da ocorrência, etc...). (opção: 237)
                                                </p>
                                                <h4><strong>DPVAT</strong></h4>
                                                <p>Relaciona a situação do veículo, referente ao pagamento do seguro obrigatório. (opção: 243)
                                                </p>
                                                <h4><strong>GRAVAME</strong></h4>
                                                <p>Relaciona a situação do veículo, referente a gravames (Ex: alienação fiduciária,
                                                    arrendamento mercantil-leasing, etc...). (opção: 238)</p>
                                                <p><strong>OBS: traz ocorrências com valores adicionais descritos no site.</strong>
                                                </p>
                                                <h4><strong>Sinistro</strong></h4>
                                                <p>Informa se para o veículo consultado já foi pago sinistro <strong>(apenas colisão)</strong>. (opção: 244)
                                                </p>
                                                <h4><strong>Decodificador de Chassi</strong></h4>
                                                <p>Permite a interpretação conforme padrão de fábrica da montadora. (opção: 239)
                                                </p>
                                                <h4><strong>RENAVAM/DPVAT/GRAVAME</strong></h4>
                                                <p>Descrevem as caracterÍsticas do veículo (Ex: Marca/Modelo, Cor, Potência, Tração, etc...), restrições
                                                    (Ex: alienação, arrendamento, etc...), Alerta de Roubo / Furto e a situação do veículo, referente ao
                                                    pagamento do seguro obrigatório. (opção: 245)</p>
                                                <p><strong>OBS: traz ocorrências com valores adicionais descritos no site.</strong>
                                                </p>
                                                <h4><strong>Precificador</strong></h4>
                                                <p>Informa o valor de mercado do veículo através da tabela FIPE. (opção: 240)
                                                </p>
                                                <h4><strong>Base de leilão</strong></h4>
                                                <p>Informa se o veículo possui histórico de leilão. (opção: 246)
                                                </p>
                                                <h4><strong>Chassi X Motor</strong></h4>
                                                <p>Identifica adulterações no veículo através no confronto no número do chassi e do motor do veículo. (opção: 241)
                                                </p>
                                                <h4><strong>CRLVS Adulteradas</strong></h4>
                                                <p>Informa se o documento do veículo é proveniente de um lote roubado/extraviado. (opção: 247)
                                                </p>
                                                <h4><strong>Meios de Acesso</strong></h4>
                                                <p>- INTERNET/SITE: http://scpc-limeira.spcn.com.br (sem o www) ou www.acillimeira.com.br (banner SCPC)</p>
                                                <p>- DÚVIDAS ligar: (19) 3404-4949</p>
                                                <p>- ATENDENTE- 0800.707 4024  ou 0800.777 4024</p>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane4" id="dropdown4" aria-labelledby="dropdown1-tab">
                                            <div class="container">
                                                <h2><strong>Radar Pessoal</strong></h2>
                                                <p><strong>Radar Pessoal</strong> é um serviço de monitoramento que permite que o consumidor acompanhe as informações vinculadas ao seu CPF.</p>
                                                <p>Ao aderir o serviço, o consumidor passará a receber informações via SMS (mensagens de celular) ou
                                                    e-mail, sempre que alguma informação for alterada ou quando alguma empresa consultar dados
                                                    referentes àquele número de documento.</p>
                                                <p>Entre essas informações, o cliente fica ciente sobre:</p>
                                                <p>- Ações Cíveis (incluindo falências);</p>
                                                <p>- Protestos;</p>
                                                <p>- Registros de débito;</p>
                                                <p>- Cheques sem fundos;</p>
                                                <p>- Informações de participação societária;</p>
                                                <p>- Empresas que consultaram seu CPF.</p>
                                                <p>Esse novo método de rastreio é excelente para quem teve os documentos extraviados e até mesmo para quem
                                                    deseja sanar a correria do dia a dia.O próprio consumidor pode acompanhar e monitorar seus documentos com
                                                    maior facilidade sem ter que se deslocar até a Associação para obter essas informações, acompanhando
                                                    apenas o e-mail ou celular.</p>
                                                <p>Pensando em proporcionar ainda mais facilidade aos consumidores, é possível escolher entre os
                                                    planos <strong>trimestral, semestral ou anual</strong>.</p>
                                                <p>Faça o <a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/Termo-de-Contrata%C3%A7%C3%A3o-Radar-Pessoal.pdf">download</a> do Termo de Contratação Radar Pessoal.</p>
                                                <p>Para mais informações e compra, ligue 3404-4929</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane5" id="dropdown5" aria-labelledby="dropdown2-tab">
                                            <div class="container">
                                                <h2><strong>SOS Cheques e Documentos</strong></h2>
                                                <p>O <strong>SOS Cheques & Documentos</strong> é um serviço de utilidade pública que auxilia o consumidor no momento do
                                                    roubo, furto, extravio e uso indevido dos seus cheques e/ou documentos. Dessa forma protege o
                                                    consumidor e o comerciante.</p>
                                                <p>- Utilizado para alertar o mercado sobre cheques e/ou documentos roubados, perdidos ou extraviados;</p>
                                                <p>- Ligação gratuita e atendimento 24 horas pelo telefone <strong>0800-011-1522</strong> e também o acesso pelo sitehttp://www.apoioaoconsumidor.com.br e clicar em SOS Cheques e Documentos;</p>
                                                <p>- Protege os consumidores inibindo ação de contraventores em âmbito nacional;</p>
                                                <p>- Este alerta é exibido nas consultas de crédito por 5 anos a contar da data do registro do alerta;</p>
                                                <p>- Quando o consumidor registrar o alerta pelo telefone, receberá uma carta confirmando o alerta.</p>
                                                <p><strong>Atenção:</strong> Esse alerta não isenta a necessidade de se fazer um Boletim de Ocorrência, ele apenas informa o ocorrido ao comércio.</p>
                                                <p>Além de proteger a si próprio, o consumidor estará ajudando a coibir a ação de criminosos e contraventores em utilizar seus documentos em golpes e fraudes, que causam prejuízo à vítima, ao comércio e a toda sociedade.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane6" id="dropdown6" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Recuperação de Crédito</strong></h2>
                                                <h4>CRC- Central de Recuperação de Crédito</h4>
                                                <p>Visando uma maneira de melhor assessorar nosso associado, no recebimento de dívidas atrasadas
                                                    de seus clientes, e com o objetivo de diminuir a inadimplência em Limeira, criamos um serviço
                                                    de recuperação de crédito, o <strong>CRC - CENTRAL DE RECUPERAÇÃO DE CRÉDITO</strong>.</p>
                                                <p>Com a adesão de sua empresa a esse novo serviço, a <strong>CRC-Central de Recuperação de Crédito</strong>, estará apta a
                                                    fazer o contato com o seu cliente em atraso e toda negociação necessária para o recebimento da dívida,
                                                    sendo assim, você não precisa mais perder tempo com esse trabalho, contrate nosso serviço e faremos a
                                                    cobrança para você.</p>
                                                <p>Logo abaixo poderá fazer o download do <strong>"Instrumento Particular de Prestação de Serviço"</strong>, o qual
                                                    caracteriza a contratação do serviço de cobrança; pedimos que seja analisado atentamente e,
                                                    se houver interesse, poderá preencher, carimbar, assinar e entregar em nosso atendimento na
                                                    ACIL.</p>
                                                <p>Para mais informações entre em contato conosco pelos telefones (19) 3404-4929 e 3404-4928.</p>
                                                <p>Faça o <a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/recucredito.pdf">download</a> do arquivo do contrato Recuperação de Crédito.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane7" id="dropdown7" aria-labelledby="dropdown1-tab">
                                            <div class="container">
                                                <h2><strong>Meios de Acesso às consultas</strong></h2>
                                                <p><strong>1º PASSO:</strong> Digitar o código e a senha;</p>
                                                <p><strong>2º PASSO:</strong> Clicar no menu SPCA (Sistema de Proteção ao Crédito Automatizado);</p>
                                                <p><strong>3º PASSO:</strong> Aparecerá uma tela de opções para: <strong>“Consultas”, “Manutenções”, “Relatórios” e “Diversos”</strong>, é só escolher a opção desejada</p>
                                                <p>Opção <strong>“Consultas”</strong>: abrirá todas as consultas do Menu, escolha a desejada;</p>
                                                <p>Opção <strong>“Manutenções”</strong>: abrirá todos os acessos (inclusões e exclusões de registros), essa opção é
                                                    liberada após preenchimento de  documento de autorização;</p>
                                                <p>Opção <strong>“Relatórios”</strong>: você terá acesso à visualização de consultas e manutenções, isto é, terá  a opção de conferir tudo que for efetuado por sua empresa no sistema;</p>
                                                <p>E no menu <strong>“Diversos”</strong>: estão disponibilizados os links da <strong>Receita Federal, Informações Úteis (Dicas do SCPC) e Faturas</strong>.  </p>
                                                <p><strong>MÁQUINA DE CONSULTAS:</strong> Pertocheks e Micro- Terminais</p>
                                                <p><strong>ATENDENTE: (0800-707 4024)  ou  (0800-777 4024)</strong></p>
                                                <p><strong>IMPORTANTE:</strong></p>
                                                <p>- Anote sempre o <strong>nº de resposta da consulta</strong>, com ele (nº resposta) você pode imprimir a consulta a qualquer momento;</p>
                                                <p>- Consultas impressas não devem ser fornecidas ao consumidor, pois constam dados restritos a sua empresa, se o consumidor solicitar a consulta impressa direcione-o ao nosso balcão de atendimento.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane8" id="dropdown8" aria-labelledby="dropdown2-tab">
                                            <div class="container">
                                                <h2><strong>Consultas Anteriores</strong></h2>
                                                <h3 style="color: #22a3df">Orientação para Excluir Consultas Anteriores</h3>
                                                <p><strong>Consultas Anteriores</strong> (passagens): Toda vez que o associado acessar o banco de dados para
                                                    consultar um consumidor, essa consulta ficará gravada por 90 dias e sairá automaticamente
                                                    após esse prazo. <strong>Essa observação serve como fator para análise de crédito, devendo ser
                                                        cautelosamente analisada.</strong></p>
                                                <p><strong>Quando um consumidor entrar em contato com sua empresa solicitando a exclusão da passagem efetuada
                                                        no nome dele, orientamos que:</strong></p>
                                                <p>A empresa poderá autorizar a exclusão dessa passagem de consulta mediante preenchimento de uma
                                                    solicitação, (que seque abaixo), onde declara que realmente não houve nenhuma negociação com
                                                    sua empresa. A documentação deverá ser carimbada, assinada e encaminhada ao balcão de
                                                    atendimento ao consumidor do SCPC.</p>
                                                <p>Para mais esclarecimento entre em contato pelo telefone (19) 3404-4949.
                                                </p>
                                                <p><strong>FAÇA O <a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/termoconsumidor.pdf">DOWNLOAD</a> EM PDF DO ARQUIVO DO TERMO DO CONSUMIDOR CANCELAMENTO DE PASSAGENS</strong></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane9" id="dropdown9" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Modelos de Documentos</strong></h2>
                                                <h3>Faça o download do arquivo que necessite logo abaixo:</h3>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/modelo_carta_cobranca.pdf">Modelo de Carta de Cobrança</a></p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/modelo_nota_promissoria.pdf">Modelo de Preenchimento de Nota Promissória</a></p>
                                                <h3>Imprima abaixo os documentos necessários para efetuar a Manutenção Online:</h3>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/Regulamento_do_SCPC_E_Debito.pdf">Regulamento SCPC-E</a></p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/termo_adesao_compromisso.pdf">olicitação Credenciamento - Manutenção Online</a></p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/regimento_interno.pdf">Regimento Interno</a></p>
                                                <h3>Imprima o manual com orientações para inclusões e exclusões online:</h3>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/manual.pdf">Manual de manutenção online</a></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane10" id="dropdown10" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Manutenção - Registro Débito</strong></h2>
                                                <p><strong>Orientações para registrar débitos em atraso no banco de dados do SCPC</strong></p>
                                                <p>Primeiramente verificar se a documentação que comprova a dívida está OK
                                                    e devidamente assinada.</p>
                                                <p>EX: Para efeito de registro no SCPC, considera-se inadimplemento, o atraso no pagamento decorrente de operações mercantis, financeiras ou à prestação de serviço, legalmente comprováveis, através de instrumentos próprios, tais como: contratos, títulos de crédito, duplicatas, cheques.</p>
                                                <p><strong>MODOS DE UTILIZAÇÃO PARA REGISTRO:</strong></p>
                                                <p><strong>MANUAL:</strong> O associado preenche um formulário com todos os dados do inadimplente (retirado e entregue) no balcão de atendimento do SCPC;</p>
                                                <p><strong>ONLINE:</strong> Este método é prático e rápido, consiste em fazer as inclusões e exclusões dos registros de inadimplência pela internet, porém é necessário preencher algumas documentações para habilitação desse meio de acesso.</p>
                                                <p>Segue abaixo o download dos documentos para Manutenção Online:</p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/regimento_interno.pdf">Regimento Interno</a></p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/Regulamento_do_SCPC_E_Debito.pdf">Regulamento do SCPC E</a></p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/Solicitacao_Credenciamento_Manutencao_Online_Debito.pdf">Solicitação Credenciamento - Manutenção Online</a></p>
                                                <p>Imprima aqui o manual com orientações para inclusões e exclusões online:</p>
                                                <p><a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/Manual_de_manutencao_online_Debito.pdf">Manual de manutenção online</a></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane11" id="dropdown11" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Como Evitar Recebimento de Cheques Falsos</strong></h2>
                                                <p>Elaboramos a partir de informações da Febraban (Federação Brasileira de Bancos) e dos associados que procuram a entidade quando recebem documentos falsificados, uma relação de dicas e instruções para identificar características de cheques adulterados, evitando o recebimento dos mesmos e demais transtornos</p>
                                                <p>Os procedimentos abaixo tem por objetivo proteger pessoas honestas, evitando a circulação de cheques roubados e falsificados.</p>
                                                <p><strong>É necessário conferir:</strong></p>
                                                <p>- se o cheque foi corretamente preenchido. Não aceite cheques rasurados. Eles podem ser devolvidos pelos bancos.</p>
                                                <p>- os números do RG e do CPF e a assinatura que estão no cheque com os que constam em outros documentos e no cartão do banco.</p>
                                                <p>- se a foto no documento é do emitente ou se tem sinal de adulteração.</p>
                                                <p>- os dados que estão na parte superior e na inferior do cheque (rodapé) em barras CMC7 - código do Banco e da Agência no primeiro campo; código da compensação (Comp) e número do cheque no segundo campo; e número da conta no terceiro campo. Lembre-se apenas que o último número no primeiro e no terceiro campos correspondem aos dígitos verificadores e no segundo campo se refere ao tipo de cheque. </p>
                                                <p>- pequenos detalhes impressos nas folhas de cheque, que dificilmente podem ser reproduzidos com fidelidade pelas copiadoras.</p>
                                                <p>- central de proteção ao crédito – SCPC, o qual  possuem informações sobre emitentes de cheques sem fundos cadastrados no Banco Central (CCF), de cheques sustados e cancelados por roubo ou outras irregularidades, a exemplo de CPFs que tenham sido cancelados pela Receita Federal.</p>
                                                <p>Tenha muito cuidado ao receber cheques previamente preenchidos e assinados. Em caso de desconfiança, solicite ao emitente que assine também no verso do cheque e compare as assinaturas.</p>
                                                <p>Anote no verso do cheque os números de telefone e do RG do emitente. Se necessário, ligue no ato para confirmar a validade do telefone informado. Persistindo a dúvida, condicione a venda à prévia compensação do cheque.</p>
                                                <p>Se o cheque estiver amarelado, envelhecido ou desgastado, desconfie, pois pode ser de conta inativa ou encerrada.</p>
                                                <p>Tome essas precauções mesmo com cheques de pequeno valor. Redobre a cautela no caso de cheques pré-datados. Lembre-se que cheque pré-datado é concessão de crédito,﻿ exigindo, portanto maiores informações sobre o emitente.</p>
                                                <p>Cuidado com fraudes. Há falsificações em que partes adulteradas são coladas no cheque - valor por extenso e em algarismos e os números e códigos da parte superior e inferior. Essa forma de falsificação pode ser percebida com uma verificação mais atenta, de preferência contra a luz, pelo tato ou dobrando a folha de cheque de forma arredondada (Ç), para não amassá-lo. Com o cheque dobrado dessa forma, movimente as laterais para cima e para baixo. Nesse movimento, a parte colada geralmente descola, revelando a falsificação.</p>
                                                <p>A colagem também pode ser percebida pela interrupção ou descontinuidade da linha vertical de segurança, na forma de \"serpentina\", com o nome do banco impresso em letras pequenas nas folhas de cheques, em posições que se alteram a cada folha. Essa \"serpentina\" é uma das características de segurança impressa nos cheques exatamente para evitar falsificações. As demais são o código magnético impresso em barras na parte inferior, a qualidade do papel e as características de impressão na frente e no verso. </p>
                                                <p><strong>Veja abaixo modelo de cheque e outras orientações para sua segurança:</strong></p>
                                                <p>1. Tempo de relacionamento com o banco</p>
                                                <p>2. Mesmo tipo de letras e números</p>
                                                <p>3. Conferir ‘alinhamento’</p>
                                                <p>4. Conferir o número do cheque no alto da folha com o CMC-7 (rodapé)</p>
                                                <p>5. Mexer o cheque para detectar ‘brilho’ nas letras</p>
                                                <p>6. O cheque deve ser personalizado e estar sem rasuras e sem rugas</p>
                                                <p>7. Atenção para cheques amarelados, já assinados e/ou preenchidos</p>
                                                <p>8. Verifique se o cliente: anota o valor da compra no canhoto; apresenta documentos ‘isolados’</p>
                                                <p>9. Pré-datado: redobre os cuidados</p>
                                                <p><strong>ÁREAS DE RISCO:</strong></p>
                                                <p>- Número do cheque</p>
                                                <p>- Identificação do Correntista</p>
                                                <p>* Consulte o ‘Serviço Central de Proteção ao Crédito – SCPC’ no ato da venda. Não deixe para depois.</p>
                                                <p><strong>É SEU DIREITO:</strong></p>
                                                <p>- exigir o documento de identidade, de preferência original.</p>
                                                <p>- conferir foto e assinatura</p>
                                                <p>- solicite também o <strong>cartão do banco</strong> para conferir o número da conta corrente e a assinatura do correntist</p>
                                                <p>Data de expedição - data de nascimento = idade da pessoa na foto</p>
                                                <p>Data atual - data de nascimento = idade da pessoa na foto</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane12" id="dropdown12" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Registro de Cheques Falsos</strong></h2>
                                                <p>O cheque sem fundos, desde que tenha sido reapresentado ao banco sacado e devolvido (motivo 12), ou a respectiva conta já esteja encerrada (motivo 13), ou haja prática espúria (motivo 14), permitirá, de imediato, o registro de débito.</p>
                                                <p><strong>Não pode ser incluído:</strong> Registro de cheques devolvidos pelas alíneas:</p>
                                                <p>20 - folha de cheque cancelada por solicitação do correntista;</p>
                                                <p>21 - contra ordem (ou revogação) ou oposição (ou sustação) ao pagamento pelo emitente ou portador;</p>
                                                <p>25 - cancelamento do talonário pelo banco sacado;</p>
                                                <p>28 - contra ordem (ou revogação) ou oposição (ou sustação) ao pagamento ocasionado por furto ou roubo,</p>
                                                <p>29 - cheque bloqueado por falta de confirmação do recebimento do talonário pelo correntista.</p>
                                                <p><strong>O registro de cheques conterá, obrigatoriamente, os seguintes dados:</strong></p>
                                                <p>a) nome completo ou denominação social do emitente;</p>
                                                <p>b) número do CPF - Cadastro de Pessoa Física ou o CNPJ - Cadastro Nacional de Pessoa Jurídica;</p>
                                                <p>c) endereço completo do emitente;</p>
                                                <p>d) número do banco; número da agência; número da conta; número do cheque e dígito verificador (C3);</p>
                                                <p>e) valor do cheque; data de emissão do cheque; motivo da devolução; </p>
                                                <p>f) nome e código do Associado que promoveu o registro;</p>
                                                <p>No caso de pessoa física, o registro de que trata este artigo, conterá sempre que possível, a filiação e o número da Cédula de Identidade (RG) do devedor. Quando incluído o RG, este será obrigatoriamente acompanhado da sigla do Estado emissor (UF).</p>
                                                <p>Os cheques provenientes de conta conjunta serão registrados apenas em nome e CPF do emitente do cheque <strong>(aquele quem assinou)</strong>.</p>
                                                <p>Em caso de cheques com Nominal este deverá estar endossado atrás do cheque.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpane13" id="dropdown13" aria-labelledby="dropdown3-tab">
                                            <div class="container">
                                                <h2><strong>Alíneas de Cheques</strong></h2>
                                                <p>As alíneas de cheque que podem registrar no SCPC, são pelos motivos de devolução: 12, 13 e 49 (cheque devolvido sem fundos).</p>
                                                <p>Faça o <a href="http://atualiza.acil.org.br/ADMarquivo/arquivos/arquivo/alineas_cheques.pdf">download</a> do arquivo em PDF das alíneas de Cheques.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> 

                        </div>
                    </div>
                </div>
            </section>

            <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="modal fade" id="modalSCPC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Entrar no SCPC</h1><br>
                    <form>
                        <input type="text" name="cod" placeholder="Código de associado">
                        <input type="password" name="pass" placeholder="Senha">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
        <!--/wrap-->

        <?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>

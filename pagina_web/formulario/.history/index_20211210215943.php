
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../mac0499.css" runat="server" type="text/css">

    <!--Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link rel="stylesheet" href="mapas.css" runat="server" type="text/css">
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


    <title>Avaliação de Ciclabilidade de Rotas</title>
</head>


<body>
<?php
 echo '<input type="hidden" id="input_origem" value="' . $_GET['origem'] . '"/>';
?>

    <div class="main">
        <br />
        <header class="row content">
            <div class="col-12">
                <a href="https://interscity.org/" target="_blank_inter">
                    <img src="../images/logo_interscity.svg" class="float-left" style="height: 50px; max-width: 45%;">
                </a>
                <a href="https://www.ime.usp.br/" target="_blank_ime">
                    <img src="../images/logo_ime.png" class="float-right" style="height: 50px; max-width: 50%;"></a>
            </div>
        </header>
        <div class="main">
            <main role="main" class="content">
                <br />
                <h2 class="subtitle text-center">Potencial Ciclável</h2>
                <h3 class="subtitle text-center">Avaliação de Ciclabilidade de Rotas</h3>
                <br />
                <hr />
                <div class="paginas">
                    <div class="pagina" id="pagina_1">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="subtitle"><b>Sobre</b></h3>
                                <p>Esta pesquisa tem como objetivo auxiliar o planejamento de políticas cicloviárias
                                    através da avaliação da <i>ciclabilidade</i> de algumas rotas na cidade de São
                                    Paulo.</p>

                                <p>Neste questionário você avaliará <b>5 rotas na região</b> de sua preferência.
                                Você deverá avaliar a sua propensão a percorrer a rota com bicicleta baseado nas características físicas da rota (distância, topografia).
                                 É possível avaliar
                                    somente uma região por vez, mas se desejar avaliar também outras regiões, entre
                                    novamente no link.</p>

                                <p>As respostas servirão para calibrar o modelo de avaliação de rotas para determinar
                                    quais
                                    locais têm maior potencial de migração para a bicicleta. Com isso, o modelo visa
                                    informar o poder público sobre onde os investimentos em construção de ciclovias ou
                                    ciclofaixas teriam mais impacto para a mobilidade da cidade e ajudar na
                                    transformação de
                                    São Paulo em uma cidade cada vez melhor para a bicicleta.</p>

                                <p>Os dados fornecidos neste questionário serão usados para fins de pesquisa de forma
                                    anônima, mantendo a sua privacidade e confidencialidade. Ao responder este
                                    questionário,
                                    você concorda com o uso anônimo das informações fornecidas para fins de pesquisa
                                    acadêmica.</p>

                                <p>Se estiver acessando pelo celular, utilize a orientação paisagem (posição horizontal)
                                    para uma melhor experiência.</p>
                            </div>
                        </div>
                        <hr />
                        <form class="form" id="formulario_dados_pessoais">
                            <div class="row">
                                <div class="col">
                                    <span style="font-size: large;" class="subtitle"><b>Dados Pessoais</b>
                                    </span>
                                    <br />
                                </div>
                            </div>
                            <br />
                            <div class="mb-3 row">
                                <div class="col-sm-2">
                                    <label class="col-form-label" for="#txt_idade"><b>Idade</b></label>
                                </div>
                                <div class="col-sm-10"><input class="form-control" id="txt_idade" type="number"
                                        required> </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-2">
                                    <label class="col-form-label" for="#select_genero"><b>Gênero</b></label>
                                </div>
                                <div class="col-sm-10">
                                    <select class="form-select" id="select_genero" required>
                                        <option selected disabled value="">Selecione</option>
                                        <option value="F">Feminino</option>
                                        <option value="M">Masculino</option>
                                        <option value="O">Outro</option>
                                        <option value="N">Prefiro não dizer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="col-form-label" for="#select_frequencia"><b>Com que frequência você
                                            usa bicicleta? </b> &nbsp; (Considere antes da pandemia)</label>
                                </div>
                                <div class="col-sm-12">
                                    <select class="form-select" id="select_frequencia" required>
                                        <option selected disabled value="">Selecione</option>
                                        <option value="Diariamente">Diariamente</option>
                                        <option value="Frequentemente">Frequentemente (pelo menos uma vez por semana)
                                        </option>
                                        <option value="Eventualmente">Eventualmente (cerca de uma vez por mês)</option>
                                        <option value="Raramente">Raramente</option>
                                        <option value="Nunca">Nunca</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="col-form-label" for="#select_tempo"><b>Há quanto tempo você usa a
                                            bicicleta como meio de transporte em São Paulo?</b> &nbsp; (Considere antes da
                                        pandemia)</label>
                                </div>
                                <div class="col-sm-12">
                                    <select class="form-control form-select" name="genero" id="select_tempo" required>
                                        <option selected disabled value="">Selecione</option>
                                        <option value="N">Não uso bicicleta como meio de transporte</option>
                                        <option value="0">Menos de 1 ano</option>
                                        <option value="1">Entre 1 e 2 anos</option>
                                        <option value="3">Entre 3 e 4 anos</option>
                                        <option value="5">5 anos ou mais</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="col-form-label" for="#select_motivo"><b>Quais são os principais
                                            motivos das suas viagens de bicicleta?</b>
                                        &nbsp; (Selecione um ou mais)</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="checkbox" id="cb_estudo" name="motivo" value="Estudo">
                                        <label for="cb_estudo">Chegar à escola ou faculdade</label> <br />
                                        <input type="checkbox" id="cb_trabalho" name="motivo" value="Trabalho">
                                        <label for="cb_trabalho">Chegar ao trabalho</label> <br />
                                        <input type="checkbox" id="cb_ferramenta" name="motivo" value="Ferramenta">
                                        <label for="cb_ferramenta">Ferramenta de trabalho</label> <br />
                                        <input type="checkbox" id="cb_lazer" name="motivo" value="Lazer">
                                        <label for="cb_lazer">Lazer</label> <br />
                                        <input type="checkbox" id="cb_outros" name="motivo" value="Outros">
                                        <label for="cb_outros">Outros</label> <br />
                                    </div>
                                </div><br />
                                <div id="validacao_motivo" class="invalid-feedback" style="font-size: medium;">
                                    Selecione pelo menos um motivo</div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="col-form-label" for="#txt_idade"><b>Deixe seu e-mail caso deseje
                                            receber informação sobre os avanços da pesquisa.</b>
                                        <br>(Essa informação não será divulgada)</label>
                                </div>
                                <div class="col-sm-12"><input class="form-control" id="txt_email" type="text"
                                        placeholder="Preenchimento opcional"> </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-12"><b>Você deseja avaliar rotas de qual região?</b>
                                    <br>(Serão avaliadas 5 rotas da região selecionada)
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-6">
                                    <br /> <input type="radio" id="cb_N1" name="regiao" value="norte1">
                                    <label for="cb_N1">Norte 1</label>
                                    &nbsp;
                                    <span class="more_info" help="Casa Verde, Brasilândia, Perus e Pirituba">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span>
                                    <br />
                                    <input type="radio" id="cb_N2" name="regiao" value="norte2">
                                    <label for="cb_N2">Norte 2</label>
                                    &nbsp;
                                    <span class="more_info" help="Jaçanã, Santana e Vila Maria">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <input type="radio" id="cb_O" name="regiao" value="oeste">
                                    <label for="cb_O">Oeste</label>
                                    &nbsp;
                                    <span class="more_info" help="Lapa, Butantã, Pinheiros">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <input type="radio" id="cb_C" name="regiao" value="centro">
                                    <label for="cb_C">Centro</label>
                                    &nbsp;
                                    <span class="more_info" help="Sé">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <input type="radio" id="cb_L1" name="regiao" value="leste1">
                                    <label for="cb_L1">Leste 1</label>
                                    &nbsp;
                                    <span class="more_info" help="Aricanduva, Mooca, Penha, Sapopemba e Vila Prudente">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <input type="radio" id="cb_L2" name="regiao" value="leste2">
                                    <label for="cb_L2">Leste 2</label>
                                    &nbsp;
                                    <span class="more_info"
                                        help="Cidade Tiradentes, Ermelindo Matarazzo, Guaianases, Itaim Paulista, Itaquera, São Mateus e São Miguel">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <input type="radio" id="cb_S1" name="regiao" value="sul1">
                                    <label for="cb_S1">Sul 1</label>
                                    &nbsp;
                                    <span class="more_info" help="Vila Mariana, Ipiranga, Jabaquara">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <input type="radio" id="cb_S2" name="regiao" value="sul2">
                                    <label for="cb_S2">Sul 2</label>
                                    &nbsp;
                                    <span class="more_info"
                                        help="Campo Limpo, Capela do Socorro, Cidade Ademar,  M'Boi Mirim, Parelheiros, Santo Amaro">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                        </svg>
                                    </span><br />
                                    <div id="validacao_regiao_0" class="invalid-feedback" style="font-size: medium;">
                                        Selecione pelo menos uma região</div>
                                </div>
                                <div class="col-6">
                                    <img src="../images/sp_regioes_v2.png" style="height: 20em;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pagina" id="pagina_2">
                        <p>
                            Por favor, clique nas rotas para ver mais informações e avalie respondendo as perguntas
                            abaixo do mapa.
                            <br />
                            <b>Rotas avaliadas: <span id="avaliadas"></span>
                            </b>
                        </p>
                        <br />
                        <div class="row">
                            <div class="col-12" style="padding: 0 0 0 0">
                                <div id="mapa"></div>
                                <div id="topografia">
                                    <span id="topografia_text" style="display: none; padding: 5px; cursor: pointer;"
                                        onclick="show_topography()">
                                        <b>Mostrar Perfil Topográfico</b></span>
                                    <img id="topografia_fig" title="Perfil Topográfico" onclick='zoom_topography()'>
                                    <span onclick="hide_topography()" id="topografia_x">X</span>

                                </div>
                                <div id="distancias" style="background-color: transparent;">
                                    <table class="table table-sm table-bordered"
                                        style="width: auto; margin-bottom: 0; background-color: white;">
                                        <tbody>
                                            <tr style="border: solid black 2px;">
                                                <td><b>Distância total</b></td>
                                                <td style="text-align: right;" id="dist_total"></td>
                                            </tr>
                                            <tr style="border: #94c280 2px solid;">
                                                <td>Plano ou descidas &nbsp;&nbsp; </td>
                                                <td style="text-align: right;" id="dist_0"></td>
                                            </tr>
                                            <tr
                                                style="border: 2px #D03F2E solid; border-bottom-width: 0px;">
                                                <td>Subidas </td>
                                                <td style="text-align: right;" id="dist_subidas"></td>
                                            </tr>
                                            <tr
                                                style=" border-top: 2px dotted #F1C359; border-left: 2px solid #D03F2E; border-right: 2px solid #D03F2E; line-height: 1.2; ">
                                                <td style="padding-left: 5%;">- Até 3% </td>
                                                <td style="text-align: right;" id="dist_3"></td>
                                            </tr>
                                            <tr
                                                style=" border: 2px solid #D03F2E;line-height: 1.2; border-top-style: dotted; border-bottom-width: 0px;">
                                                <td style="padding-left: 5%;">- Entre 3% e 5% </td>
                                                <td style="text-align: right; line-height: 1.2; " id="dist_5"></td>
                                            </tr>
                                            <tr
                                                style="border-top: 2px dotted #982123; border-left: 2px solid #D03F2E; border-right: 2px solid #D03F2E; line-height: 1.2; ">
                                                <td style="padding-left: 5%;">- Entre 5% e 7% </td>
                                                <td style="text-align: right;" id="dist_7"></td>
                                            </tr>
                                            <tr
                                                style="border: 2px solid #D03F2E; border-top: 2px dotted black; line-height: 1.2; ">
                                                <td style="padding-left: 5%;">- Maior que 7% </td>
                                                <td style="text-align: right;" id="dist_8"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="satelite">
                                    <input type="checkbox" id="check_satelite">&nbsp;&nbsp; <label
                                        for="check_satelite">Visão
                                        Satélite</label>
                                </div>
                                <div id="legend">
                                    <span>Inclinações
                                        <span id="help_inclinacao" style="cursor: pointer;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                            </svg>
                                        </span><br /></span>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:#025189;" />
                                    </svg>&nbsp;&lt; -5%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:#0C9CB4;" />
                                    </svg>&nbsp;-5% a -3%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:#94C280;" />
                                    </svg>&nbsp;-3% a -1%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:yellow;" />
                                    </svg>&nbsp;-1% a 1%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:#F1C359;" />
                                    </svg>&nbsp; 1% a 3%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:#D03F2E;" />
                                    </svg>&nbsp; 3% a 5%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:#982123;" />
                                    </svg>&nbsp; 5% a 7%<br>
                                    <svg width="10px" height="10px">
                                        <rect width="100%" height="100%" style="fill:black;" />
                                    </svg>&nbsp;> 7%<br>
                                </div>
                                <div id="legend_inclinacao">
                                    <img id="legend_img" src="../images/legenda.png" style="width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div id="avaliacao">
                            <b>Avalie a facilidade de percorrer esta rota de bicicleta caso houvesse infraestrutura cicloviária adequada.</b> <br /><br />
                            <p>Como você avalia a <b>distância</b> dessa rota?
                            </p>
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        <ul class='likert'>
                                            <li>
                                                <input id="dist_1" type="radio" name="dist" value="1">
                                                <label style="color: rgb(185, 0, 0);" for="#dist_1">1<br>ruim</label>
                                            </li>
                                            <li>
                                                <input id="dist_2" type="radio" name="dist" value="2">
                                                <label style="color: rgb(163, 60, 0);" for="#dist_2">2</label>
                                            </li>
                                            <li>
                                                <input id="dist_3" type="radio" name="dist" value="3">
                                                <label style="color: rgb(106, 114, 0);" for="#dist_3">3</label>
                                            </li>
                                            <li>
                                                <input id="dist_4" type="radio" name="dist" value="4">
                                                <label style="color: rgb(77, 136, 0);" for="#dist_4">4</label>
                                            </li>
                                            <li>
                                                <input id="dist_5" type="radio" name="dist" value="5">
                                                <label style="color: rgb(0, 129, 39);" for="#dist_5">5<br>boa</label>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <p>Como você avalia a <b>inclinação</b> dessa rota?
                            </p>
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        <ul class='likert'>
                                            <li>
                                                <input id="incl_1" type="radio" name="incl" value="1">
                                                <label style="color: rgb(185, 0, 0);" for="#incl_1">1<br>ruim</label>
                                            </li>
                                            <li>
                                                <input id="incl_2" type="radio" name="incl" value="2">
                                                <label style="color: rgb(163, 60, 0);" for="#incl_2">2</label>
                                            </li>
                                            <li>
                                                <input id="incl_3" type="radio" name="incl" value="3">
                                                <label style="color: rgb(106, 114, 0);" for="#incl_3">3</label>
                                            </li>
                                            <li>
                                                <input id="incl_4" type="radio" name="incl" value="4">
                                                <label style="color: rgb(77, 136, 0);" for="#incl_4">4</label>
                                            </li>
                                            <li>
                                                <input id="incl_5" type="radio" name="incl" value="5">
                                                <label style="color: rgb(0, 129, 39);" for="#incl_5">5<br>boa</label>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        <p>Se você precisasse fazer esse trajeto e ele tivesse ciclovia ou ciclofaixa,
                                            qual a chance de fazê-lo com bicicleta?</p>
                                        <ul class='likert'>
                                            <li>
                                                <input type="radio" name="final_eval" value="1">
                                                <label style="color: rgb(185, 0, 0);">1<br>muito baixa</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="final_eval" value="2">
                                                <label style="color: rgb(163, 60, 0);">2</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="final_eval" value="3">
                                                <label style="color: rgb(106, 114, 0);">3</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="final_eval" value="4">
                                                <label style="color: rgb(77, 136, 0);">4</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="final_eval" value="5">
                                                <label style="color: rgb(0, 129, 39);">5<br>muito alta</label>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="comentarios">Se desejar, utilize o campo abaixo para justificar as
                                            respostas.</label>
                                        <textarea class="form-control" placeholder="preenchimento opcional"
                                            id="comentarios" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="valida_avaliacao" class="invalid-feedback" style="font-size: medium;">
                                Por favor, preencha as três avaliações</div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="botoes">
                    <button class="btn btn-danger float-right" id="btn_avaliar" onclick="save_evaluation()">salvar
                        avaliação da rota</button>
                    <button class="btn btn-danger float-left" id="btn_voltar" onclick="change_page(-1)">voltar</button>
                    <button class="btn btn-danger float-right" id="btn_avancar" onclick="change_page()">avançar</button>
                </div>
            </main>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="rotas/centro.js"></script>
    <script src="rotas/leste1.js"></script>
    <script src="rotas/leste2.js"></script>
    <script src="rotas/norte1.js"></script>
    <script src="rotas/norte2.js"></script>
    <script src="rotas/oeste.js"></script>
    <script src="rotas/sul1.js"></script>
    <script src="rotas/sul2.js"></script>
    <script src="rotas/sp_limits.js"></script>
    <script src="mapa.js"></script>
    <script src="formulario.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    </div>
</body>

</html>
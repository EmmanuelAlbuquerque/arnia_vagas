<?php
include('classVaga.php');
$tecnologias = ['React', 'PHP', 'Java', 'Python', '.Next', 'CSS', 'HTML', 'Ruby', 'GO', 'MySQL', 'MariaDB'];
$tVagas = ['Remota', 'Presencial', 'Hibrida'];
$rTrabalho = ['CLT', 'PJ'];
$tamanho = ['Pequena', 'Media', 'Grande'];
$nExperiencia = ['Junior', 'Pleno', 'Sênior'];

$vagas = array();
for ($i = 0; $i < 4; $i++) {
    $vagas[] = new VAGAS("Desenvolvedor de Sistemas Pleno", "Empresa: iZap Softworks", "InfoJobs 04 ago", "PHP", "Phyton", "React", "Faixa salarial: R$ 4.000,00", "Localização: Belo Horizonte", "Tipo de vaga: Home office", "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...");
}
$nomeEscrito = isset($_REQUEST['linguagem']) ? $_REQUEST['linguagem'] : '';

$itensinicio = 8;
$display = $itensinicio;

function mostraMais()
{
    global $display;
    global $itensinicio;
    $display +=  $itensinicio;
}
$displayTecnologias = array_slice($tecnologias, 0, $display);
$displayTecnologiaslast = array_slice($tecnologias, $display, sizeof($displayTecnologias) - 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Arnia Vagas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="corHeader">
            <div class="container ">
                <div class="row d-flex justify-content-between header">
                    <!-- LOGO E BOTÃO -->
                    <img class=" col-6" src="./src/img/Logotipo.png" alt="logo">
                    <div class="col-3 ">
                        <button class="btn botaoGet botao">
                            <?php if (isset($_GET['nome'])) {
                                $nome = $_GET['nome'];
                                echo "Bem-vindo $nome!";
                            } else {
                                echo "Faça Login";
                            } ?>
                        </button>
                    </div>
                    <hr class=" border-3 mt-2 corLinha ">
                </div>

                <!-- FORMULARIO DE PESQUISA -->

                <form method="post">
                    <div class="row d-flex justify-content-between">
                        <div class="col-sm-4">
                            <label>O quê você procura?</label>
                            <i class="ri-search-2-line iconPesquisa"></i>
                            <input class=" form-control mb-3 tamanhoInput distancia" type="text" name="linguagem" id="" placeholder="Linguagem">

                            <?php if (isset($_POST['linguagem'])) : ?>
                                <span class=" btn mb-4 resultadoInput resultado border-white "><?php echo $_POST['linguagem'] ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-4">
                            <label>Onde?</label>
                            <i class="ri-map-pin-line iconLocaliza"></i>
                            <input class="form-control tamanhoInput distancia" type="text" name="localizacao" id="" placeholder="Localização">
                        </div>
                        <!-- mt-4 w-25 h-25 -->
                        <button onclick="checked()" class=" btn botao mt-4 botaoBusca ">Buscar Vagas</button>

                    </div>

                </form>
            </div>
        </div>
    </header>
    <section>
        <div class="container d-flex mt-5 ">
            <div class="col-3  ">
                <div>
                    <span class="textVagas">Vagas em React</span>
                    <p class="subText">225 vagas encontradas</p>
                </div>
                <div class="rounded-4 border colfiltro ">
                    <div class="m-4 ">
                        <div class="d-flex">
                            <span class="titulo">Filtre sua busca</span>
                            <button class="btnLimpar">Limpar</button>
                        </div>
                        <div id="arrayItens">
                            <h6 class="titulosCheckbox">Tecnologias</h6>
                            <?php foreach ($displayTecnologias as $tecnologia) {
                                echo "<input class='textCheckbox' type='checkbox' name='$nomeEscrito' " . (($nomeEscrito == $tecnologia) ? 'checked' : '') . "> $tecnologia <br>";
                            }
                            ?>

                            <div class="accordion">
                                <button class="btnVerMais">Ver mais...</button>
                                <div class="accordion-content">
                                    <?php foreach ($displayTecnologiaslast as $tecnologia) {
                                        echo "<input class='textCheckbox' type='checkbox' name='$nomeEscrito' " . (($nomeEscrito == $tecnologia) ? 'checked' : '') . "> $tecnologia <br>";
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                        <h6 class="titulosCheckbox">Tipo de vaga</h6>
                        <?php foreach ($tVagas as $vagaTipo) {
                            echo "<input class='textCheckbox' type='checkbox' name='$vagaTipo'> $vagaTipo <br>";
                        }
                        ?>
                        <h6 class="titulosCheckbox">Regime de trabalho</h6>
                        <?php foreach ($rTrabalho as $trabalho) {
                            echo "<input class='textCheckbox' type='checkbox' name='$trabalho'> $trabalho <br>";
                        }
                        ?>
                        <h6 class="titulosCheckbox">Tamanho da empresa</h6>
                        <?php foreach ($tamanho as $tamanho) {
                            echo "<input class='textCheckbox' type='checkbox' name='$tamanho'> $tamanho <br>";
                        }
                        ?>
                        <h6 class="titulosCheckbox">Nível de experiência</h6>
                        <?php foreach ($nExperiencia as $experiencia) {
                            echo "<input class='textCheckbox' type='checkbox' name='$experiencia'> $experiencia <br>";
                        }
                        ?>
                    </div>
                    <div>
                        <button class="btn m-3 botao botaoFiltra">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row">
                    <?php $i = 1;
                    foreach ($vagas as $vagaItem) { ?>
                        <section>
                            <div class="col-sm-4 d-flex col-12 mb-4 infoCard">
                                <div class="informacao border ">
                                    <div class="d-flex justify-content-between">
                                        <div class="card-title titutoCard"><?php echo $vagaItem->titulo; ?></div>
                                        <div class="dataCard"><?php echo $vagaItem->data; ?></div>
                                    </div>
                                    <div class="subTituloCard"><?php echo $vagaItem->subTitulo; ?></div>
                                    <div class="card-body">
                                        <div class=" d-flex align-items-center  ">
                                            <div class=" m-2 linguagemCard"><span><?php echo  $vagaItem->linguaguem1; ?></span></div>
                                            <div class=" m-2 linguagemCard"><span><?php echo  $vagaItem->linguaguem2; ?></span></div>
                                            <div class=" m-2 linguagemCard"><span><?php echo  $vagaItem->linguaguem3; ?></span></div>
                                        </div>

                                        <div class="infoVagaCard">
                                            <div>
                                                <i class="ri-money-dollar-circle-line iconFinan"></i>
                                                <?php echo  $vagaItem->salario; ?>
                                            </div>
                                            <div>
                                                <i class="ri-map-pin-line iconMap"></i>
                                                <?php echo  $vagaItem->localizacao; ?>
                                            </div>
                                            <div>
                                                <i class="ri-computer-line iconDevice"></i>
                                                <?php echo  $vagaItem->tipoVaga; ?>
                                            </div>
                                        </div>
                                        <div class="textVagaCard"><?php echo  $vagaItem->descricao; ?></div>
                                        <div><span class="detalhesVaga">Ver mais detalhes> </span></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php $i++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="corHeader">
        <div class="container mt-4">
            <div class="row pt-5 pb-5">
                <div class="col-sm-4">
                    <img src="./src/img/Logotipo.png" alt="" />
                </div>
                <div class="col-sm-4 info">
                    <h6 class="colortitle">Contato e Endereço</h6>
                    <div class="d-flex">
                        <div class="iconPadrao"><i class="ri-phone-line iconContatos "></i></div>
                        <p class="textContatos">4003-5442</p>
                    </div>
                    <div class="d-flex">
                        <div class="iconPadrao"><i class="ri-mail-line iconContatos"></i></div>
                        <p class="textContatos">contato@arnia.com.br</p>
                    </div>
                    <div class="d-flex">
                        <div class="btnLocaliza"><i class="ri-map-pin-line iconContatos"></i></div>
                        <p class="textContatos">Av. do Contorno, 2905 Santa Efigênia, Belo Horizonte - MG,
                            30110-080</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <button class="btn text-light border border-white">
                        Entrar
                    </button>
                    <button class="ms-3 btn botao">
                        Cadastre-se gratuitamente
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
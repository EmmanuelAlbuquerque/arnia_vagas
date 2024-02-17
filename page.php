<?php
include('classVaga.php');
$tecnologias = ['React', 'PHP', 'Java', 'Python', '.Next', 'CSS', 'HTML', 'Ruby', 'GO', 'MySQL', 'MariaDB'];
$tVagas = ['Remota', 'Presencial', 'Hibrida'];
$rTrabalho = ['CLT', 'PJ'];
$tamanho = ['Pequena', 'Media', 'Grande'];
$nExperiencia = ['Junior', 'Pleno', 'Sênior'];

$vagas = array();
for ($i = 0; $i < 5; $i++) {
    $vagas[] = new VAGAS("Desenvolvedor de Sistemas Pleno", "PHP", 2000, "SobraL", "Remoto", "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...");
}
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="color">
            <div class="container ">
                <div class="row d-flex justify-content-between header">
                    <!-- LOGO E BOTÃO -->
                    <img class=" col-6" src="./src/img/Logotipo.png" alt="logo">
                    <div class="col-3 ">
                        <button class="btn botao">
                            <?php if (isset($_GET['nome'])) {
                                $nome = $_GET['nome'];
                                echo "Bem-vindo $nome!";
                            } else {
                                echo "Faça Login";
                            } ?>
                        </button>
                    </div>
                    <hr class="border  border-1 linha ">
                </div>

                <!-- FORMULARIO DE PESQUISA -->

                <form class="row d-flex" method="post">
                    <div class="col-sm-4">
                        <label>O quê você procura?</label>
                        <input class=" form-control mb-3 " type="text" name="linguagem" id="" placeholder="Linguagem">
                        <?php if (isset($_POST['linguagem'])) : ?>
                            <span class=" btn mb-4 resultado border-white "><?php echo $_POST['linguagem'] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4">
                        <label>Onde?</label>
                        <input class="form-control " type="text" name="localizacao" id="" placeholder="Localização">
                    </div>
                    <div class="col-sm-4">
                        <button class=" btn botao mt-4 ">Buscar Vagas</button>
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
                <div class="rounded-4 border border-1">
                    <div class="m-3">
                        <span class="titulo">Filtre sua busca</span>
                        <h6 class="titulosCheckbox">Tecnologias</h6>
                        <?php foreach ($tecnologias as $tecnologia) {
                            echo "<input class='textCheckbox' type='checkbox' name='$tecnologia'> $tecnologia <br>";
                        }
                        ?>
                        <h6 class="titulos">Tipo de vaga</h6>
                        <?php foreach ($tVagas as $vagaTipo) {
                            echo "<input class='textCheckbox' type='checkbox' name='$vagaTipo'> $vagaTipo <br>";
                        }
                        ?>
                        <h6 class="titulos">Regime de trabalho</h6>
                        <?php foreach ($rTrabalho as $trabalho) {
                            echo "<input class='textCheckbox' type='checkbox' name='$trabalho'> $trabalho <br>";
                        }
                        ?>
                        <h6 class="titulos">Tamanho da empresa</h6>
                        <?php foreach ($tamanho as $tamanho) {
                            echo "<input class='textCheckbox' type='checkbox' name='$tamanho'> $tamanho <br>";
                        }
                        ?>
                        <h6 class="titulos">Nível de experiência</h6>
                        <?php foreach ($nExperiencia as $experiencia) {
                            echo "<input class='textCheckbox' type='checkbox' name='$experiencia'> $experiencia <br>";
                        }
                        ?>
                    </div>
                    <div>
                        <button class="btn botao alto">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row">
                    <?php $i = 1;
                    foreach ($vagas as $vagaItem) { ?>
                        <div class="col-sm-4 d-flex col-12 mb-4">
                            <div class="card cartao">
                                <div class="card-title"><?php echo $vagaItem->titulo; ?></div>
                                <div class="card-body">
                                    <div class="col-sm-12"><?php echo  $vagaItem->linguaguem; ?></div>
                                    <div class="col-sm-12"><?php echo  $vagaItem->salario; ?></div>
                                    <div class="col-sm-12"><?php echo  $vagaItem->localizacao; ?></div>
                                    <div class="col-sm-12"><?php echo  $vagaItem->tipoVaga; ?></div>
                                    <div class="col-sm-12"><?php echo  $vagaItem->descricao; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="color">
        <div class="container mt-4">
            <div class="row pt-5 pb-5">
                <div class="col-sm-4">
                    <img src="./src/img/Logotipo.png" alt="" />
                </div>
                <div class="col-sm-4 info">
                    <!-- info -->
                    <h6 style="color:#FBB04D">Contato e Endereço</h6>
                    <p>
                        <i class="bi bi-phone"></i>
                        4003-5442
                    </p>
                    <p><i class="bi bi-envelope-at-fill"></i>contato@arnia.com.br</p>
                    <p>
                        <i class="bi bi-geo-alt"></i>
                        Av. do Contorno, 2905 Santa Efigênia, Belo Horizonte - MG,
                        30110-080
                    </p>
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
</body>

</html>
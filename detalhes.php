<?php
include_once('./includes/cabecalho.php');
require_once "src/Usuario.php";
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dadosUser = $usuario->lerUmUsuario();
require_once "./src/Vaga.php";
$vaga = new Vaga;
$vaga->setId($_GET['id']);
$dados = $vaga->lerUmaVaga();
$solicitacao = 1;

if(isset($_POST['adicionar'])){
    $vaga->setIdusuario($_SESSION['id']);
    $vaga->setIdvagas($dados['id']);
    $vaga->setSolicitacao($solicitacao); 
    $vaga->setIdusuario($_SESSION['id']);
    $verificaVaga = $vaga->contaInteressados();
    if($verificaVaga >= 3){
        //OBS acertar quantidade de cadastro
        echo "<script>alert('Já está inscrito nessa vaga selecione outra ;-)')</script>";
        //$vaga->insereIntere();
    }else
    {
        //echo "<script>alert('nao tem vaga  ;-)')</script>";
        $vaga->insereIntere();
    }
    //echo "<script>alert('Clicado  ;-)')</script>";
}
?>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <?php include "includes/header.php"?>
                <!-- Banner -->
                <section id="banner">
                    <main>
                        <h1><?=$dados['nome']?></h1>
                        <pre><?php var_dump($_SESSION['id'])?></pre>
                        <p class="fs-5 col-md-8"><?=$dados['descricao']?></p>
                        <p class="fs-5 col-md-8"><?php var_dump($verificaVaga)?></p>


                        <div class="mb-5">
                            <form action="" method="post">
                                <button href="" name="adicionar" class="button big btn-lg px-4">Se inscreva</button>

                            </form>
                            
                        </div>

<!--                         <hr class="col-3 col-md-2 mb-5">
 -->
                        <div class="row g-5">
                            <div class="col-md-6">
                                <h2>Mais detalhes</h2>
                                <p>Data de publicação <?=$dados['data']?></p>
                                <ul class="icon-list">
                                    <li><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank"><?=$dados['localidade']?></a></li>
                                    <li class="text-muted"><?=$dados['salario']?></li>
                                    <li class="text-muted"><?=$dados['salario']?></li>
                                    <li class="text-muted"><?=$dados['salario']?></li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <h2>Recomendações</h2>
                                <p>Escrever coisas relacionadas a boas praticas na entrevista.</p>
                                <ul class="icon-list">
                                    <li><a href="/docs/5.0/getting-started/introduction/">Bootstrap quick start
                                            guide</a></li>
                                    <li><a href="/docs/5.0/getting-started/webpack/">Bootstrap Webpack guide</a></li>
                                    <li><a href="/docs/5.0/getting-started/parcel/">Bootstrap Parcel guide</a></li>
                                    <li><a href="/docs/5.0/getting-started/build-tools/">Contributing to Bootstrap</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </main>
                </section>
                <hr>
                <!-- VAGAS  BACK-END -->
                
            </div>
        </div>
        <?php include_once('./includes/sidebar.php');?>
    </div>
    <?php include_once('./includes/footer.php');?>
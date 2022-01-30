<?php 
require_once "../src/Categoria.php";
require_once "../src/Vaga.php";

$vaga = new Vaga;
$categoria = new Categoria;

$listarCategoria = $categoria->lerCategorias();
$listarVagas = $vaga->lerVagas();


//detectar os parametros de url
if(isset($_GET['vaga-excluida'])){
    $mensagem = "Vaga excluida com sucesso";
}elseif(isset($_GET['vaga-inserida'])){
    $mensagem = "Vaga criada com sucesso";
}elseif(isset($_GET['vaga-atualizada'])){    
    $mensagem = "Vaga atualizada com sucesso";
}elseif(isset($_GET['logout'])){    
    $mensagem = "Voce saiu do sistema";

}
?>    
    <!-- Banner -->
	<section id="banner">
	    <div class="content">
	        <header>
	            <h1>Minhas Lista de vagas</h1>
	            <p>Site responsível</p>
                <?php if(isset($mensagem)){ ?>
                
                <p class="alert alert-success">
                    <?=$mensagem?>
                </p>
            <?php } ?>
	        </header>
	        <p>Vamos te ajudar na busca do emprego desejado, temos vagas em diversos segmentos.</p>
	        <p>Temos vagas de:</p>
	        <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Região</th>
                            <th>Descrição</th>
                            <th>Beneficio</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarVagas as $dados) { ?>
                            <tr>
                                <td><?= $dados['id'] ?></td>
                                <td><?= $dados['nome'] ?></td>
                                <td><?= $dados['categoria'] ?></td>
                                <td><?= $dados['localidade'] ?></td>
                                <td><?= $dados['descricao'] ?></td>
                                <td><?= $dados['beneficio'] ?></td>
                                <td class="btn-group mr-2">
                                    <a type="button" href="index.php?id=<?= $dados['id'] ?>&editar-vaga" class="btn btn-sm btn-outline-secondary">Atualizar</a>
                                    <a type="button" href="excluir-vaga.php?id=<?= $dados['id'] ?>" id="button" class="btn btn-sm btn-outline-danger delete-person">excluir</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
	        <ul class="actions">
	            <li><a href="vagas.php" class="button big">Página de vagas</a></li>
	        </ul>
	    </div>
	</section>
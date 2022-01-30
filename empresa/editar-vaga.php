<?php
require_once "../src/Categoria.php";
require_once "../src/Vaga.php";



$categoria = new Categoria;
$listarCategoria = $categoria->lerCategorias();

$vaga = new Vaga;
$vaga->setId($_GET['id']);
$dados = $vaga->lerUmaVaga();

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i');

if (isset($_POST['atualizar'])) {
    $vaga->setId($_GET['id']);
    $vaga->setNome($_POST['nome']);
    $vaga->setCategoriaId($_POST['categoria']);
    $vaga->setLocalidade($_POST['localidade']);
    $vaga->setDescricao($_POST['descricao']);
    $vaga->setBeneficio($_POST['beneficio']);
    $vaga->setData($data);
    $vaga->setSalario($_POST['salario']);


    $vaga->atualizarVaga();

    //echo "<script>alert('Email Não encontrado no banco ;-)')</script>";

    header("location:./index.php?minha-vaga&vaga-atualizada");
}

?>

<div class="table-responsive">
    <div class="container">
        <h2>Utilize o formulário abaixo para editar sua vaga</h2>

        <form method="POST">
            <div class="form-row">
                <div class="form-group ">
                    <label for="nome">Vaga nome</label>
                    <input class="form-control" value="<?= $dados['nome'] ?>" type="text" name="nome" id="nome"
                        required>
                </div>
                <div class="form-group ">
                    <label for="categoria">Selecione categoria</label>
                    <select class="form-control" id="categoria" name="categoria" required>
                        <option value=""></option>
                        <?php foreach ($listarCategoria as $listarCategorias) { ?>
                        <option <?php if ($listarCategorias['id'] == $dados['categoria_id']) echo "selected"; ?>
                            value="<?= $listarCategorias['id'] ?>">
                            <?= $listarCategorias['nome'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group ">
                    <label for="cep">Digite o CEP:</label>
                    <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                        onblur="pesquisacep(this.value);" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group ">
                    <label for="localidade">Cidade</label>
                    <input class="form-control" type="text" name="localidade" value="<?= $dados['localidade'] ?>"
                        id="localidade">

                </div>
                <div class="form-group ">
                    <label for="bairro">Bairro</label>
                    <input class="form-control" type="text" name="bairro" id="bairro">

                </div>

            </div>

            <div class="form-group">
                <label for="beneficio">Beneficio:</label>
                <input class="form-control" id="beneficio" type="text" value="<?= $dados['beneficio'] ?>" name="beneficio" rows="3">
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input class="form-control" type="text" id="salario" value="<?= $dados['salario'] ?>" name="salario"
                    rows="3"></input>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" type="text" name="descricao" value=""
                    rows="3"><?= $dados['descricao'] ?></textarea>
            </div>
            <div class="form-group mt-3">
            <button type="submit" class="button big" name="atualizar">Inserir</button>
            </div>
            
        </form>

    </div>

</div>
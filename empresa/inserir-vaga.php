<?php
require_once "../src/Categoria.php";
require_once "../src/Vaga.php";
$categoria = new Categoria;
$listarCategoria = $categoria->lerCategorias();
$vaga = new Vaga;
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i');
if (isset($_POST['inserir'])) {
    $vaga->setNome($_POST['nome']);
    $vaga->setCategoriaId($_POST['categoria']);
    $vaga->setLocalidade($_POST['localidade']);
    $vaga->setDescricao($_POST['descricao']);
    $vaga->setBeneficio($_POST['beneficio']);
    $vaga->setData($data);
    $vaga->setSalario($_POST['salario']);
    $vaga->inserirVaga();
    header("location:./index.php?minha-vaga&vaga-inserida");
}
?>
<div class="table-responsive">
<div class="container">
    <h2>Utilize o formulário abaixo para cadastrar sua vaga</h2>
    <form method="POST">
        <div class="articl-form ">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" required>
        </div>
        <div class="articl-form">
            <label for="categoria">Categoria:</label>
            <select class="custom-select" name="categoria" id="categoria" required>
                <option selected disabled value="">Escolha Categoria</option>
               <?php foreach($listarCategoria as $categorias) {?>
                <option value="<?=$categorias['id']?>"><?=$categorias['nome']?></option>
                <?php }?>
            </select>
        </div>
        <div class="articl-form">
            <label for="localidade" class="col-form-label">Localidade:</label>
            <input type="text" name="localidade" class="form-control" id="localidade" required>
        </div>
        <div class="articl-form">
            <label for="salario" class="col-form-label">Salario:</label>
            <input type="text" name="salario" class="form-control" id="descricao" required>
        </div>
        <div class="articl-form">
            <label for="beneficios" class="col-form-label">Beneficios:</label>
            <input type="text" name="beneficio" class="form-control" id="beneficios" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="2"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="data" name="data" value="<?php echo $data; ?>">
        </div>     
        <div class="d-flex justify-content-center mr-auto modal-footer">
            <button type="submit" class="button big" name="inserir">Inserir</button>
        </div>
    </form>


</div>


</div>
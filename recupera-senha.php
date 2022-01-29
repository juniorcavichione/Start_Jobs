<?php include_once('./includes/cabecalho.php') ?>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <?php include "includes/header.php" ?>
                <!-- Banner -->
                <section id="login">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-5 shadow">
                            <div class="modal-header pb-4 border-bottom-0">

                                <h2 class="text-center fw-bold mb-0">Defina sua nova senha</h2>
                            </div>
                            <div id="div-forms">
                                <form id="login-form" method="POST">
                                    <h3 class="text-center">Digite sendo iguais</h3>

                                    <div class="modal-body pt-0">
                                        <?php if (isset($mensagem)) { ?>
                                        <p class="alert alert-success">
                                            <?= $mensagem ?>
                                        </p>
                                        <?php } ?>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control rounded-4" name="senha1"
                                                id="senha1">
                                            <label for="senha1">Digite a senha</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control rounded-4" name="senha2"
                                                id="senha2">
                                            <label for="senha2">Redigite a mesma senha</label>
                                        </div>
                                        <button class="button primary fit mb-3" name="entrar"
                                            type="submit">Atualizar</button>
                                    </div>
                                </form>
                                <!--==================================================== RECUPERE A SENHA ======================================================-->

                            </div>

                        </div>
                    </div>

                </section>
                <!-- 	<hr>				
				<h2>Vagas</h2> -->
            </div>
        </div>
        <?php include_once('./includes/sidebar.php'); ?>
    </div>
    <?php include_once('./includes/footer.php'); ?>
<?php
  require_once "../src/Vaga.php";
  $vagas = new Vaga;
  $vagas->setId($_GET['id']);
  $vagas->excluirVaga();
  header("location:index.php?minha-vaga&vaga-excluida");
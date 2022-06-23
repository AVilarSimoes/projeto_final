<?php
require "../model/CategoriaModel.php";

$categoria = new CategotiaModel();
$categoria->inserir("Produtos Limpeza");
$categoria->excluir(1);
$categoria->atualizar(2, "SmartPhone");
var_dump($categoria->buscarPorId(3));
var_dump($categoria->buscarTudo());
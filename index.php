<?php

require 'Psr4Autoloader.php';
use entity\Usuario;
use entity\Produto;
use database\DatabaseConnection;

$conexao = DatabaseConnection::getConnection();

$usuario = new Usuario("email@extensao.com", "senha");
$usuario->salvar($conexao);

$produto = new Produto("Coca-Cola 2,5Lt.", 4.80);
$produto->salvar($conexao);










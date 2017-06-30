<?php

require 'Psr4Autoloader.php';
use entity\Usuario;
use database\DatabaseConnection;

$user = new Usuario("email@extensao.com", "senha");
$user->salvar(DatabaseConnection::getConnection());







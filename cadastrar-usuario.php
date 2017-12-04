<?php

require_once __DIR__ . '/class/Modelo/Usuario.php';

$usuario = new Usuario($_GET);
$usuario->salvar();

header('Location: listar-usuario.php');
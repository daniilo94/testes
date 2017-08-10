<?php
require_once 'autoload.php';

use Control\UsuarioControl;

$usuarioControl = new UsuarioControl();

$usuarioControl->getUsuario()->setNome($_POST['nome']);
$usuarioControl->getUsuario()->setSenha($_POST['senha']);
$usuarioControl->getUsuario()->setDataDeNascimento($_POST['birthday']);
$usuarioControl->getUsuario()->setCpf($_POST['cpf']);
$usuarioControl->getUsuario()->setSexo($_POST['sexo']);
$usuarioControl->getUsuario()->setTipoDeAcesso($_POST['acesso']);

$usuarioControl->adicionar();


var_dump($usuarioControl->getUsuarios());
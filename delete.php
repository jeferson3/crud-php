<?php


if ($_GET['id']) {

    require_once('conexao.php');
    
    session_start();
    $crud = new Crud('localhost', 'crud', 'root', '');
    $con = $crud->conexao();
    $crud->deletarDados($con, $_GET['id']);
}

header("location: index.php");

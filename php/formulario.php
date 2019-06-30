<?php
require_once 'conectaBanco.php';

if (isset($_POST['btn'])) {
    $nome = trim($_POST['nome']);
    $idade = $_POST['idade'];
    $uf = $_POST['uf'];

    if (empty($nome) || strlen($nome) < 10) {
        header("Location: ../index.php");
    } elseif (empty($idade) || empty($uf)) {
        header("Location: ../index.php");
    } else {
        $sql = "insert into usuarios (nome,idade,uf) values ('$nome' , '$idade', '$uf')";
        mysqli_query($conecta, $sql);
    }
    if (mysqli_insert_id($conecta)) {
        header("Location: ../index.php");
    }
}
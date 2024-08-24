<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SQL/CRUD/crud_estudo/models/animal.php';

$id = $_POST['id'];
$nome = $_POST ['nome'];

$animal = new Animal ($id);

$animal->setNome($nome);

$animal->atualizar();

header('Location: /SQL/CRUD/crud_estudo/index.php');
exit();

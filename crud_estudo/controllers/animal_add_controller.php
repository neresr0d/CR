<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SQL/CRUD/crud_estudo/models/animal.php';

$nome = $_POST ['nome'];

$animal = new Animal ();

$animal->setNome($nome);

$animal->criar();

header('Location: /SQL/CRUD/crud_estudo/index.php');
exit();
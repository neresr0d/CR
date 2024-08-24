<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SQL/CRUD/crud_estudo/models/animal.php';

$id = $_POST['id'];

$animal = new Animal($id);

$animal->deletar();

header('Location: /SQL/CRUD/crud_estudo/index.php');
exit();
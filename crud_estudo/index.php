<?php
// liga conexão ao index

require_once $_SERVER['DOCUMENT_ROOT'] . '/SQL/CRUD/crud_estudo/models/animal.php';

$lista = Animal::listar();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomes de animais</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>

<body>
    <section class="m-3">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th colspan="2">
                    <a href="/SQL/CRUD/crud_estudo/views/animal_add_view.php" class="btn btn-success"><span class="material-symbols-outlined">add</span>Adicionar</a>
                </th>
            </tr>

            <?php foreach ($lista as $animal): ?>
                <tr>
                    <td><?= $animal['nome']; ?></td>
                    <td>
                        <a href="/SQL/CRUD/crud_estudo/views/animal_edit_view.php?id=<?= $animal['id_animal'] ?>" class="btn btn-warning"><span class="material-symbols-outlined">edit</span>
                            Editar
                        </a>

                    </td>
                    <td>
                        <form action="/SQL/CRUD/crud_estudo/controllers/animal_del_controller.php" method="post" onsubmit="return confirm('Você tem certeza que quer deletar o registro?')"> <input type="hidden" name="id" value="<?= $animal['id_animal'] ?>">
                            <button type="submit" class="btn btn-danger"><span class="material-symbols-outlined">delete</span>Deletar</button>

                        </form>

                    </td>

                </tr>
            <?php endforeach; ?>





        </table>

    </section>
</body>

</html>
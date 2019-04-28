<?php
include "conecta.php";
// include "excluir.php";
// include "editar.php";


if (isset($_POST['selecionar'])) {
    $sql = "SELECT * FROM usuarios WHERE 1";
    $resultado = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($resultado);
    ?>



    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Document</title>
    </head>

    <body>
        <h2>edicao e exclusão </h2>

        <?php
        for ($i = 0; $i < $linhas; $i++) {
            $buscaC = mysqli_fetch_array($resultado);
        ?>
            <form action="" method="POST">
                    <input type="text" name="nome" value="<?= $buscaC['nome'] ?>">
                    
                    <input type="text" name="email" value="<?= $buscaC['email'] ?>">
                    
                    <input type="text" name="cpf" value="<?= $buscaC['cpf'] ?>">

                <input type="text" name="endereco" value="<?= $buscaC['endereco'] ?>">

                <input type="hidden" name="codigo" value="<?= $buscaC['usuario'] ?> ">

                <button type="submit" name="editar">Editar</button>

                <button type="submit" name="excluir">Excluir</button>


            </form>
        <?php
    }
    ?>
    </body>

    </html>
    
    
<?php
}

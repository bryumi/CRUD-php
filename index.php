<?php
include 'dao/GENERO.php';
// buscando os tipos de cooperativas cadastradas no banco de dados
$gen = new Genero_DAO();
$arr_gen = $gen->findAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    include('styles.php');

    ?>
    <title>Home</title>
</head>

<body>
    <main>
        <div class="title">
            <h1>
                Cadastro de séries
            </h1>
        </div>
        <div class="form-auth">

            <form action="/users" method="post" enctype="multipart/form-data">

                <div class="name">
                    <label for="name">Nome da Série:</label>
                    <input type="text" name="nomeSerie" placeholder="Stranger Things">

                </div>
                <div class="genero">
                    <label for="genero">Gênero da série: </label>
                    <select name="genero">
                        <option value="none" selected disabled hidden>Selecione um gênero</option>
                        <?php
                        foreach ($arr_gen as $objGen) {
                            echo "<option value='" . $objGen->getIdGenero() . "'>" . $objGen->getNomeGenero() . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="anoIni">

                    <label for="anoIni">Ano de início:</label>
                    <input type="number" name="anoIni" placeholder="1994">
                </div>
                <div class="anoFim">

                    <label for="anoFim">Ano de encerramento:</label>
                    <input type="number" name="anoFim" placeholder="2004">
                    <label id="andamento" for="emAndamento">Em Andamento</label>
                    <input type="checkbox" name="emAndamento">

                </div>
                <div class="temporadas">
                    <label for="temporadas">Número de temporadas: </label>
                    <input type="number" name="temporadas" placeholder="Ex: 10">
                </div>

                <div class="atores">
                    <label for="atores">Principais atores:</label>
                    <input type="text" name="atores" placeholder="Ex: Sadie Sink">
                </div>
                <div class="sinopse">
                    <label for="sinopse">Sinopse:</label>
                    <textarea id="story" name="sinopse">
                    </textarea>
                </div>
                <div class="nota">
                    <label for="nota">Nota no IMDb</label>
                    <input type="number" name="nota" placeholder="7.5">
                </div>

                <div class="sign-in">
                    <button class="submit-button" type="submit">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>
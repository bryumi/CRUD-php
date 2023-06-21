<?php
include 'dao/GENERO_DAO.php';
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/DAO/SERIES_DAO.php");
$obj_serie = new SERIES_DAO();
$v_id = $_GET['id'];
$serie = $obj_serie -> findById($_GET['id']);
$v_gen = $serie -> getIdGen();


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
    <title>Excluir</title>
</head>

<body>
<?php
    include('header.php')
?>
    <main>
        <div class="title">
            <h1>
                Excluir cadastro: <?php echo $serie->getNome();?>
            </h1>
        </div>
        <div class="form-auth">

            <form>
                <input id="id" name="id" type="hidden" value="<?php echo $v_id?>">

                <div class="name">
                    <label for="name">Nome da Série:</label>
                    <input type="text" name="nomeSerie" placeholder="Friends" value="<?php echo $serie->getNome();?>">

                </div>
                <div class="genero">
                    <label for="genero">Gênero da série: </label>
                    <select name="genero">
                        <option value="none" selected disabled hidden>Selecione um gênero</option>
                        <?php
                        foreach ($arr_gen as $objGen) {
                            if ($objGen -> getIdGenero() == $v_gen){
                                echo "<option selected value='" . $objGen->getIdGenero() . "'>" . $objGen->getNomeGenero() . "</option>";
                            } else {

                                echo "<option value='" . $objGen->getIdGenero() . "'>" . $objGen->getNomeGenero() . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="anoIni">

                    <label for="anoIni">Ano de início:</label>
                    <input type="number" name="anoIni" placeholder="1994" value="<?php echo $serie->getAnoIni();?>">
                </div>
                <div class="anoFim">

                    <label for="anoFim">Ano de encerramento:</label>
                    <input type="number" name="anoFim" placeholder="2004"
                        value="<?php if($serie->getAnoFim() > 0) echo $serie->getAnoFim();?>">
                    <label id="andamento" for="emAndamento">Em Andamento</label>
                    <input type="checkbox" name="emAndamento" <?php if($serie->getAnoFim() == 0) echo "checked" ?>>

                </div>
                <div class="temporadas">
                    <label for="temporadas">Número de temporadas: </label>
                    <input type="number" name="temporadas" placeholder="Ex: 10"
                        value="<?php echo $serie->getTemporadas();?>">
                </div>

                <div class="atores">
                    <label for="atores">Principais atores:</label>
                    <input type="text" name="atores" placeholder="Ex: Sadie Sink"
                        value="<?php echo $serie->getAtores();?>">
                </div>
                <div class="sinopse">
                    <label for="sinopse">Sinopse:</label>
                    <textarea id="story" name="sinopse" placeholder="">
                    <?php echo $serie->getSinopse();?>
                    </textarea>
                </div>
                <div class="nota">
                    <label for="nota">Nota no IMDb</label>
                    <input type="number" name="nota" placeholder="7.5" value="<?php echo $serie->getNota();?>">
                </div>

                <div class="excluir">
                    <div>
                        <a href="lista.php">
                            Cancelar
                        </a>
                    </div>
                    <div>

                        <?php echo "<a href=exedelete.php?id=".$serie->getId().">Excluir</a>\n";?>
                    </div>
                    
                </div>
            </form>
        </div>
    </main>

</body>

</html>
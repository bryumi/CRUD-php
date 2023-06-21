<!DOCTYPE html>
<html lang="en">
<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/DAO/SERIES_DAO.php");
$obj_serie = new SERIES_DAO();
$arr = $obj_serie->findAll();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="lista_styles.css" media="screen" /> -->
  <?php

include('lista_styles.php');

?>
  <title>Lista de séries</title>
</head>

<body>
<?php
    include('header.php')
?>
  <div class="container">
    <div class="wrap">
      <main>
        <div class="container-table">
          <table>
            <tbody>
              <th>Nome</th>
              <th>Genero</th>
              <th>Ano de Início</th>
              <th>Ano de término</th>
              <th>Temporadas</th>
              <th>Atores</th>
              <th>Sinopse</th>
              <th>Nota</th>
              <th>Editar</th>
              <th>Excluir</th>
              <?php
              foreach ($arr as $chave => $valor) {
                echo "<tr>\n";
                echo "<td>" . $valor->getNome() . "</td>\n";
                echo "<td>" . $valor->getSerieNomeGen() . "</td>\n";
                echo "<td>" . $valor->getAnoIni() . "</td>\n";
                if ($valor->getAnoFim() == 0){
                  echo "<td>Em andamento</td>\n";
                } else {

                  echo "<td>" . $valor->getAnoFim() . "</td>\n";
                }
                echo "<td>" . $valor->getTemporadas() . "</td>\n";
                echo "<td>" . $valor->getAtores() . "</td>\n";
                echo "<td>" . $valor->getSinopse() . "</td>\n";
                echo "<td>" . $valor->getNota() . "</td>\n";
                echo "<td><a href=edit.php?id=".$valor->getId().">Editar</a></td>\n";
                echo "<td><a href=excluir.php?id=".$valor->getId().">Excluir</a></td>\n";
                echo "</tr>\n";
              }
              ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
</body>

</html>
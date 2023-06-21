<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/CRUD-php/DAO/GENERO_DAO.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/CRUD-php/DAO/SERIES_DAO.php');
    //Instanciando objetos
    $nova_serie = new SERIE();
    $nova_serie_gen = new genero();
    $nova_serie_dao = new SERIES_DAO();
    //Criando objetos tipo e area
    $nova_serie_gen->setIdGenero($_POST['genero']);
    //Criando objeto cooperativa
    $nova_serie->setId($_POST['id']);
    $nova_serie->setNome($_POST['nomeSerie']);
    $nova_serie->setAnoIni($_POST['anoIni']);
    $nova_serie->setAnoFim($_POST['anoFim']);
    $nova_serie->setSerieIdGen($nova_serie_gen);
    $nova_serie->setTemporadas($_POST['temporadas']);
    $nova_serie->setAtores($_POST['atores']);
    $nova_serie->setSinopse($_POST['sinopse']);
    $nova_serie->setNota($_POST['nota']);
    //Inserindo no banco de dados
    $nova_serie_dao->alterar($nova_serie);
?>
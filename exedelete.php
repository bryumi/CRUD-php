<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/CRUD-php/DAO/SERIES_DAO.php');
    //Instanciando objetos
    $nova_serie = new SERIE();
    $nova_serie_dao = new SERIES_DAO();
    //Criando objeto cooperativa
    $nova_serie->setId($_GET['id']);
    //Inserindo no banco de dados
    $nova_serie_dao->excluir($nova_serie);
?>
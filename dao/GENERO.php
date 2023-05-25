<?php

require_once "./classes/genero.php";
require_once ("DB.php");

class Genero_DAO extends DB {

	//Carrega um elemento pela chave primária
	public function findById($id_genero){
		$sql = 'SELECT * FROM genero WHERE id_genero = :id_genero';
		$stmt = DB::prepare($sql);
		$stmt->bindValue(":id_genero",$id_genero);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		$objeto = new genero();
		foreach($arr as $chave => $valor){
		    $objeto->setIdGenero($valor->id_genero);
            $objeto->setNomeGenero($valor->nomeGenero);
		}
		return $objeto;
	}

	//Lista todos os elementos da tabela
	public function findAll(){
		$sql = 'SELECT * FROM genero';
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		// Montando o array de objetos
        foreach($arr as $chave => $valor){
            $objeto = new genero();
            $objeto->setIdGenero($valor->id_genero);
            $objeto->setNomeGenero($valor->nomeGenero);
            $arrGeneros[] = $objeto;
        }
        return $arrGeneros;
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function findAllOrdered($coluna){
		$sql = "SELECT * FROM TIPOS_COOPERATIVAS ORDER BY :coluna ASC";
		$stmt = DB::prepare($sql);
		$stmt->bindValue(":coluna",$coluna);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		// Montando o array de objetos
        foreach($arr as $chave => $valor){
            $objeto = new tipo_cooperativa();
            $objeto->setTpc_id($valor->tpc_id);
            $objeto->setTpc_nome($valor->tpc_nome);
            $objeto->setTpc_desc($valor->tpc_desc);
            $arrTipos[] = $objeto;
        }
        return $arrTipos;
	}
	
}

?>
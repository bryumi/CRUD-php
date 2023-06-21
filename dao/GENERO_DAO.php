<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/classes/genero.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/DAO/DB.php");
class Genero_DAO extends DB {

	//Carrega um elemento pela chave primária
	public function findById($id){
		$sql = 'SELECT * FROM genero WHERE id = :id';
		$stmt = DB::prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		$objeto = new genero();
		foreach($arr as $chave => $valor){
		    $objeto->setIdGenero($valor->id);
            $objeto->setNomeGenero($valor->nome);
		}
		return $objeto;
	}

	//Lista todos os elementos da tabela
	public function findAll(){
		$sql = 'SELECT * FROM genero';
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		// // Montando o array de objetos
        foreach($arr as $chave => $valor){
            $objeto = new genero();
            $objeto->setIdGenero($valor->id);
            $objeto->setNomeGenero($valor->nome);
            $arrGeneros[] = $objeto;
        }
        return $arrGeneros;
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function findAllOrdered($coluna){
		$sql = "SELECT * FROM genero ORDER BY :coluna ASC";
		$stmt = DB::prepare($sql);
		$stmt->bindValue(":coluna",$coluna);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		// Montando o array de objetos
        foreach($arr as $chave => $valor){
            $objeto = new genero();
            $objeto->setIdGenero($valor->id_genero);
            $objeto->setNomeGenero($valor->nomeGenero);
            $arrGen[] = $objeto;
        }
        return $arrGen;
	}
	
}

?>
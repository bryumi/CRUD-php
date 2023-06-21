<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/classes/series.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/DAO/DB.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/CRUD-php/DAO/GENERO_DAO.php");
	   
class SERIES_DAO extends DB {

	//Insere um elemento na tabela
	public function inserir($serie){
		$sql = "INSERT INTO series(nomeSerie, anoIni, anoFim, temporadas, atores, sinopse, nota, id_generos) VALUES (?,?,?,?,?,?,?,?)";
		$stmt = DB::prepare($sql);
		$nome = $serie->getNome();
		$anoIni= $serie->getAnoIni();
		$anoFim = $serie->getAnoFim(); 
		$temporadas = $serie->getTemporadas();
		$atores = $serie->getAtores();
		$sinopse= $serie->getSinopse();
		$nota = $serie->getNota();
		$gen = $serie->getIdGen();


		$stmt->bindValue(1,$nome, PDO::PARAM_STR); 
		$stmt->bindParam(2, $anoIni, PDO::PARAM_INT); 
		$stmt->bindParam(3, $anoFim, PDO::PARAM_INT); 
		$stmt->bindParam(4, $temporadas, PDO::PARAM_INT);
		$stmt->bindParam(5, $atores, PDO::PARAM_STR);
		$stmt->bindParam(6, $sinopse, PDO::PARAM_STR); 
		$stmt->bindParam(7, $nota, PDO::PARAM_STR); 
		$stmt->bindParam(8, $gen, PDO::PARAM_INT); 

		try{
		    $stmt->execute();
		    header('Location: lista.php');
            exit();
		} catch (Exception $e){
		    header('Location: cadastro.php');
            exit();
		}
		
	}

	public function findById($id){
		$sql = 'SELECT * FROM series WHERE id = :id';
		$stmt = DB::prepare($sql);
		$stmt->bindValue("id",$id);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		$objeto = new serie();
		$objeto_genero_dao = new Genero_DAO();
		foreach($arr as $chave => $valor){
			$objeto->setId($valor->id);
            $objeto->setNome($valor->nomeSerie);
            $objeto->setAnoIni($valor->anoIni);
            $objeto->setAnoFim($valor->anoFim);
            $objeto->setTemporadas($valor->temporadas);
			$objeto->setAtores($valor->atores);
			$objeto->setSinopse($valor->sinopse);
			$objeto->setNota($valor->nota);
            $objeto->setSerieIdGen($objeto_genero_dao->findById($valor->id_generos));
		}
		return $objeto;
	}

	public function findAll(){
		$sql = 'SELECT * FROM series ORDER BY nomeSerie';
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		foreach($arr as $chave => $valor){
		    $objeto = new serie();
		    $objeto_genero_dao = new GENERO_DAO();
		    $objeto->setId($valor->id);
            $objeto->setNome($valor->nomeSerie);
            $objeto->setAnoIni($valor->anoIni);
            $objeto->setAnoFim($valor->anoFim);
            $objeto->setTemporadas($valor->temporadas);
			$objeto->setAtores($valor->atores);
			$objeto->setSinopse($valor->sinopse);
			$objeto->setNota($valor->nota);
            $objeto->setSerieIdGen($objeto_genero_dao->findById($valor->id_generos));
            $arraySeries[] = $objeto;
		}
		return $arraySeries;
	}
	public function alterar($serie){
		$sql = "UPDATE series SET nomeSerie = ?, anoIni = ?, anoFim = ?, temporadas =?, atores = ?, sinopse = ?, nota = ?, id_generos = ? WHERE id = ?";
		$stmt = DB::prepare($sql);
		$nome = $serie->getNome();
		$anoIni= $serie->getAnoIni();
		$anoFim = $serie->getAnoFim(); 
		$temporadas = $serie->getTemporadas();
		$atores = $serie->getAtores();
		$sinopse= $serie->getSinopse();
		$nota = $serie->getNota();
		$gen = $serie->getIdGen();
		$id = $serie ->getId();


		$stmt->bindValue(1,$nome, PDO::PARAM_STR); 
		$stmt->bindValue(2, $anoIni, PDO::PARAM_INT); 
		$stmt->bindValue(3, $anoFim, PDO::PARAM_INT); 
		$stmt->bindValue(4, $temporadas, PDO::PARAM_INT);
		$stmt->bindValue(5, $atores, PDO::PARAM_STR);
		$stmt->bindValue(6, $sinopse, PDO::PARAM_STR); 
		$stmt->bindValue(7, $nota, PDO::PARAM_STR); 
		$stmt->bindValue(8, $gen, PDO::PARAM_INT); 
		$stmt->bindValue(9, $id, PDO::PARAM_INT); 

	
		try{
		    $stmt->execute();
		    header('Location: lista.php');
            exit();
		} catch (Exception $e){
			header('Location: cadastro.php');
            exit();
		    // $pagina = "Location: ".$_SERVER['DOCUMENT_ROOT']."/crud-php/editar.php?id=".$serie->getId();
		    // header($pagina);
            // exit();
		}
	
	}

	public function excluir($serie){
		$sql = 'DELETE FROM series WHERE id = :id';
		$stmt = DB::prepare($sql);
		$stmt->bindValue(':id',$serie->getId());

		try{
		    $stmt->execute();
		    header('Location: lista.php');
            exit();
		} catch (Exception $e){
		    header('Location: lista.php');
            exit();
		}	
	}
}

?>
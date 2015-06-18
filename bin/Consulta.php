<?php

class Consulta
{
	private $datos;
	
	function __construct ($conn, $query)
	{
		$this->datos = $this->ejecutar($conn, $query);
	}
	
	private function ejecutar($conn, $query)
	{
		try
		{
			$stmt = $conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		catch (PDOException $ex) 
		{
			echo "Error al ejecutar la consulta";
			exit;
		}   
	}
	
	public function getFilas()
	{
		return $this->datos;
	}
	
	public function getPrimerFila($columna)
	{
		if(!$this->isVacio())
		{
			return $this->getFilas()[0][$columna];	
		}
		else return "";	
	}

	public function isVacio()
	{
		if(count($this->getFilas()) == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>
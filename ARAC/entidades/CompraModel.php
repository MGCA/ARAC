<?php
class Compra{
    private $pdo;
    
    public $numCompra;
    public $encargadoCompra;
    public $nombreNegocio;
    public $motivoCompra;
    public $lugarCompra;
    public $fechaCompra;
    public $montoTotalCompra;
    
    public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM compra");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM compra WHERE numCompra = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM compra WHERE numCompra = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE compra SET 
						encargadoCompra          = ?, 
						nombreNegocio        = ?,
                                                motivoCompra          = ?,
						lugarCompra            = ?, 
						fechaCompra = ?,
                                                montoTotalCompra = ?
				    WHERE numCompra = ?";
                        
//   numCompra-encargadoCompra-nombreNegocio-motivoCompra-lugarCompra-fechaCompra-montoTotalCompra;

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                                        $data->encargadoCompra, 
                                        $data->nombreNegocio,
                                        $data->motivoCompra,
                                        $data->lugarCompra,
                                        $data->fechaCompra,
                                        $data->montoTotalCompra,
                                        $data->id
                                    )
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Compra $data)
	{
		try 
		{
                    //   numCompra-encargadoCompra-nombreNegocio-motivoCompra-lugarCompra-fechaCompra-montoTotalCompra;
		$sql = "INSERT INTO compra (numCompra,encargadoCompra,nombreNegocio,motivoCompra,lugarCompra,fechaCompra,montoTotalCompra) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                                    $data->numCompra,
                                    $data->encargadoCompra,
                                    $data->nombreNegocio, 
                                    $data->motivoCompra, 
                                    $data->lugarCompra,
                                    $data->fechaCompra,
                                    $data->montoTotalCompra
                                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}